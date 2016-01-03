<?php
	$this->assign('sidebar', '<aside class="column column_right prefix-1 grid-8 omega" role="complementary">
	<section class="sidebar-menu">
	<ul style="margin-top:11px">
	<li><a href="/burza">ZPĚT NA SEZNAM</a></li>
	</ul>
	</section>
	</aside>');
?>
<div id="content" class="content">

	<h1>Burza hráčů</h1>

	<div class="button">
		<a href="/burza/novy-inzerat">chci přidat inzerát</a>
	</div>

	<?php foreach ($ads as $ad) { ?>
		<div class="ad">
			<?php echo $this->Time->format($ad['Ad']['created'], '%-d.%-m.&nbsp;%Y'); ?>
			<?php $view_url = array('action' => 'view', 'id' => $ad['Ad']['id']); ?>
			<?php echo $this->Html->link('', $view_url, array('class' => 'view')); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $ad['Ad']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?>
			<div class="desc">
				<?php echo h($ad['Ad']['description']); ?>
			</div>
			<div class="button">
				<?php echo $this->Html->link('odepsat', $view_url); ?>
			</div>
		</div>
	<?php } ?>

	<?php if (count($ads) > 5) { ?>
		<div class="button">
			<a href="/burza/novy-inzerat">chci přidat inzerát</a>
		</div>
	<?php } ?>

	<?php if ($paging['Ad']['prevPage'] || $paging['Ad']['nextPage']) echo $this->Element('pager', array('url' => '/burza', 'paging' => $paging['Ad'])) ?>

</div>
