<?php
    $this->assign('sidebar', '');
?>

<div id="flexbook_1">
    Seznam udalosti
    <div id="f_1"></div>
</div>

<div id="flexbook_2">
    Seznam udalosti s tagem "test"
    <div id="f_2"></div>
</div>

<div id="flexbook_3">
Seznam zdroju
    <div id="f_3"></div>
</div>

<div id="flexbook_4">
    Profil
    <div id="f_4"></div>
</div>

<!--
    jquery v1.10.2
    <script src="http://www.flexbook.cz/jq/jquery.js"></script>
    jquery ui v1.10.4 - 2014-01-19
-->
<script type="text/javascript" src="http://www.flexbook.cz/jq/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.flexbook.cz/jq/jquery-ui.css" />
<script type="text/javascript" src="http://www.flexbook.cz/jq/jquery.datetimepicker.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.flexbook.cz/jq/jquery.datetimepicker.css" />
<script src="http://www.flexbook.cz/jq/moment.min.js"></script>
<script type="text/javascript" src="http://www.flexbook.cz/jq/fullcalendar-2.6.0.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.flexbook.cz/jq/fullcalendar-2.6.0.css" />
<script type="text/javascript" src="http://www.flexbook.cz/jq/lang-all.js"></script>
<script type="text/javascript" src="http://www.flexbook.cz/jq/scheduler-1.2.0.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.flexbook.cz/jq/scheduler-1.2.0.css" />
<script src="http://www.flexbook.cz/flb.js"></script>

<script>
flbInit('http://www.flexbook.cz/ajax.php', 17);
flbEventList('f_1');
flbEventList('f_2', {tag: ['kemp']});
flbResourceCalendar('f_3', {
    XresourceId: [162,163,164],
    resourceLabel: 'Kurty',
    ratio: 1.3,
    timeSlot: '20',
    timeMin: '13:00',
    timeMax: '23:00',
    showToday: false,
    render: ['reservation','occupied','event'],
    XdisableResourceReservation: true,
    dateStart: '2016-03-21',
    dateMin: '2016-02-21',
    XdateMax: '2016-02-23'
});
flbProfile('f_4');
</script>
