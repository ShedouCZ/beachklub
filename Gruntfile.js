module.exports = function(grunt) {
	grunt.initConfig({
		// copy bootstrap fonts
		copy: {
			all: {
				files: [
					{	expand: true,
						cwd: 'Vendor/bootstrap/fonts',
						src: '*',
						dest:'webroot/fonts/',
						filter:'isFile'
					},
					{	expand: true,
						cwd: 'Vendor/font-awesome/fonts',
						src: '*',
						dest:'webroot/fonts/',
						filter:'isFile'
					}
				]
			}
		},
		// react offline transform
		react: {
			all: {
				files: {
					'dist/jsx-combined.js': [ 'jsx/**.jsx' ]
				}
			}
		},
		postcss: {
			options: {
				map: false,
				processors: [
					require('autoprefixer-core')({browsers: ['last 2 versions']}).postcss
				]
			},
			dist: {
				src: 'webroot/css/*.css'
			}
		},
		// extract pot file from js, handlebars
		// into Locale/messages.pot
		jspot: {
			all: {
				options: {
					keyword: '__'
				},
				files: {
					'Locale': ['Plugin/Gallery/webroot/js/scripts.js', 'js/dom-ready.js']
				}
			}
		},
		// convert translated po files into json
		po2json: {
			all: {
				options: {
					format: 'jed',
					pretty: true
				},
				src: ['Locale/**/messages.po'],
				dest: 'dist/js/'
			}
		},
		// load i18n json data into [window.]App.messages
		json: {
			all: {
				options: {
					namespace: 'App',
					includePath: false,
					processName: function(filename) {
						return filename.toLowerCase();
					}
				},
				src: ['dist/js/*.json'],
				dest: 'dist/js/messages.js'
			}
		},
		// precompile handlebars templates into [window.]App.render
		handlebars: {
			all: {
				options: {
					namespace: 'App.render',
					processName: function(filePath) {
						return filePath
							.replace(/^Plugin\/BlueUpload\/View\/Elements\//, 'BlueUpload/')
							.replace(/^View\//, '/')
							.replace(/\.hbs$/, '');
					}
				},
				files: {
					'dist/js/handlebars.js': ['View/**/*.hbs']
				}
			}
		},
		// concatenate all js & css files
		concat: {
			js: {
				src: [
					//'Vendor/es5-shim/es5-shim.js',
					//'Vendor/es5-shim/es5-sham.js',
					'Vendor/jquery/dist/jquery.js',
					'Vendor/moment/moment.js',
					//'js/modernizr.preserve3d.js', // brings modernizr for defunctr
					'js/modernizr.custom.svg.js',   // // brings modernizr for defunctr
					'Vendor/defunctr/src/defunctr.js',
					'Vendor/moment-range/lib/moment-range.js',
					'js/app.js',
				],
				dest: 'webroot/js/site-pre.js',
				nonull: true,
				options: {
					separator: ';\n'
				}
			},
			js_post: {
				src: [
					//'Vendor/react/react.js',
					'Vendor/moment/locale/cs.js',
					'Vendor/moment-timezone/builds/moment-timezone-with-data-2010-2020.min.js',
					'Vendor/bootstrap/js/transition.js',
					'Vendor/bootstrap/js/collapse.js',
					'Vendor/bootstrap/dist/js/bootstrap.js',
					'Vendor/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js',
					//'dist/jsx-combined.js',
					'Vendor/jquery-serialize-object/jquery.serialize-object.js',
					'Vendor/H5F/h5f.min.js', // ie9 validation library
					'Vendor/bootstrap-validator/js/validator.js',
					'Vendor/bootbox.js/bootbox.js',
					'Vendor/hammerjs/hammer.js',
					'Vendor/jquery-hammerjs/jquery.hammer.js',
					'Vendor/Sortable/Sortable.js',
					'js/dom-ready.js'
				],
				dest: 'webroot/js/site-post.js',
				nonull: true,
				options: {
					separator: ';\n'
				}
			},
			js_air_mode: {
				src: [
					'Vendor/bootstrap/dist/js/bootstrap.js',
					'Vendor/summernote/dist/summernote.js',
					'Vendor/summernote/lang/summernote-cs-CZ.js',
					'js/dom-ready.js'
				],
				dest: 'webroot/js/air-mode.js',
				nonull: true,
				options: {
					separator: ';\n'
				}
			},
			js_admin: {
				src: [
					'Vendor/summernote/dist/summernote.js',
					'Vendor/summernote/lang/summernote-cs-CZ.js',
					'Vendor/html5-history-api/history.iegte8.js',
					'Vendor/fullcalendar-history/fullcalendar.history.js',
					'Vendor/jquery.cookie/jquery.cookie.js',
					'Vendor/fullcalendar/dist/fullcalendar.js',
					'Vendor/dropzone/dist/dropzone.js',
					'Vendor/slug/slug.js',
					'Vendor/Jed/jed.js',
					'node_modules/grunt-contrib-handlebars/node_modules/handlebars/dist/handlebars.runtime.js',
					'dist/js/handlebars.js',
					'dist/js/messages.js',
				],
				dest: 'webroot/js/site-admin.js',
				nonull: true,
				options: {
					separator: ';\n'
				}
			},
			css: {
				src: [
					'css/*.css'
				],
				dest: 'webroot/css/site.css',
				nonull: true,
				options: {
					separator: '\n'
				}
			},
			css_air_mode: {
				src: [
					// summenote for air mode and its dependecies on bootstrap
					'dist/air-mode.css',
					'Vendor/font-awesome/css/font-awesome.css',
					'Vendor/summernote/dist/summernote.css'
				],
				dest: 'webroot/css/air-mode.css',
				nonull: true,
				options: {
					separator: '\n'
				}
			},
			css_legacy: {
				src: [
					// datetimepicker and its dependecies on bootstrap
					'css/legacy/*.css',
					'css/legacy/modules/*.css'
				],
				dest: 'webroot/css/legacy.css',
				nonull: true,
				options: {
					separator: '\n'
				}
			},
			css_admin: {
				src: [
					'css/overrides/eonasdan-datetimepicker-bs.css',
					'dist/bs-custom.css',
					'Vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
					'dist/bootstrap.css',
					'css/bootstrap-validation.css',
					'Vendor/font-awesome/css/font-awesome.css',
					'Vendor/fullcalendar/dist/fullcalendar.css',
					'Vendor/summernote/dist/summernote.css',
					'css/admin/*.css',
					'css/superfish.css',
					'css/type.css',
					'css/search-bar.css',
					'css/theme806overrides.css'
				],
				dest: 'webroot/css/site-admin.css',
				nonull: true,
				options: {
					separator: '\n'
				}
			}
		},
		// compile less into css
		less: {
			air_mode: {
				options: {
					compress: true
				},
				files: {
					'dist/air-mode.css':'css/overrides/air-mode.less',
				}
			},
			development: {
				options: {
					compress: true
				},
				files: {
					'dist/bootstrap.css':'css/overrides/bootstrap.less',
				}
			}
		},
		// minifications
		uglify: {
			options: {
				mangle: false
			},
			site: {
				files: {
					'webroot/js/site-post.js': 'webroot/js/site-post.js',
					'webroot/js/site-pre.js': 'webroot/js/site-pre.js',
					'webroot/js/air-mode.js': 'webroot/js/air-mode.js'
				}
			}
		},
		cssmin: {
			site: {
				files: {
					'webroot/css/site.css': 'webroot/css/site.css',
					'webroot/css/legacy.css': 'webroot/css/legacy.css'
				}
			}
		},
		// tests
		phpunit: {
				// cakephp2 has not suitable bootstrap for phpunit.xml
				// (cakephp3 fixes this)
				// so we resort to running the cake wrapper instead
				cases: {
					dir: 'AllTests'
				},
				options: {
					bin: 'Vendor/bin/cake test app',
				}
		},
		watch: {
			stylesheets: {
				files: ['<%= concat.css.src %>', '<%= concat.css_admin.src %>', 'webroot/**/*.less'],
				tasks: ['stylesheets']
			},
			scripts: {
				files: ['Locale/**/messages.po', 'jsx/**.jsx', '<%= concat.js.src %>', '<%= concat.js_post.src %>', '<%= concat.js_admin.src %>', 'Plugin/BlueUpload/View/Elements/*.hbs', 'View/**/*.hbs'],
				tasks: ['scripts']
			},
			grunt: {
				files: ['Gruntfile.js'],
				tasks: ['default']
			}
		}
	});

	// Plugin loading
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-phpunit');
	grunt.loadNpmTasks('grunt-contrib-handlebars');
	grunt.loadNpmTasks('grunt-jspot');
	grunt.loadNpmTasks('grunt-po2json');
	grunt.loadNpmTasks('grunt-json');
	grunt.loadNpmTasks('grunt-react');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-copy');

	// Task definition
	grunt.registerTask('default', ['scripts', 'stylesheets', 'copy']);
	grunt.registerTask('stylesheets', ['less', 'concat:css', 'concat:css_admin', 'concat:css_legacy', 'concat:css_air_mode', /*'postcss',*/ 'cssmin']);
	grunt.registerTask('scripts', ['handlebars', /*'react',*/ 'concat:js', 'concat:js_post', 'concat:js_admin', 'concat:js_air_mode' /*, 'uglify'*/]);

	grunt.registerTask('locales', ['po2json', 'json']);
	//grunt.registerTask('stylesheets', ['less', 'concat:css', 'cssmin']);
	//grunt.registerTask('scripts', ['locales', 'handlebars', 'concat:js', 'uglify']);
	// uglify on direct invocation only as it is slow
	grunt.registerTask('scripts-min', ['locales', 'handlebars', 'concat:js', 'uglify']);
	//grunt.registerTask('scripts', ['locales', 'handlebars', 'concat:js']);
};
