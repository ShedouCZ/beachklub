<div class="messages form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
									<ul class="nav nav-pills pull-right">
							<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete'), array('action'=>'delete', $this->Form->value('Message.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Message.id'))); ?></li>
							<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Messages'), array('action'=>'index'), array('escape'=>false)); ?></li>
					</ul>
								<h1><?php echo __('Admin Edit Message'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Message', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class'=>'form-control', 'placeholder'=>__('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class'=>'form-control', 'placeholder'=>__('Email')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('subject', array('class'=>'form-control', 'placeholder'=>__('Subject')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('desc', array('data-provide'=>'wysiwyg', 'class'=>'form-control', 'placeholder'=>__('Desc')));?>
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
