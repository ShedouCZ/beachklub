<?php
	$version = Configure::read('css.version.string');
	$language = Configure::read('Config.language');
	$locale = Configure::read('Config.locale');
?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>" class="no-js defunctr-ie-only defunctr-version-off">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<title><?php echo $this->fetch('title'); ?></title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
	<?php
		echo $this->Html->meta('keywords',  Configure::read("Cfg.meta.keywords_$language"));
		echo $this->Html->meta('description',  Configure::read("Cfg.meta.description_$language"));
		echo $this->Html->meta(array('name' => 'author', 'content' => Configure::read("Cfg.meta.author_$language")));
	?>
	<script>
		var App = {};
		App.base = '<?php echo Configure::read('App.base'); ?>';
		App.session_language = '<?php echo Configure::read('Config.language'); ?>';
		App.session_locale = '<?php echo Configure::read('Config.locale'); ?>';
	</script>

	<?php //echo $this->Html->css("print.css?$version", 'stylesheet', array('media' => 'print')); ?>
	<script src="<?php echo "/js/site-pre.js?$version"; ?>" type="text/javascript"></script>

	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->fetch('js');
	?>

	<?php if (Configure::read('Routing.admin')) { ?>
		<link rel="stylesheet" href="<?php echo "/css/site-admin.css?$version" ?>" type="text/css" media="screen">
		<script src="<?php echo "/js/site-admin.js?$version"; ?>" type="text/javascript"></script>
	<?php } ?>

	<style type="text/css" media="all">
		@import url(//fonts.googleapis.com/css?family=BenchNine:700&subset=latin,latin-ext);
	</style>

	<!--[if lt IE 9]>
 		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
	<link rel="shortcut icon" href="/favicon.ico?6">
	<link href="/favicon.ico?6" type="image/x-icon" rel="shortcut icon">
</head>

<?php
	echo $this->Html->tag('body', null, array(
		'data-controller'	=> $this->request->params['controller'],
		'data-action'		=> $this->request->params['action'],
		'data-page'			=> @$this->request->params['pass'][0],
		'data-plugin-base-url' => $this->Html->url(array('plugin'=>'gallery', 'controller'=>'gallery', 'action'=>'index', 'admin'=>false)),
		'data-admin'        => Configure::read('Routing.admin')
	));
?>

<header id="header" role="banner" class="clearfix">
	<div class="container-24">
		<div class="grid-24">
			<div class="section-3" style="margin-top:45px">
				<?php echo $this->Element('navigation'); ?>
			</div>
		</div>
	</div>
</header>

			<?php //echo $this->Element('header'); ?>
			<?php echo $this->Session->flash(); ?>
			<?php if ($this->request->here == '/') echo $this->Element('carousel'); ?>

			<div class="content container">
				<?php echo $this->fetch('content'); ?>
			</div>

			<?php if (!Configure::read('Routing.admin')) echo $this->element('footer'); ?>

	<script src="<?php echo "/js/admin-post.js?$version"; ?>" type="text/javascript"></script>
</body>
</html>
