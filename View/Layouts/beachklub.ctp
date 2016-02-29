<?php
	$version  = Configure::read('css.version.string');
	$language = Configure::read('Config.language');
	$locale   = Configure::read('Config.locale');
	$async    = @$mobile ? 'async' : '';
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html lang="cs_CZ" dir="ltr"  class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="cs_CZ" dir="ltr"  class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="cs_CZ" dir="ltr"  class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
	<meta name="Generator" content="Drupal 7 (http://drupal.org)">
	<meta name=viewport content="width=device-width, initial-scale=0.37">
	<meta name="description" content="<?php echo $this->fetch('perex', 'Chodíte pravidelně na plážový volejbal a cítíte, že byste chtěli ještě víc? Rádi byste se zlepšili v technice nebo taktice?'); ?>">
	<link rel="alternate" type="application/rss+xml" title="beachklubladvi.cz RSS" href="/rss.xml">
	<title><?php echo $this->fetch('title', 'beachklubladvi.cz'); ?></title>

	<!--[if LT IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php if (@!$mobile) { ?>
		<style type="text/css" media="all">
			@import url(//fonts.googleapis.com/css?family=BenchNine:700&subset=latin,latin-ext);
		</style>
		<link rel="stylesheet" href="<?php echo "/css/legacy.css?$version" ?>" type="text/css" media="screen">
		<?php if (AuthComponent::user()) { ?>
			<link rel="stylesheet" href="<?php echo "/css/air-mode.css?$version" ?>" type="text/css" media="screen">
		<?php } ?>
		<link rel="stylesheet" href="<?php echo "/css/site.css?$version" ?>" type="text/css" media="screen">
	<?php } else { ?>
		<style>
			@media (max-device-width: 600px) {
			 #block-views-slider-block { display:none; }
			}
			<?php readfile(WWW_ROOT . 'css/site.css'); ?>
		</style>
	<?php } ?>


	<!--script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/modules/jquery_update/replace/jquery/1.7/jquery.min.js?v=1.7.1"></script-->
	<script <?php echo $async; ?> type="text/javascript" src="<?php echo "/js/site-pre.js?$version" ?>"></script>
	<script async type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27484677-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>	
</head>

<body id="body" class="html front no-sidebars page-node i18n-cs with-navigation with-subnav">

	<div id="page-wrapper">
		<div id="page">

			<header id="header" role="banner" class="clearfix">
				<div class="container-24">
					<div class="grid-24">
						<?php echo $this->Element('header'); ?>
						<div class="section-3">
							<?php echo $this->Element('navigation'); ?>
						</div>
						<?php echo $this->Session->flash(); ?>
						<?php if ($this->request->here == '/') { ?>
						<div class="section-2 clearfix">
							<?php echo $this->Element('slider'); ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</header>
			<!-- /#header -->

			<div id="main-wrapper">
				<div class="container-24">
					<div class="grid-24">
						<div id="main" class="clearfix">
							<?php echo $this->fetch('sidebar', $default=$this->element('sidebar')); ?>
							<section class="block cake-content">
								<?php echo $this->fetch('content'); ?>
							</section>
						</div>
						<!-- /#main -->
					</div>
				</div>
			</div>

			<footer id="footer" role="contentinfo">
				<?php echo $this->element('footer'); ?>
			</footer>

		</div>
		<!-- /#page -->
	</div>
	<!-- /#page-wrapper -->
	<script <?php echo $async; ?> type="text/javascript" src="<?php echo "/js/site-post.js?$version"; ?>"></script>
	<?php if (AuthComponent::user()) { ?>
		<script src="<?php echo "/js/air-mode.js?$version"; ?>" type="text/javascript"></script>
	<?php } ?>

	<div id="cboxOverlay" style="display: none;"></div>
	<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
		<div id="cboxWrapper">
			<div>
				<div id="cboxTopLeft" style="float: left;"></div>
				<div id="cboxTopCenter" style="float: left;"></div>
				<div id="cboxTopRight" style="float: left;"></div>
			</div>
			<div style="clear: left;">
				<div id="cboxMiddleLeft" style="float: left;"></div>
				<div id="cboxContent" style="float: left;">
					<div id="cboxTitle" style="float: left;"></div>
					<div id="cboxCurrent" style="float: left;"></div>
					<button type="button" id="cboxPrevious"></button>
					<button type="button" id="cboxNext"></button>
					<button id="cboxSlideshow"></button>
					<div id="cboxLoadingOverlay" style="float: left;"></div>
					<div id="cboxLoadingGraphic" style="float: left;"></div>
				</div>
				<div id="cboxMiddleRight" style="float: left;"></div>
			</div>
			<div style="clear: left;">
				<div id="cboxBottomLeft" style="float: left;"></div>
				<div id="cboxBottomCenter" style="float: left;"></div>
				<div id="cboxBottomRight" style="float: left;"></div>
			</div>
		</div>
		<div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
	</div>
</body>
<?php if (@$mobile) { ?>
	<link rel="stylesheet" href="<?php echo "/css/legacy.css?$version" ?>" type="text/css" media="screen">
	<style type="text/css" media="all">
		@import url(//fonts.googleapis.com/css?family=BenchNine:700&subset=latin,latin-ext);
	</style>
<?php } ?>

</html>
