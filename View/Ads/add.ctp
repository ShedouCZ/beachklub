<h1>Burza hráčů - nový inzerát</h1>

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
<?php echo $this->Form->create('Ad', array('role'=>'form', 'class'=>'form-horizontal')); ?>
	<?php echo $this->Form->hidden('sum', array('value'=>1)); ?>
	<script> document.getElementById('AdSum').value = 2; </script>
	<div class="ad-form-group">
		<label for="edit-name" title="Toto pole je vyžadováno.">Váš email <span class="form-required">*</span></label>
		<?php echo $this->Form->input('email', array('label'=>false, 'wrap' => false));?>
	</div>
	<div class="ad-form-group">
		<label for="edit-name" title="Toto pole je vyžadováno.">Text inzerátu <span class="form-required">*</span></label>
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
