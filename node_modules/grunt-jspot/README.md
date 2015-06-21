# grunt-jspot

> Grunt task for the jspot library

## Getting Started
This plugin requires Grunt `~0.4.5`

If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [Gruntfile](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may install this plugin with this command:

```shell
npm install grunt-jspot --save-dev
```

Once the plugin has been installed, it may be enabled inside your Gruntfile with this line of JavaScript:

```js
grunt.loadNpmTasks('grunt-jspot');
```

## The "jspot" task

### Overview
*Run this task with the `grunt jspot` command*

**jspot** extracts gettext strings from Javascript & Handlebars files into pot files. It does it with class, parsing JS & HBS AST instead of using regex. This way it does not miss `.call` or `.apply` or multiline.

[jspot](https://github.com/praekelt/jspot) is a very complete, simple and handy tool to handle [i18n through gettext](http://en.wikipedia.org/wiki/Gettext) in JavaScript, along with [POEdit](http://poedit.net/) to handle all your pomo, [po2json](https://github.com/rockykitamura/grunt-po2json) to convert your pomo into json and [Jed](http://slexaxton.github.io/Jed/) to load those json in your applications, this little gang will let you handle i18n like a chef in your JavaScript applications.

This Grunt task is a very simple passthrough task to use jspot withing your Gruntfile.

In your project's Gruntfile, add a section named `jspot` to the data object passed into `grunt.initConfig()`.

```js
grunt.initConfig({
    jspot: {
        options: {
            // Task-specific options go here.
        },
        your_target: {
            // Target-specific file lists and/or options go here.
        },
    },
});
```

#### source
Task source files are forward to jspot as the jspot *source* option. jspot default is `''`.

#### destination
Task destination must be a folder. It is forward to jspot as the jspot *target* option -which has nothing to do with your own task's target, do not be confuse between grunt target and jspot target. jspot default is `'.'`.


### Options

#### options.keyword
Type: `String`
Default value: `'gettext'`

Keyword to search for in source files. This allow you to use any alias for gettext.

### Usage Example

Extract all gettext keys from JavaScript source code & Handlebars template files. Write the *pot* file in the *po* folder. Tell jspot our alias for *gettext* is *_*.

```js
grunt.initConfig({
    jspot: {
        options: {
            keyword: '_'
        },
        files: {
            'po': ['src/**/*.js', 'src/**/*.hbs'],
        },
    },
});
```

## New features
This grunt task is just a passthrough for the jspot library. If you need some cool feature, maybe you should ask to [jspot authors](https://github.com/praekelt/jspot/issues).

## Contributing
In lieu of a formal styleguide, take care to maintain the existing coding style. Add unit tests for any new or changed functionality. Lint and test your code using [Grunt](http://gruntjs.com/).

## Release History

* 0.1.0 (2014-08-09): Initial release
