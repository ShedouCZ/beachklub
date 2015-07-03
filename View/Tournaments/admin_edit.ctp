<div class="tournaments form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
									<ul class="nav nav-pills pull-right">
							<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete'), array('action'=>'delete', $this->Form->value('Tournament.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Tournament.id'))); ?></li>
							<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Tournaments'), array('action'=>'index'), array('escape'=>false)); ?></li>
					</ul>
								<h1><?php echo __('Admin Edit Tournament'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Tournament', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class'=>'form-control', 'placeholder'=>__('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('datetime', array(
						'type' => 'text',
						'data-provide' => 'datepicker',
						'data-date-language' => Configure::read('Config.locale'),
						'class' => 'form-control',
						'label' => __('Datetime'),
						'placeholder' => __('Datetime'),
						'inputGroup' => array('append'=>'glyphicon-th'),
						//BEWARE: datepicker needs JS initialization
					));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('desc', array('data-provide'=>'wysiwyg', 'class'=>'form-control', 'placeholder'=>__('Desc')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('perex', array('data-provide'=>'wysiwyg', 'class'=>'form-control', 'placeholder'=>__('Perex')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('url', array('class'=>'form-control', 'placeholder'=>__('Url')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('user_id', array('class'=>'form-control', 'placeholder'=>__('User Id')));?>
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
