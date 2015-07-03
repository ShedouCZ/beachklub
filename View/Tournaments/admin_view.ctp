<div class="tournaments view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Tournament'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Tournament'), array('action' => 'edit', $tournament['Tournament']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Tournament'), array('action' => 'delete', $tournament['Tournament']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tournament['Tournament']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Tournaments'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Tournament'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
							<?php echo h($tournament['Tournament']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Name'); ?></th>
						<td>
							<?php echo h($tournament['Tournament']['name']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Datetime'); ?></th>
						<td>
							<?php echo h($tournament['Tournament']['datetime']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Desc'); ?></th>
						<td>
							<?php echo h($tournament['Tournament']['desc']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Perex'); ?></th>
						<td>
							<?php echo h($tournament['Tournament']['perex']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Url'); ?></th>
						<td>
							<?php echo h($tournament['Tournament']['url']); ?>
						</td>
					</tr>
					<tr>
								<th><?php echo __('User'); ?></th>
								<td>
			<?php echo $this->Html->link($tournament['User']['id'], array('controller' => 'users', 'action' => 'view', $tournament['User']['id'])); ?>
			&nbsp;
		</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

