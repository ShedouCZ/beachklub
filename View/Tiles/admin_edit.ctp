<div class="tiles form">
<?php echo $this->Form->create('Tile'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tile'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('desc');
		echo $this->Form->input('title');
		echo $this->Form->input('ord');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tile.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tiles'), array('action' => 'index')); ?></li>
	</ul>
</div>
