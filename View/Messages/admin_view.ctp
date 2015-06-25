<div class="messages view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Message'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Message'), array('action' => 'edit', $message['Message']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Message'), array('action' => 'delete', $message['Message']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Messages'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Message'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
							<?php echo h($message['Message']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Title'); ?></th>
						<td>
							<?php echo h($message['Message']['title']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Email'); ?></th>
						<td>
							<?php echo h($message['Message']['email']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Subject'); ?></th>
						<td>
							<?php echo h($message['Message']['subject']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Desc'); ?></th>
						<td>
							<?php echo h($message['Message']['desc']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

