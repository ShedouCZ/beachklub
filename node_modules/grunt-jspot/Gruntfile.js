/*
 * grunt-jspot
 * https://github.com/JSteunou/grunt-jspot
 *
 * Copyright (c) 2014 Jérôme Steunou
 * Licensed under the MIT license.
 */

'use strict';

module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        jshint: {
            all: [
                'Gruntfile.js',
                'tasks/*.js',
                '<%= nodeunit.tests %>'
            ],
            options: {
                jshintrc: '.jshintrc'
            }
        },

        // Before generating any new files, remove any previously-created files.
        clean: {
            tests: ['tmp']
        },

        // Create test tmp dir before launching test
        mkdir: {
            tests: {
                options: {
                    create: ['tmp/custom_options', 'tmp/default_options']
                }
            }
        },

        // Configuration to be run (and then tested).
        jspot: {
            default_options: {
                files: {
                    'tmp/default_options': ['test/fixtures/*']
                }
            },
            custom_options: {
                options: {
                        keyword: '_'
                },
                files: {
                    'tmp/custom_options': ['test/fixtures/*']
                }
            }
        },

        // Unit tests.
        nodeunit: {
            tests: ['test/*_test.js']
        }

    });

    // Actually load this plugin's task(s).
    grunt.loadTasks('tasks');

    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-nodeunit');
    grunt.loadNpmTasks('grunt-mkdir');

    // Whenever the "test" task is run, first clean the "tmp" dir, then run this
    // plugin's task(s), then test the result.
    grunt.registerTask('test', ['clean', 'mkdir', 'jspot', 'nodeunit']);

    // By default, lint and run all tests.
    grunt.registerTask('default', ['jshint', 'test']);

};
