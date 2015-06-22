<div class="tiles view">
<h2><?php echo __('Tile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tile['Tile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($tile['Tile']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($tile['Tile']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tile['Tile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ord'); ?></dt>
		<dd>
			<?php echo h($tile['Tile']['ord']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($tile['Tile']['url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tile'), array('action' => 'edit', $tile['Tile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tile'), array('action' => 'delete', $tile['Tile']['id']), array(), __('Are you sure you want to delete # %s?', $tile['Tile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tile'), array('action' => 'add')); ?> </li>
	</ul>
</div>
