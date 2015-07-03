<div class="coaches view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Coach'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Coach'), array('action' => 'edit', $coach['Coach']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Coach'), array('action' => 'delete', $coach['Coach']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $coach['Coach']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Coaches'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Coach'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
							<?php echo h($coach['Coach']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Name'); ?></th>
						<td>
							<?php echo h($coach['Coach']['name']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Title'); ?></th>
						<td>
							<?php echo h($coach['Coach']['title']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Desc'); ?></th>
						<td>
							<?php echo h($coach['Coach']['desc']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Url'); ?></th>
						<td>
							<?php echo h($coach['Coach']['url']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Ord'); ?></th>
						<td>
							<?php echo h($coach['Coach']['ord']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

