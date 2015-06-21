'use strict';

var grunt = require('grunt');

/*
  ======== A Handy Little Nodeunit Reference ========
  https://github.com/caolan/nodeunit

  Test methods:
    test.expect(numAssertions)
    test.done()
  Test assertions:
    test.ok(value, [message])
    test.equal(actual, expected, [message])
    test.notEqual(actual, expected, [message])
    test.deepEqual(actual, expected, [message])
    test.notDeepEqual(actual, expected, [message])
    test.strictEqual(actual, expected, [message])
    test.notStrictEqual(actual, expected, [message])
    test.throws(block, [error], [message])
    test.doesNotThrow(block, [error], [message])
    test.ifError(value)
*/

exports.jspot = {
  setUp: function(done) {
    // setup here if necessary
    done();
  },
  default_options: function(test) {
    test.expect(1);
    // remove date from content as it may vary
    var actual = grunt.file.read('tmp/default_options/messages.pot').replace(/"POT-Creation-Date: .*[^"Project]/, '');
    var expected = grunt.file.read('test/expected/default_options').replace(/"POT-Creation-Date: .*[^"Project]/, '');
    test.equal(actual, expected, 'should describe what the default behavior is.');

    test.done();
  },
  custom_options: function(test) {
    test.expect(1);
    // remove date from content as it may vary
    var actual = grunt.file.read('tmp/custom_options/messages.pot').replace(/"POT-Creation-Date: .*[^"Project]/, '');
    var expected = grunt.file.read('test/expected/custom_options').replace(/"POT-Creation-Date: .*[^"Project]/, '');
    test.equal(actual, expected, 'should describe what the custom option(s) behavior is.');

    test.done();
  },
};
