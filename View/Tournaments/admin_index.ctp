<div class="tournaments index">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
					<ul class="nav nav-pills pull-right">
						<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;' . __('New Tournament'), array('action' => 'add'), array('escape' => false)); ?></li>
					</ul>
								<h1><?php echo __('Tournaments'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('datetime'); ?></th>
						<th><?php echo $this->Paginator->sort('desc'); ?></th>
						<th><?php echo $this->Paginator->sort('perex'); ?></th>
						<th><?php echo $this->Paginator->sort('url'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($tournaments as $tournament) { ?>
					<tr>
						<td><?php echo h($tournament['Tournament']['name']); ?></td>
						<td><?php echo $this->Time->format($tournament['Tournament']['datetime'], '%-d.%-m.&nbsp;%Y'); ?></td>
						<td><?php echo h($tournament['Tournament']['desc']); ?></td>
						<td><?php echo h($tournament['Tournament']['perex']); ?></td>
						<td><?php echo h($tournament['Tournament']['url']); ?></td>
								<td>
			<?php echo $this->Html->link($tournament['User']['id'], array('controller' => 'users', 'action' => 'view', $tournament['User']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $tournament['Tournament']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $tournament['Tournament']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tournament['Tournament']['id'])); ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div>
