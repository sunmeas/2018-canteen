<!--Note that FullCalendar needs MomentJS to work //-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/fullcalendar-3.8.2/fullcalendar.min.css">
<script src="<?php echo base_url();?>assets/js/moment-with-locales-2.19.3.min.js"></script>
<script src="<?php echo base_url();?>assets/fullcalendar-3.8.2/fullcalendar.min.js"></script>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">

<h1>FullCalendar widget</h1>
<p>FullCalendar is a widget allowing to display calendar and agenda views. Please visit their website for more information:
  <a target="_blank" href="https://fullcalendar.io/">https://fullcalendar.io/</a></p>

<div id='calendar'></div>

<!-- Live example of usage //-->
<script type="text/javascript">
$(document).ready(function() {

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,basicWeek,basicDay'
    },
    /*themeSystem: 'bootstrap3',*/
    defaultDate: '2017-11-12',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2017-11-01'
      },
      {
        title: 'Long Event',
        start: '2017-11-07',
        end: '2017-11-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2017-11-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2017-11-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2017-11-11',
        end: '2017-11-13'
      },
      {
        title: 'Meeting',
        start: '2017-11-12T10:30:00',
        end: '2017-11-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2017-11-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2017-11-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2017-11-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2017-11-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2017-11-13T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2017-11-28'
      }
    ]
  });

});
</script>
</div>
</div>