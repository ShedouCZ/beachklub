var _ = require('./gettext'),
    gettext = _;



var foo = function(much) {
    var a = _.ngettext('%d cat', '%d cats', much);
    return _('jspot is great!');
};

module.export = function(much) {
    foo();
    var a = gettext.ngettext('%d greeting', '%d greetings', much);
    return gettext('Hello World!');
};
