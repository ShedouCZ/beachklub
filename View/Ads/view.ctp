<?php
	$this->assign('title', 'Burza hráčů');
?>
<h1>Burza hráčů - inzerát</h1>

<?php
	$this->assign('sidebar', '<aside class="column column_right prefix-1 grid-8 omega" role="complementary">
	<section class="sidebar-menu">
	<ul style="margin-top:11px">
	<li><a href="/burza">ZPĚT NA SEZNAM</a></li>
	</ul>
	</section>
	</aside>');
?>

<div class="" style="width:500px">
	<div class="ad view">
		<?php echo $this->Time->format($ad['Ad']['created'], '%-d.%-m.&nbsp;%Y'); ?>
		<?php $view_url = array('action' => 'view', 'id' => $ad['Ad']['id']); ?>
		<div class="desc">
			<?php echo h($ad['Ad']['description']); ?>
		</div>
	</div>

	<?php foreach ($ad['AdReply'] as $reply) { ?>
		<div class="ad view reply">
			<?php echo $this->Time->format($reply['created'], '%-d.%-m.&nbsp;%Y'); ?>
			<div class="desc">
				<?php echo h($reply['description']); ?>
			</div>
		</div>
	<?php } ?>

<?php echo $this->Form->create('AdReply', array('role'=>'form', 'class'=>'form-horizontal view')); ?>
	<div class="ad-form-group">
		<label for="edit-name" title="Toto pole je vyžadováno.">Váš email <span class="form-required">*</span></label>
		<?php echo $this->Form->input('email', array('label'=>false, 'wrap' => false));?>
	</div>
	<div class="ad-form-group">
		<label for="edit-name" title="Toto pole je vyžadováno.">Text odpovědi <span class="form-required">*</span></label>
		<?php echo $this->Form->input('description', array('data-provide'=>'wysiwyg', 'label'=>false, 'wrap' => false));?>
	</div>
	<!--div class="">
		<label for="edit-name">Kontakt pro zájemce</label>
		<?php echo $this->Form->input('contact', array('label'=>false, 'wrap' => false));?>
	</div-->
	<div class="ad-form-group">
		<div class="">
			<?php $backlink = '<span class="backlink">nebo <a href="/burza">zpět</a></span>'; ?>
			<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary form-submit', 'after'=>$backlink)); ?>
		</div>

	</div>

<?php echo $this->Form->end() ?>
</div>
