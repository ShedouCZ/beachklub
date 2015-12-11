<div class="ads view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Ad'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Ad'), array('action' => 'edit', $ad['Ad']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Ad'), array('action' => 'delete', $ad['Ad']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Ads'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Ad'), array('action' => 'add'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Ad Replies'), array('controller' => 'ad_replies', 'action' => 'index'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Ad Reply'), array('controller' => 'ad_replies', 'action' => 'add'), array('escape' => false)); ?> </li>
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
							<?php echo h($ad['Ad']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Description'); ?></th>
						<td>
							<?php echo h($ad['Ad']['description']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Contact'); ?></th>
						<td>
							<?php echo h($ad['Ad']['contact']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Email'); ?></th>
						<td>
							<?php echo h($ad['Ad']['email']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Public'); ?></th>
						<td>
							<?php echo h($ad['Ad']['public']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Created'); ?></th>
						<td>
							<?php echo h($ad['Ad']['created']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Token'); ?></th>
						<td>
							<?php echo h($ad['Ad']['token']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Ad Replies'); ?></h3>
	<?php if (!empty($ad['AdReply'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ad Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Public'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Token'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($ad['AdReply'] as $adReply): ?>
		<tr>
			<td><?php echo $adReply['id']; ?></td>
			<td><?php echo $adReply['ad_id']; ?></td>
			<td><?php echo $adReply['description']; ?></td>
			<td><?php echo $adReply['contact']; ?></td>
			<td><?php echo $adReply['email']; ?></td>
			<td><?php echo $adReply['public']; ?></td>
			<td><?php echo $adReply['created']; ?></td>
			<td><?php echo $adReply['token']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'ad_replies', 'action' => 'view', $adReply['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'ad_replies', 'action' => 'edit', $adReply['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'ad_replies', 'action' => 'delete', $adReply['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $adReply['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Ad Reply'), array('controller' => 'ad_replies', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>	</div>
	</div><!-- end col md 12 -->
</div>
