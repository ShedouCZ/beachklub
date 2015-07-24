<div class="sliders form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
									<ul class="nav nav-pills pull-right">
							<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Sliders'), array('action'=>'index'), array('escape'=>false)); ?></li>
					</ul>
								<h1><?php echo __('Admin Add Slider'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
		</div>
		<div class="col-md-9">
			<?php echo $this->Form->create('Slider', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				
				<div class="form-group dropzone">
					<?php
						echo $this->Form->input('gallery_picture_id', array(
							'class'=>'form-control',
							'data-album-id'=>Slider::$album_id,
							'data-model-name'=>'Slider'
						));
					?>
				</div>
				
				<!--div class="form-group dropzone">
					<label for="SliderUrl" class="col-sm-2 control-label">Slide</label>
					<div class="col-sm-9">
						<?php
							echo $this->Form->input('url', array('type'=>'hidden'));
							echo $this->Form->input('gallery_picture_id', array('type'=>'hidden'));
						?>
						<p class="form-control-static dropzone-previews">
							<a href="#" class="btn btn-success btn-sm dz-clickable">
								<i class="fa fa-cloud-upload"></i>
								Upload picture
							</a>
						</p>
					</div>
				</div-->
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary')); ?>
					</div>

				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
