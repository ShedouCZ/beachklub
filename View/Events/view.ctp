<div class="content">
	<?php
		if (AuthComponent::user()) {
			$link = $this->Html->link('upravit', '/admin/events/edit/' . $event['Event']['id']);
			echo $this->Html->div('button admin_edit left', $link, array('style'=>'margin-top:18px'));
		}
	?>

	<h1 class="air-mode"><?php echo $event['Event']['title'] ?></h1>

	<div class="content air-mode">
		<?php echo $event['Event']['desc'];?>
	</div>
</div>

<?php if (0) { ?>
<footer>
	<ul class="links inline">
		<?php if (@$neighbors['prev']) { ?>
			<li class="node-readmore first">
				<!--a href="/akce/<?php echo $neighbors['prev']['Event']['slug']; ?>" rel="tag" title="">Předchozí</a-->
				<?php echo $this->Html->link('předchozí: ' . $neighbors['prev']['Event']['title'], '/'.$neighbors['prev']['Event']['slug']); ?>
			</li>
		<?php } ?>
		<?php if (@$neighbors['next']) { ?>
			<li class="node-readmore last">
				<!--a href="/akce/<?php echo $neighbors['next']['Event']['slug']; ?>" rel="tag" title="">Další</a-->
				<?php echo $this->Html->link('další: ' . $neighbors['next']['Event']['title'], '/'.$neighbors['next']['Event']['slug']); ?>
			</li>
		<?php } ?>
	</ul>
</footer>
<?php } ?>
