// aside .sidebar-menu position:sticky needs the parent node height to be equal of the whole content height
$('aside .sidebar-menu').parent().css('height',  $('aside .sidebar-menu').parent().parent().innerHeight());

// position:sticky polyfill for chrome + ie
$('.sidebar-menu').Stickyfill();
