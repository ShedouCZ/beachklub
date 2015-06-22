<div class="headlines view">
<h2><?php echo __('Headline'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($headline['Headline']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($headline['Headline']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($headline['User']['id'], array('controller' => 'users', 'action' => 'view', $headline['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($headline['Headline']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($headline['Headline']['desc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Headline'), array('action' => 'edit', $headline['Headline']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Headline'), array('action' => 'delete', $headline['Headline']['id']), array(), __('Are you sure you want to delete # %s?', $headline['Headline']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Headlines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Headline'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
