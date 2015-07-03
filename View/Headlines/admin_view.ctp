<div class="headlines view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Headline'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Headline'), array('action' => 'edit', $headline['Headline']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Headline'), array('action' => 'delete', $headline['Headline']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $headline['Headline']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Headlines'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Headline'), array('action' => 'add'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<td>
							<?php echo h($headline['Headline']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Title'); ?></th>
						<td>
							<?php echo h($headline['Headline']['title']); ?>
						</td>
					</tr>
					<tr>
								<th><?php echo __('User'); ?></th>
								<td>
			<?php echo $this->Html->link($headline['User']['username'], array('controller' => 'users', 'action' => 'view', $headline['User']['id'])); ?>
			&nbsp;
		</td>
					</tr>
					<tr>
						<th><?php echo __('Created'); ?></th>
						<td>
							<?php echo h($headline['Headline']['created']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Desc'); ?></th>
						<td>
							<?php echo h($headline['Headline']['desc']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>
