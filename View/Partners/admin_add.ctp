<div class="partners form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Partners'), array('action'=>'index'), array('escape'=>false)); ?></li>
				</ul>
				<h1><?php echo __('Admin Add Partner'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Partner', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('desc', array('data-provide'=>'wysiwyg', 'data-wysiwyg-height'=>300, 'class'=>'form-control', 'placeholder'=>__('Desc')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('url', array('class'=>'form-control', 'placeholder'=>__('Url')));?>
				</div>
				<div class="form-group dropzone">
					<?php
						echo $this->Form->input('gallery_picture_id', array(
							'class'=>'form-control',
							'data-album-id'=>Partner::$album_id,
							'data-model-name'=>'Partner',
							'label' => 'Obrázek<p>210px na šířku</p>',
						));
					?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('partner_type_id', array('class'=>'form-control', 'placeholder'=>__('Partner Type Id')));?>
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
