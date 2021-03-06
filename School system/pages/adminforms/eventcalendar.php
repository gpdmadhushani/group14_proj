<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>

<!DOCTYPE html>
<html>

<body class="skin-blue">
<div class="wrapper">
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Calendar
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Calendar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <!-- THE CALENDAR -->
                        <div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="disabled">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>September 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-08-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2018-08-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2018-08-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2018-08-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2018-08-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2018-08-31"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-09-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2018-08-26">26</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2018-08-27">27</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2018-08-28">28</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2018-08-29">29</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2018-08-30">30</td><td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2018-08-31">31</td><td class="fc-day-number fc-sat fc-past" data-date="2018-09-01">1</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#f56954;border-color:#f56954"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-09-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-09-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-09-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-09-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-09-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-09-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-09-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2018-09-02">2</td><td class="fc-day-number fc-mon fc-past" data-date="2018-09-03">3</td><td class="fc-day-number fc-tue fc-past" data-date="2018-09-04">4</td><td class="fc-day-number fc-wed fc-past" data-date="2018-09-05">5</td><td class="fc-day-number fc-thu fc-past" data-date="2018-09-06">6</td><td class="fc-day-number fc-fri fc-past" data-date="2018-09-07">7</td><td class="fc-day-number fc-sat fc-past" data-date="2018-09-08">8</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-09-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-09-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-09-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-09-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-09-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-09-14"></td><td class="fc-day fc-widget-content fc-sat fc-today fc-state-highlight" data-date="2018-09-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2018-09-09">9</td><td class="fc-day-number fc-mon fc-past" data-date="2018-09-10">10</td><td class="fc-day-number fc-tue fc-past" data-date="2018-09-11">11</td><td class="fc-day-number fc-wed fc-past" data-date="2018-09-12">12</td><td class="fc-day-number fc-thu fc-past" data-date="2018-09-13">13</td><td class="fc-day-number fc-fri fc-past" data-date="2018-09-14">14</td><td class="fc-day-number fc-sat fc-today fc-state-highlight" data-date="2018-09-15">15</td></tr></thead><tbody><tr><td rowspan="2"></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-09-16"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-09-17"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-09-18"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-09-19"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-09-20"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-09-21"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-09-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-09-16">16</td><td class="fc-day-number fc-mon fc-future" data-date="2018-09-17">17</td><td class="fc-day-number fc-tue fc-future" data-date="2018-09-18">18</td><td class="fc-day-number fc-wed fc-future" data-date="2018-09-19">19</td><td class="fc-day-number fc-thu fc-future" data-date="2018-09-20">20</td><td class="fc-day-number fc-fri fc-future" data-date="2018-09-21">21</td><td class="fc-day-number fc-sat fc-future" data-date="2018-09-22">22</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#00a65a;border-color:#00a65a"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-09-23"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-09-24"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-09-25"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-09-26"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-09-27"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-09-28"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-09-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-09-23">23</td><td class="fc-day-number fc-mon fc-future" data-date="2018-09-24">24</td><td class="fc-day-number fc-tue fc-future" data-date="2018-09-25">25</td><td class="fc-day-number fc-wed fc-future" data-date="2018-09-26">26</td><td class="fc-day-number fc-thu fc-future" data-date="2018-09-27">27</td><td class="fc-day-number fc-fri fc-future" data-date="2018-09-28">28</td><td class="fc-day-number fc-sat fc-future" data-date="2018-09-29">29</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#3c8dbc;border-color:#3c8dbc"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 83px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-09-30"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-10-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-10-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-10-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-10-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-10-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-10-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-09-30">30</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2018-10-01">1</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2018-10-02">2</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2018-10-03">3</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2018-10-04">4</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2018-10-05">5</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2018-10-06">6</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php include_once('footer.php')?>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="../../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- jQuery UI 1.11.1 -->
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="../../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../../../plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js" type="text/javascript"></script>
<!-- fullCalendar 2.2.5 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js" type="text/javascript"></script>
<script src="../../../plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<!-- Page specific script -->
<script type="text/javascript">
    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                });

            });
        }
        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear();
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            buttonText: {
                today: 'today',
                month: 'month',
                week: 'week',
                day: 'day'
            },
            //Random default events
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    backgroundColor: "#f56954", //red
                    borderColor: "#f56954" //red
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    backgroundColor: "#f39c12", //yellow
                    borderColor: "#f39c12" //yellow
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    backgroundColor: "#0073b7", //Blue
                    borderColor: "#0073b7" //Blue
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    backgroundColor: "#00c0ef", //Info (aqua)
                    borderColor: "#00c0ef" //Info (aqua)
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    backgroundColor: "#00a65a", //Success (green)
                    borderColor: "#00a65a" //Success (green)
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/',
                    backgroundColor: "#3c8dbc", //Primary (light-blue)
                    borderColor: "#3c8dbc" //Primary (light-blue)
                }
            ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                copiedEventObject.backgroundColor = $(this).css("background-color");
                copiedEventObject.borderColor = $(this).css("border-color");

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
        });

        /* ADDING EVENTS */
        var currColor = "#3c8dbc"; //Red by default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function (e) {
            e.preventDefault();
            //Save color
            currColor = $(this).css("color");
            //Add color effect to button
            $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });
        $("#add-new-event").click(function (e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var val = $("#new-event").val();
            if (val.length == 0) {
                return;
            }

            //Create events
            var event = $("<div />");
            event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
            event.html(val);
            $('#external-events').prepend(event);

            //Add draggable funtionality
            ini_events(event);

            //Remove event from text input
            $("#new-event").val("");
        });
    });
</script>

</body>
</html>