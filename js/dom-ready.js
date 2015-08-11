// MODULE summernote
var App = App || {};
App.document_album_id = 3;

App.upload_file = function (file, callback) {
	var data = new FormData();
	data.append('album_id', App.document_album_id);
	data.append('file', file);
	var url = App.base + '/gallery/pictures/upload';
	$.ajax({
		url: url,
		data: data,
		type: 'POST',
		xhr: function() {
			var myXhr = $.ajaxSettings.xhr();
			//if (myXhr.upload) myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
			return myXhr;
		},
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			console.log('cake_gallery returned:');
			console.log(data);
			callback(data.picture.Picture.link);
		}
	});
};

if ($().summernote) $('textarea[data-provide=wysiwyg]').each(function (i,e) {
	var height = $(e).data('wysiwyg-height');
	$(e).summernote({
		lang: 'cs-CZ',
		height: height ? height : 680,
		toolbar: [
				['css', ['style']],
				['style', ['bold', 'italic', 'underline', 'clear']],
		//	  ['font', ['strikethrough', 'superscript', 'subscript', 'height']],
				['para', ['ul', 'ol', 'paragraph', 'height']],
				['insert', ['link', 'hr', 'table', 'picture']],
				['misc', ['codeview', 'fullscreen']],
				['help', ['help']],
		],
		onImageUpload: function(files) {
			var $note = $(this);
			var callback = function (url) {
				$note.summernote('insertImage', url);
			};
			for (var i=0; i<files.length; i++) {
				//console.log('image to upload:', files[i]);
				App.upload_file(files[i], callback);
			}
		}
	});
});

// MODULE sortable
$('.list-group').each(function (i,e) {
	var id = e.id;
	var $e = $(e);
	Sortable.create(document.getElementById(id), {
		handle: '.glyphicon-move',
		animation: 150,
		// dragging ended
		onEnd: function (/**Event*/ e) {
			var data = $e.find('[data-item-id]').map(function (i,v) {
				return {
					'id': $(v).data('item-id'),
					'ord': i
				};
			}).toArray();
			var url = $e.data('reorder-url') || window.location.href;
			$.post(url, {data:data});
		}
	});
});

// MODULE: eonasdan timepicker
$('input[data-provide=datepicker]').datetimepicker({
	format: 'D.M.YYYY',
	locale: App.session_locale,
	useCurrent: false,
	viewMode: 'months',
	showTodayButton: true,
	showClear: true
})
.next().click(function() {
	// clicking an input-group-addon (next sibling)
	$(this).prev().focus();
});
$('input#CalendarItemStart').on('dp.hide', function (e) {
	// sensible default for BookingEnd
	var $end = $('input#CalendarItemEnd');
	$end.data('DateTimePicker').minDate(e.date);
	if (!$end.val()) {
		$end.data('DateTimePicker').date(e.date.add(1, 'h'));
	}
});
$('input#CalendarItemEnd').on('dp.hide', function (e) {
	// sensible default for BookingStart
	var $start = $('input#CalendarItemStart');
	$start.data('DateTimePicker').maxDate(e.date);
	if (!$start.val()) {
		$start.data('DateTimePicker').date(e.date.subtract(1, 'h'));
	}
});

// MODULE swipebox (in Photos/view.ctp)
if ($().swipebox && $('.swipebox')) {
	$('.swipebox').swipebox({
		hideBarsDelay : false
	});
}

// MODULE dropzone
Dropzone.autoDiscover = false;
Dropzone.options = {
	url: '/gallery/pictures/upload',
	params: {
		album_id: 'to-be-replaced-at-bind-time'
	},
	thumbnailWidth: 628,
	thumbnailHeight: null,
	maxFiles:  1,
	autoQueue: true,
	clickable: ".dz-clickable",
	addRemoveLinks: true,
	previewsContainer: '.dropzone-previews',
	init: function() {
		var $input_el = $('.dropzone #' + this.options.params.input_id);

		this.on('addedfile', function(file) {
			$('.dropzone .dz-clickable').hide();
		});
		this.on('removedfile', function(file) {
			$('.dropzone .dz-clickable').show();
			$input_el.val(null);
		});
		this.on('success', function(file, response) {
			$input_el.val(response.picture.Picture.id);
		});

		if (this.options.params.current_picture) {
			var picture = this.options.params.current_picture;
			this.emit('addedfile', picture);
			this.emit('thumbnail', picture, picture.styles.medium);
			this.emit('complete',  picture);
		}
	}
};
if ($('.dropzone').length) {
	var $dz = $('.dropzone');
	var $input = $dz.find('[data-album-id]');

	 // for showing current picture in the edit action
	Dropzone.options.params.current_picture = $input.data('picture');

	// fresh post values for cakegallery which does the server side saving
	Dropzone.options.params.album_id   = $input.data('album-id');
	Dropzone.options.params.model_name = $input.data('model-name');

	// for rendering hidden input with new picture
	Dropzone.options.params.input_id   = $input.attr('id');
	Dropzone.options.params.input_name = $input.attr('name');

	$dz.children('div').html(App.render['/Sliders/dropzone'](Dropzone.options.params));

	// make whole body a dropzone
	$(document.body).dropzone(Dropzone.options);
}

// MODULE slug.js
if ($('input[data-provide=slug-src]')) {
	$('input[data-provide=slug-src]').on('keyup', function () {
		var slug_val = slug($('input[data-provide=slug-src]').val(), {lower: true});
		$('input[data-provide=slug-dst]').val(slug_val);
	});
}
