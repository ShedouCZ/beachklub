<div class="messageRecipients view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Message Recipient'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Message Recipient'), array('action' => 'edit', $messageRecipient['MessageRecipient']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Message Recipient'), array('action' => 'delete', $messageRecipient['MessageRecipient']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $messageRecipient['MessageRecipient']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Message Recipients'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Message Recipient'), array('action' => 'add'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Messages'), array('controller' => 'messages', 'action' => 'index'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Message'), array('controller' => 'messages', 'action' => 'add'), array('escape' => false)); ?> </li>
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
							<?php echo h($messageRecipient['MessageRecipient']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Email'); ?></th>
						<td>
							<?php echo h($messageRecipient['MessageRecipient']['email']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($messageRecipient['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Message Recipient Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($messageRecipient['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['title']; ?></td>
			<td><?php echo $message['email']; ?></td>
			<td><?php echo $message['subject']; ?></td>
			<td><?php echo $message['desc']; ?></td>
			<td><?php echo $message['message_recipient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'messages', 'action' => 'view', $message['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'messages', 'action' => 'edit', $message['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'messages', 'action' => 'delete', $message['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $message['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Message'), array('controller' => 'messages', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>	</div>
	</div><!-- end col md 12 -->
</div>
