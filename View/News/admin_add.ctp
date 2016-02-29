<div class="documents form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List News'), array('action'=>'index'), array('escape'=>false)); ?></li>
				</ul>
				<h1><?php echo __('Admin Add News'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Document', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('title', array('data-provide'=>'slug-src', 'class'=>'form-control', 'placeholder'=>__('Title')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('slug', array('data-provide'=>'slug-dst', 'class'=>'form-control', 'placeholder'=>'Url', 'label'=>'Url'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('data-provide'=>'wysiwyg', 'class'=>'form-control', 'placeholder'=>__('Content')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('perex', array('data-provide'=>'wysiwyg', 'data-wysiwyg-height'=>170, 'class'=>'form-control', 'placeholder'=>__('Perex')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('user_id', array('default'=>2 ,'class'=>'form-control', 'placeholder'=>__('User Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('published', array('class'=>'form-control', 'placeholder'=>__('Published'), 'checked'=>true));?>
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
