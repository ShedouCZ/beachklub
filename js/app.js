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
