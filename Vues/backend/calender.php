<?php include('_header.php'); ?>
        <div id="wrapper">
            <!--navbar top-->
           <?php include('_navbar.php'); ?>
            <!-- Sidebar -->
            <?php include('_sidebar.php');?>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> Calender</h1>
                            <small> Calender Use & displayEvents</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="calender.html">calender</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Main content -->
                            <section class="content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <div class="panel m-l-10">
                                            <div class="panel-body z-depth-1">
                                                <div id='external-events'>
                                                    <h3>Drag your Events</h3>
                                                    <div class='fc-event z-depth-2 m-b-5'>First Event</div>
                                                    <div class='fc-event z-depth-2 m-b-5'>second Event</div>
                                                    <div class='fc-event z-depth-2 m-b-5'>Third Event</div>
                                                    <div class='fc-event z-depth-2 m-b-5'>Forth Event</div>
                                                    <div class='fc-event z-depth-2 m-b-5'>Fifth Event</div>
                                                    <p>
                                                        <input type='checkbox' id='drop-remove' />
                                                        <label for='drop-remove'>remove after drop</label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-bd hidden-xs hidden-sm m-l-10">
                                            <div class="panel-body z-depth-1">
                                                <h3 class="m-t-0">FullCalendar</h3>
                                                <p> is a jQuery plugin that provides a full-sized, drag &amp; drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is easily configured to use your own feed format (an extension is provided for Google Calendar).</p>
                                                <p><a href="https://fullcalendar.io/" target="_blank">FullCalendar documentation</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-9">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <!-- calender -->
                                                <div id='calendar'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /.content -->
                        </div>
                    </div>
                </div>
                <!-- ./tabs -->

            </div>
            <!-- ./row -->
        </div>
        <!-- ./cotainer -->
    </div>
    <!-- ./page-content -->
</div>
<!-- ./page-content-wrapper -->

<!-- Preloader -->
<div id="preloader">
    <div class="preloader-position">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-teal">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->
<!-- Start Core Plugins
=====================================================================-->
<!-- jQuery -->
<script src="assets/assets2/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="assets/assets2/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="assets/assets2/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- materialize  -->
<script src="assets/assets2/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
<!-- metismenu-master -->
<script src="assets/assets2/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
<!-- m-custom-scrollbar -->
<script src="assets/assets2/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<!-- scroll -->
<script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
<!-- fullcalendar js -->
<script src="assets/assets2/plugins/fullcalendar/lib/moment.min.js" type="text/javascript"></script>
<script src="assets/assets2/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<!-- custom js -->
<script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
<!-- End Core Plugins
<!-- Start Theme label Script
=====================================================================-->
<!-- main js -->
<script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>

<!-- End Theme label Script
    =====================================================================-->
<script>
    $(document).ready(function () {
         "use strict";
        
// sidebar list activation        
        $("#side-menu li").click(function () {
            $(".clndr").css("background-color", "transparent");
        });
        /* initialize the external events
         -----------------------------------------------------------------*/
        $('#external-events .fc-event').each(function () {
            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });

        });

        /* initialize the calendar
         -----------------------------------------------------------------*/
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            defaultDate: '2016-12-12',
            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function () {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [{
                    title: 'Business Lunch',
                    start: '2016-12-03T13:00:00',
                    constraint: 'businessHours'
                }, {
                    title: 'Meeting',
                    start: '2016-12-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#37a000'
                }, {
                    title: 'Conference',
                    start: '2016-12-18',
                    end: '2016-12-20'
                }, {
                    title: 'Party',
                    start: '2016-12-29T20:00:00'
                },
                // areas where "Meeting" must be dropped
                {
                    id: 'availableForMeeting',
                    start: '2016-12-11T10:00:00',
                    end: '2016-12-11T16:00:00',
                    rendering: 'background'
                }, {
                    id: 'availableForMeeting',
                    start: '2016-12-13T10:00:00',
                    end: '2016-12-13T16:00:00',
                    rendering: 'background'
                },
                // red areas where no events can be dropped
                {
                    start: '2016-12-24',
                    end: '2016-12-28',
                    overlap: false,
                    rendering: 'background',
                    color: '#ff9f89'
                }, {
                    start: '2016-12-06',
                    end: '2016-12-08',
                    overlap: false,
                    rendering: 'background',
                    color: '#ff9f89'
                }
            ]
        });

    });
</script>
</body>

</html>