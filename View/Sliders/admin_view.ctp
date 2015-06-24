<div class="sliders view">
<h2><?php echo __('Slider'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($slider['Slider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($slider['Slider']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ord'); ?></dt>
		<dd>
			<?php echo h($slider['Slider']['ord']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($slider['Slider']['url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Slider'), array('action' => 'edit', $slider['Slider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Slider'), array('action' => 'delete', $slider['Slider']['id']), array(), __('Are you sure you want to delete # %s?', $slider['Slider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sliders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slider'), array('action' => 'add')); ?> </li>
	</ul>
</div>
