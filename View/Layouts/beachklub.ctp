<?php
	$version = Configure::read('css.version.string');
	$language = Configure::read('Config.language');
	$locale = Configure::read('Config.locale');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html lang="cs_CZ" dir="ltr"  class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="cs_CZ" dir="ltr"  class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="cs_CZ" dir="ltr"  class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="http://beachbar.vpslist.cz/sites/all/themes/theme806/favicon.ico" type="image/vnd.microsoft.icon">
    <meta name="Generator" content="Drupal 7 (http://drupal.org)">
    <link rel="alternate" type="application/rss+xml" title="beachklubladvi.cz RSS" href="http://beachbar.vpslist.cz/rss.xml">

    <!--[if lte IE 7]> <div style=' text-align:center; clear: both; padding:0 0 0 15px; position: relative;'> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->

    <title>beachklubladvi.cz</title>

    <!--[if LT IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

    <!--[if lte IE 8]>
	<style type="text/css">
    	.poll .bar, .poll .bar .foreground { behavior:url(/sites/all/themes/theme806/js/PIE.php); zoom:1}
	</style>
<![endif]-->

    <style type="text/css" media="all">
        @import url(//fonts.googleapis.com/css?family=BenchNine:700&subset=latin,latin-ext);
    </style>

	<link rel="stylesheet" href="<?php echo "/css/legacy.css?$version" ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo "/css/site.css?$version"   ?>" type="text/css" media="screen">

    <style type="text/css" media="screen">
        /*@import url("http://beachbar.vpslist.cz/sites/all/themes/theme806/css/boilerplate.css?nq22ob");*/
        /*@import url("http://beachbar.vpslist.cz/sites/all/themes/theme806/css/style.css?nq22ob");*/
        /*@import url("/css/theme806.css");*/
        /*@import url("http://beachbar.vpslist.cz/sites/all/libraries/superfish/css/superfish.css?nq22ob");*/
        @import url("http://beachbar.vpslist.cz/sites/all/themes/theme806/css/maintenance-page.css?nq22ob");
        @import url("http://beachbar.vpslist.cz/sites/all/themes/theme806/css/skeleton.css?nq22ob");
        /*@import url("http://beachbar.vpslist.cz/sites/all/themes/theme806/css/overrides.css?nq22ob");*/
    </style>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/modules/jquery_update/replace/jquery/1.7/jquery.min.js?v=1.7.1"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/misc/jquery.once.js?v=1.2"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/misc/drupal.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/default/files/languages/cs_fNhZh1s_mLWYTjHG9kUX-4GzpTxNenM6cod96_vpy5I.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/libraries/colorbox/jquery.colorbox-min.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/modules/colorbox/js/colorbox.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/libraries/flexslider/jquery.flexslider-min.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/modules/jcarousel/js/jquery.jcarousel.min.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/modules/jcarousel/js/jcarousel.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/libraries/superfish/jquery.hoverIntent.minified.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/libraries/superfish/sftouchscreen.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/libraries/superfish/superfish.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/libraries/easing/jquery.easing.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/libraries/superfish/supersubs.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/modules/superfish/superfish.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/themes/theme806/js/theme806.core.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/themes/theme806/js/jquery.loader.js?nq22ob"></script>
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/themes/theme806/js/jquery.debouncedresize.js?nq22ob"></script>
    <script type="text/javascript">

        <!--//--><![CDATA[//><!--
        jQuery.extend(Drupal.settings, {
            "basePath": "\/",
            "pathPrefix": "",
            "ajaxPageState": {
                "theme": "theme806",
                "theme_token": "2a3iRMNisXSF2HK26CSiH5vJ3NhvQxT0yVoL2ueMV7U",
                "js": {
                    "sites\/all\/modules\/flexslider\/assets\/js\/flexslider.load.js": 1,
                    "sites\/all\/modules\/addthis\/addthis.js": 1,
                    "sites\/all\/modules\/jquery_update\/replace\/jquery\/1.7\/jquery.min.js": 1,
                    "misc\/jquery.once.js": 1,
                    "misc\/drupal.js": 1,
                    "public:\/\/languages\/cs_fNhZh1s_mLWYTjHG9kUX-4GzpTxNenM6cod96_vpy5I.js": 1,
                    "sites\/all\/libraries\/colorbox\/jquery.colorbox-min.js": 1,
                    "sites\/all\/modules\/colorbox\/js\/colorbox.js": 1,
                    "sites\/all\/libraries\/flexslider\/jquery.flexslider-min.js": 1,
                    "sites\/all\/modules\/jcarousel\/js\/jquery.jcarousel.min.js": 1,
                    "sites\/all\/modules\/jcarousel\/js\/jcarousel.js": 1,
                    "sites\/all\/libraries\/superfish\/jquery.hoverIntent.minified.js": 1,
                    "sites\/all\/libraries\/superfish\/sftouchscreen.js": 1,
                    "sites\/all\/libraries\/superfish\/superfish.js": 1,
                    "sites\/all\/libraries\/easing\/jquery.easing.js": 1,
                    "sites\/all\/libraries\/superfish\/supersubs.js": 1,
                    "sites\/all\/modules\/superfish\/superfish.js": 1,
                    "sites\/all\/themes\/theme806\/js\/theme806.core.js": 1,
                    "sites\/all\/themes\/theme806\/js\/jquery.loader.js": 1,
                    "sites\/all\/themes\/theme806\/js\/jquery.debouncedresize.js": 1
                },
                "css": {
                    "modules\/system\/system.base.css": 1,
                    "modules\/system\/system.menus.css": 1,
                    "modules\/system\/system.messages.css": 1,
                    "modules\/system\/system.theme.css": 1,
                    "modules\/aggregator\/aggregator.css": 1,
                    "modules\/comment\/comment.css": 1,
                    "modules\/field\/theme\/field.css": 1,
                    "modules\/node\/node.css": 1,
                    "modules\/poll\/poll.css": 1,
                    "modules\/search\/search.css": 1,
                    "modules\/user\/user.css": 1,
                    "modules\/forum\/forum.css": 1,
                    "sites\/all\/modules\/views\/css\/views.css": 1,
                    "sites\/all\/modules\/ckeditor\/css\/ckeditor.css": 1,
                    "sites\/all\/libraries\/colorbox\/example1\/colorbox.css": 1,
                    "sites\/all\/modules\/ctools\/css\/ctools.css": 1,
                    "sites\/all\/modules\/panels\/css\/panels.css": 1,
                    "sites\/all\/modules\/flexslider\/assets\/css\/flexslider_img.css": 1,
                    "sites\/all\/libraries\/flexslider\/flexslider.css": 1,
                    "sites\/all\/modules\/jcarousel\/skins\/default\/jcarousel-default.css": 1,
                    "modules\/locale\/locale.css": 1,
                    "sites\/default\/files\/css\/follow.css": 1,
                    "sites\/all\/libraries\/superfish\/css\/superfish.css": 1,
                    "sites\/all\/themes\/theme806\/css\/boilerplate.css": 1,
                    "sites\/all\/themes\/theme806\/css\/style.css": 1,
                    "sites\/all\/themes\/theme806\/css\/maintenance-page.css": 1,
                    "sites\/all\/themes\/theme806\/css\/skeleton.css": 1,
                    //"sites\/all\/themes\/theme806\/css\/overrides.css": 1
                }
            },
            "colorbox": {
                "opacity": "0.85",
                "current": "{current} z {total}",
                "previous": "\u00ab P\u0159edchoz\u00ed",
                "next": "N\u00e1sleduj\u00edc\u00ed \u00bb",
                "close": "Zav\u0159\u00edt",
                "maxWidth": "98%",
                "maxHeight": "98%",
                "fixed": true,
                "mobiledetect": true,
                "mobiledevicewidth": "480px"
            },
            "jcarousel": {
                "ajaxPath": "\/jcarousel\/ajax\/views",
                "carousels": {
                    "jcarousel-dom-1": {
                        "view_options": {
                            "view_args": "",
                            "view_path": "node",
                            "view_base_path": null,
                            "view_display_id": "block",
                            "view_name": "front_carousel",
                            "jcarousel_dom_id": 1
                        },
                        "wrap": "circular",
                        "skin": "default",
                        //"visible": 2,
                        "scroll": 1,
                        "auto": 5,
                        "autoPause": 1,
                        "start": 1,
                        "vertical": 1,
                        "selector": ".jcarousel-dom-1"
                    }
                }
            },
            "flexslider": {
                "optionsets": {
                    "default": {
                        "namespace": "flex-",
                        "selector": ".slides \u003E li",
                        "easing": "easeInOutQuart",
                        "direction": "horizontal",
                        "reverse": false,
                        "smoothHeight": false,
                        "startAt": 0,
                        "animationSpeed": 600,
                        "initDelay": 0,
                        "useCSS": true,
                        "touch": true,
                        "video": false,
                        "keyboard": true,
                        "multipleKeyboard": false,
                        "mousewheel": 0,
                        "controlsContainer": ".flex-control-nav-container",
                        "sync": "",
                        "asNavFor": "",
                        "itemWidth": 0,
                        "itemMargin": 0,
                        "minItems": 0,
                        "maxItems": 0,
                        "move": 0,
                        "animation": "slide",
                        "slideshow": true,
                        "slideshowSpeed": "7000",
                        "directionNav": true,
                        "controlNav": false,
                        "prevText": "Previous",
                        "nextText": "Next",
                        "pausePlay": false,
                        "pauseText": "Pause",
                        "playText": "Play",
                        "randomize": false,
                        "animationLoop": true,
                        "pauseOnAction": true,
                        "pauseOnHover": false,
                        "manualControls": ""
                    }
                },
                "instances": {
                    "flexslider-1": "default"
                }
            },
            "superfish": {
                "1": {
                    "id": "1",
                    "sf": {
                        "animation": {
                            "opacity": "show",
                            "height": ["show", "easeOutCubic"]
                        },
                        "speed": "\u0027fast\u0027",
                        "autoArrows": false,
                        "dropShadows": false,
                        "disableHI": false
                    },
                    "plugins": {
                        "touchscreen": {
                            "mode": "useragent_custom",
                            "useragent": "iphone|android|ipad"
                        },
                        "supposition": false,
                        "bgiframe": false,
                        "supersubs": {
                            "minWidth": "12",
                            "maxWidth": "27",
                            "extraWidth": 1
                        }
                    }
                }
            }
        });
        //--><!]]>
    </script>
</head>

<body id="body" class="html front no-sidebars page-node i18n-cs with-navigation with-subnav">

    <div id="page-wrapper">
        <div id="page">

            <header id="header" role="banner" class="clearfix">
                <div class="container-24">
                    <div class="grid-24">
                        <?php echo $this->Element('header'); ?>
                        <?php echo $this->Session->flash(); ?>
                        <div class="section-3">
                            <?php echo $this->Element('navigation'); ?>
                        </div>
                        <div class="section-2 clearfix">
                            <?php echo $this->Element('slider'); ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /#header -->

            <div id="main-wrapper">
                <div class="container-24">
                    <div class="grid-24">
                        <div id="main" class="clearfix">
                            <?php echo $this->fetch('sidebar', $default=$this->element('sidebar')); ?>
                            <?php echo $this->fetch('content'); ?>
                        </div>
                        <!-- /#main -->

                        <?php if ($this->request->here == '/') { ?>
                            <div class="region region-content-bottom">
                                <div id="block-views-services-block" class="block block-views block-even">
                                    <div class="content">
                                        <div class="view view-services view-id-services view-display-id-block view-dom-id-07d750d1b768924463e867a1b7876e55">
                                            <div class="view-content">
                                                <?php echo $this->element('tiles'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.content -->
                                </div>
                                <!-- /.block -->
                            </div>
                        <?php } ?>
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
    <script type="text/javascript" src="http://beachbar.vpslist.cz/sites/all/modules/flexslider/assets/js/flexslider.load.js?nq22ob"></script>

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

</html>
