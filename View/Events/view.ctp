<div class="content">
	<h1 class="air-mode"><?php echo $event['Event']['title'] ?></h1>

	<div class="content air-mode">
		<?php echo $event['Event']['desc'];?>
	</div>

	<footer>
		<ul class="links inline">
			<?php if (@$neighbors['prev']) { ?>
				<li class="node-readmore first">
					<a href="/akce/<?php echo $neighbors['prev']['Event']['id']; ?>" rel="tag" title="">Předchozí</a>
				</li>
			<?php } ?>
			<?php if (@$neighbors['next']) { ?>
				<li class="node-readmore last">
					<a href="/akce/<?php echo $neighbors['next']['Event']['id']; ?>" rel="tag" title="">Další</a>
				</li>
			<?php } ?>
		</ul>
	</footer>
</div>