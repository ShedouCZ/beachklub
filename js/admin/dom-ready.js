// MODULE summernote
var App = App || {};
App.document_album_id = 3;
var $ = $ || jQuery;

App.upload_file = function (file, callback, remote_url) {
	var data = new FormData();
	data.append('album_id', App.document_album_id);
	if (remote_url) {
		// filename = basename(remote_url)
		var filename = remote_url.split(/[\\/]/).pop();
		data.append('file', file, filename);
	} else {
		data.append('file', file);
	}

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
			callback(data.picture.Picture, remote_url);
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
			var callback = function (picture) {
				$note.summernote('insertImage', picture.link);
			};
			for (var i=0; i<files.length; i++) {
				//console.log('image to upload:', files[i]);
				App.upload_file(files[i], callback);
			}
		},
		styleWithSpan: false,
		onPaste: function (e) {
			var $note = $(this);
			var html = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('text/html');

			// artificial div parent
			// as 'find' needs a top level element it searches beneath
			var $dom = $('<div/>').append($(html).not('meta'));
			$dom.find('[style]').removeAttr('style');
			$dom.find('.MsoNormal').removeClass('MsoNormal');
			$dom.find('*[class=""]').removeAttr('class');
			$dom.find('.Apple-converted-space').replaceWith('&nbsp;');
			$dom.find('.Apple-interchange-newline').replaceWith('<br/>');
			if ($dom.find('h1').length == 1) {
				// make title from the sole h1 we got
				$('input#DocumentTitle').val($dom.find('h1').text()).trigger('keyup'); // keyup to notify slug module
				$dom.find('h1').remove();
			}
			// h2 -> h3
			$dom.find('h2').replaceWith( function () {
				return $("<h3 />").append($(this).contents());
			});

			var callback = function (picture, remote_url) {
				// switch img url in the content area of $note
				// TODO reliably get correct note-editable
				// TODO do not have exact resized size from image backend now
				// var local_url = picture.link; - original size
				var local_url = picture.styles.docs;

				$('.note-editable').find('[src="'+remote_url+'"]')
					.attr('src', local_url)
					.attr('width', 570)
					.removeAttr('height')
					.removeAttr('border')
				;
			};

			// upload images
			// needs a cors proxy on vpslist.cz:8080 working
			$dom.find('img').each(function (i,e) {
				var remote_url = $(e).attr('src');
				var proxy_url  = 'http://vpslist.cz:8080/' + remote_url;
				var xhr = new XMLHttpRequest();
				xhr.onload = function () {
					App.upload_file(this.response, callback, remote_url);
				};
				xhr.onerror = function () {
					alert('error getting ' + proxy_url + "\n\n" + 'Is the cors proxy running?');
				};
				xhr.open('GET', proxy_url);
				xhr.responseType = 'blob';
				xhr.send();
			});

			//NOGO - access denied in Chrome
			//e.originalEvent.clipboardData.clearData();
			//e.originalEvent.clipboardData.setData('text/html', $dom.html());

			e.preventDefault();

			console.log($note.code());
			if ($note.code() == '<p><br></p>' || $note.code() === '' || $note.code() === '<h1><br></h1>') {
				// works, but destroys previous contents
				$note.code($dom.html());

				// vice informaci zde
				$('input[data-provide=slug-dst]').trigger('keyup'); // keyup to notify slug-dst observers;
			} else {
				// dont' know why setTimeout is set
				// $note.summernote('pasteHTML', $dom.html());
				setTimeout( function() {
					// append children of our artificial div parent
					$dom.children().each(function (i,e) {
						$note.summernote('insertNode', e);
					});

					// vice informaci zde
					$('input[data-provide=slug-dst]').trigger('keyup'); // keyup to notify slug-dst observers;
				}, 10);
			}
		}
	});
});
if ($().summernote) $('.air-mode').each(function (i,e) {
	$(e).summernote({
		lang: 'cs-CZ',
		airMode: true
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
if ($().datetimepicker) $('input[data-provide=datepicker]').datetimepicker({
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
if (typeof Dropzone != 'undefined') {
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
				// recieved picture id goes into the form
				$input_el.val(response.picture.Picture.id);
			});

			if (this.options.params.current_picture) {
				// mock a picture arrival in edit forms with existing picture
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

		$dz.children('div').html(App.render['/Elements/dropzone'](Dropzone.options.params));

		// make whole body a dropzone
		$(document.body).dropzone(Dropzone.options);
	}
}

// MODULE slug.js
if ($('input[data-provide=slug-src]')) {
	// observe slug-src to update slug-dst
	$('input[data-provide=slug-src]').on('keyup', function () {
		var slug_val = slug($('input[data-provide=slug-src]').val(), {lower: true});
		$('input[data-provide=slug-dst]').val(slug_val).trigger('keyup'); // keyup to notify slug-dst observers;
	});
	// observe slug-dst to update summernote content links
	$('input[data-provide=slug-dst]').on('keyup', function () {
		// vice informaci zde
		$('.note-editable').find('a:contains(zde)').each(function (i,e) {
			var url = '/' + $('input[data-provide=slug-dst]').val();
			$(e).attr('href', url);
		});
	});
}
