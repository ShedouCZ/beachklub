<div class="sliders form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
					<ul class="nav nav-pills pull-right">
						<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete'), array('action'=>'delete', $this->Form->value('Slider.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Slider.id'))); ?></li>
						<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Sliders'), array('action'=>'index'), array('escape'=>false)); ?></li>
					</ul>
				<h1><?php echo __('Admin Edit Slider'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Slider', array('role'=>'form', 'class'=>'dropzone form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class'=>'form-control', 'placeholder'=>__('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				
				<div class="form-group">
					<label for="SliderUrl" class="col-sm-2 control-label">Slide</label>
					<div class="col-sm-9">
						<input type="hidden" name="album_id" value="3" class="dz-message"/>
						<?php echo $this->Form->input('url', array('type'=>'hidden')); ?>
						<?php echo $this->Form->input('picture_id', array('type'=>'hidden')); ?>
						<p class="form-control-static dropzone-previews">
							<a href="javascript:void(0)" class="uploadButton btn btn-success btn-sm dz-clickable"><i class="fa fa-cloud-upload"></i> Upload picture</a>
						</p>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary')); ?>
					</div>

				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

<script>
	Dropzone.options.SliderAdminEditForm = {
		url: "/gallery/pictures/upload", // Set the url
		thumbnailWidth: 628,
		thumbnailHeight: null,
		maxFiles:  1,
		autoQueue: true,
		clickable: ".dz-clickable",
		addRemoveLinks: true,
		previewsContainer: '.dropzone-previews',
		init: function() {
			this.on("addedfile",   function(file) { $('.dz-clickable').hide() });
			this.on("removedfile", function(file) { $('.dz-clickable').show() });
			this.on("success",     function(file, response) {
				var picture_id = response.picture.Picture.id;
				var url = response.picture.Picture.link;
				$('#SliderUrl').val(url);
				$('#SliderPictureId').val(picture_id);
			});
			
			var mockFile = { name: 'Mock', size: 12345 };
			this.emit("addedfile", mockFile);
			this.emit("thumbnail", mockFile, $('#SliderUrl').val());
			this.emit("complete", mockFile);
		}
	};
</script>
