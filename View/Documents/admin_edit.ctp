<div class="documents form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete'), array('action'=>'delete', $this->Form->value('Document.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Document.id'))); ?></li>
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Documents'), array('action'=>'index'), array('escape'=>false)); ?></li>
				</ul>
				<h1><?php echo __('Admin Edit Document'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-12">
			<?php echo $this->Form->create('Document', array('role'=>'form', 'class'=>'form-horizontal', 'formStyle'=>'horizontal-wide')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class'=>'form-control', 'placeholder'=>__('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class'=>'form-control', 'placeholder'=>__('Title')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('data-provide'=>'wysiwyg', 'class'=>'form-control', 'placeholder'=>__('Content')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('published', array('class'=>'form-control', 'placeholder'=>__('Published')));?>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary')); ?>
					</div>
				</div>

			<?php echo $this->Form->end() ?>
		</div><!-- end col md 12 -->
		
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
		</div><!-- end col md 3 -->
	</div><!-- end row -->
</div>
