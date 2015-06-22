<div class="tiles form">
<?php echo $this->Form->create('Tile'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Tile'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Tiles'), array('action' => 'index')); ?></li>
	</ul>
</div>
