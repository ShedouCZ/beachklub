/*
 * grunt-jspot
 * https://github.com/JSteunou/grunt-jspot
 *
 * Copyright (c) 2014 Jérôme Steunou
 * Licensed under the MIT license.
 */

'use strict';



var jspot = require('jspot');
var path = require('path');



var VALID_EXT = ['js', 'hbs'];

var isValidExtension = function(filepath) {
    var ext = path.extname(filepath).slice(1);
    return VALID_EXT.indexOf(ext) !== -1;
};



module.exports = function(grunt) {

    grunt.registerMultiTask('jspot', 'Grunt task for the jspot library', function() {

        // Iterate over all specified file groups.
        this.files.forEach(function(f) {

            // Concat specified files.
            var src = f.src.filter(function(filepath) {
                // Warn on and remove invalid source files (if nonull was set).
                if (!grunt.file.exists(filepath)) {
                    grunt.log.warn('Source file "' + filepath + '" not found.');
                    return false;
                }
                // Warn about invalid extension. Maybe jspot will handle other files in the future.
                else if (!isValidExtension(filepath)) {
                    grunt.log.warn('Invalid file "' + filepath + '". Not handled by jspot extractor.');
                    return false;
                } else {
                    return true;
                }
            });

            // Merge task-specific and/or target-specific options with these defaults.
            // By file groups because dest is part of the options
            var options = this.options({
                keyword: 'gettext'
            });
            options.target = f.dest;
            options.source = src;

            // Extraction!
            jspot.extract(options);

            // Print a success message.
            grunt.log.writeln('File "' + f.dest + '" created.');

        }, this);

  });

};
