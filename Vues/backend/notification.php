<?php include('_header.php') ;?>
        <div id="wrapper">
            <!--navbar top-->
            <?php include('_navbar.php');?>
            <!-- Sidebar -->
            <?php include('_sidebar.php'); ?>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-bell"></i>
                        </div>
                        <div class="header-title">
                            <h1> Notification</h1>
                            <small> Notification Details and use</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="notification.html">Notification</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- alerts -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation-triangle fa-lg"></i>
                                        <h2>Bootstrap Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="alert alert-success z-depth-1">
                                            <strong>Success!</strong> This alert box could indicate a successful or positive action.
                                        </div>
                                        <div class="alert alert-info z-depth-1">
                                            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                                        </div>
                                        <div class="alert alert-warning z-depth-1">
                                            <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
                                        </div>
                                        <div class="alert alert-danger z-depth-1">
                                            <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->

                            <!-- Animated alerts -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation-circle fa-lg"></i>
                                        <h2>Bootstrap Animated Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="alert alert-success alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Success!</strong> This alert box could indicate a successful or positive action.
                                        </div>
                                        <div class="alert alert-info alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                                        </div>
                                        <div class="alert alert-warning alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
                                        </div>
                                        <div class="alert alert-danger alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->
                        </div>
                        <!-- ./row -->
                        <!-- alerts link-->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bell fa-lg"></i>
                                        <h2>Bootstrap Alerts link</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="alert alert-success z-depth-1" role="alert">
                                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                        </div>
                                        <div class="alert alert-info z-depth-1" role="alert">
                                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning z-depth-1" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                                        </div>
                                        <div class="alert alert-danger z-depth-1" role="alert">
                                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts link-->

                            <!-- alerts -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bell fa-lg"></i>
                                        <h2>notify Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="button-list">
                                            <button type="button" class="btn m-b-10" onclick="api_type('default')">default</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('toast')">toast</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('info')">info</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('success')">success</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('danger')">danger</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('warning')">warning</button>
                                        </div>
                                        <pre class="prettyprint">$.notify("Alert!", {type:"info"});</pre>
                                        <h3>Colorfull Alerts</h3>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-1 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#D44950'})">#D44950</button>
                                            <button type="button" class="btn btn-2 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#4B7EE0'})">#4B7EE0</button>
                                            <button type="button" class="btn btn-3 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#20D67B'})">#20D67B</button>
                                            <button type="button" class="btn btn-4 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#A5881B'})">#A5881B</button>
                                            <button type="button" class="btn btn-5 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#4a148c'})">purple</button>
                                        </div>
                                        <pre class="prettyprint">$.notify("Alert!", {color: "#fff", background: "#D44950"});</pre>

                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->
                        </div>
                        <!-- ./row -->
                        <div class="row">
                            <!-- Sweet Alerts -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation fa-lg"></i>
                                        <h2>Sweet Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="showcase sweet">
                                            <button class="waves-effect waves-light btn m-b-10 m-t-5">Show error message</button>
                                            <pre>
swal(
  <span class="str">'Oops...'</span>,
  <span class="str">'Something went wrong!'</span>,
  <span class="str">'error'</span>
)</pre>
                                        </div>
                                        <ul class="examples">
                                            <li class="message">
                                                <div class="ui">
                                                    <p>A basic message</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>

                                            <li class="title-text">
                                                <div class="ui">
                                                    <p>A title with a text under</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>
                                            <li class="success">
                                                <div class="ui">
                                                    <p>A success message!</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>

                                            <li class="html">
                                                <div class="ui">
                                                    <p>Custom HTML description and buttons</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>

                                            <li class="html-jquery">
                                                <div class="ui">
                                                    <p>jQuery HTML with custom animation (<a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css <i class="fa fa-external-link"></i></a>)</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>

                                            <li class="warning confirm">
                                                <div class="ui">
                                                    <p>A warning message, with a function attached to the "Confirm"-button...</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>

                                            <li class="warning cancel" id="dismiss-handle">
                                                <div class="ui">
                                                    <p>... and by passing a parameter, you can execute something else for "Cancel".</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>

                                            <li class="custom-image">
                                                <div class="ui">
                                                    <p>A message with a custom image and CSS animation disabled</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->

                            <!-- Animated alerts -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation-circle fa-lg"></i>
                                        <h2>Animated Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Scale</td>
                                                    <td>
                                                        <button id="scale" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jelly</td>
                                                    <td>
                                                        <button id="jelly" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slide in</td>
                                                    <td>
                                                        <button id="slideIn" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Genie</td>
                                                    <td>
                                                        <button id="genie" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Flip</td>
                                                    <td>
                                                        <button id="flip" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bouncy Flip</td>
                                                    <td>
                                                        <button id="bouncyFlip" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <!-- ./animated alert -->
                        </div>
                        <!-- ./row -->
                    </div>
                    <!-- ./cotainer -->
                </div>
                <!-- ./page-content -->
            </div>
            <!-- ./page-content-wrapper -->
        </div>
        <!-- ./page-wrapper -->
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
        <!-- pnotify -->
        <script src="assets/assets2/plugins/pnotify/pnotify.custom.min.js" type="text/javascript"></script>
        <!-- sweet alert2 -->
        <script src="assets/assets2/plugins/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <!-- Notify -->
        <script src="assets/assets2/plugins/notify/js/notify.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/notify/js/prettify.js" type="text/javascript"></script>
        <!-- iziToast -->
        <script src="assets/assets2/plugins/iziToast/dist/js/iziToast.min.js" type="text/javascript"></script>
        <!-- Notification js -->
        <script src="assets/assets2/plugins/NotificationStyles/js/modernizr.custom.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/NotificationStyles/js/classie.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/NotificationStyles/js/notificationFx.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/NotificationStyles/js/snap.svg-min.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/assets2/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Start Theme label Script
            =====================================================================-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script
            =====================================================================-->

        <script>
                                                "use strict";
                                                //iztoast js
                                                iziToast.show({
                                                    title: 'Hey',
                                                    message: 'What would you like to add?'
                                                });
                                                // animated alerts
                                                function animalert() {
                                                    (function () {
                                                        function1();
                                                        function2();
                                                        function3();
                                                        function4();
                                                        function5();
                                                        function6();
                                                    })();

                                                    function function1() {
                                                        var bttn = document.getElementById('scale');
                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>This is just a simple notice. Everything is in order and this is a <a href="#">simple link</a>.</p>',
                                                                    layout: 'growl',
                                                                    effect: 'scale',
                                                                    type: 'notice', // notice, warning, error or success
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function2() {
                                                        var bttn = document.getElementById('jelly');
                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>Hello there! I\'m a classic notification but I have some elastic jelliness thanks to <a href="http://bouncejs.com/">bounce.js</a>. </p>',
                                                                    layout: 'growl',
                                                                    effect: 'jelly',
                                                                    type: 'notice', // notice, warning, error or success
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function3() {
                                                        var bttn = document.getElementById('slideIn');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>This notification has slight elasticity to it thanks to <a href="http://bouncejs.com/">bounce.js</a>.</p>',
                                                                    layout: 'growl',
                                                                    effect: 'slide',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function4() {
                                                        var bttn = document.getElementById('genie');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                                                                    layout: 'growl',
                                                                    effect: 'genie',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function5() {
                                                        var bttn = document.getElementById('flip');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                                                                    layout: 'attached',
                                                                    effect: 'flip',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function6() {

                                                        var bttn = document.getElementById('bouncyFlip');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<span class="icon icon-calendar"></span><p>The event was added to your calendar. Check out all your events in your <a href="#">event overview</a>.</p>',
                                                                    layout: 'attached',
                                                                    effect: 'bouncyflip',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }
                                                }

                                                animalert();
                                                //Notify js
                                                function usage() {
                                                    $.notify("Alert!");
                                                }

                                                function api_type(type) {
                                                    $.notify("Alert!", {
                                                        type: type
                                                    });
                                                }

                                                function api_position() {
                                                    var an = $(":radio[name=align]:checked").val();
                                                    var vn = $(":radio[name=verticalAlign]:checked").val();
                                                    $.notify("Alert!", {
                                                        align: an,
                                                        verticalAlign: vn
                                                    });
                                                }

                                                function api_delay() {
                                                    $.notify("Alert!", {
                                                        delay: $("#delayValue").val()
                                                    });
                                                }

                                                function myFunc() {
                                                    alert("삭제하였습니다");
                                                }

                                                function example1() {
                                                    $.notify({
                                                        delay: 999999,
                                                        message: "hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!",
                                                        type: "warning",
                                                        close: "true",
                                                        animation: true,
                                                        animationType: "scale",
                                                        align: "center",
                                                        verticalAlign: "middle",
                                                        color: "#777",
                                                        background: "#eee"
                                                    });
                                                }

                                                function example2() {
                                                    $.notify({
                                                        delay: 0,
                                                        message: "hello world!",
                                                        animation: true,
                                                        align: "center",
                                                        verticalAlign: "middle",
                                                        buttons: ["확인", "취소"],
                                                        buttonFunc: ["test"],
                                                        buttonAlign: "right",
                                                        blur: 0.2
                                                    });
                                                }

                                                !function ($) {
                                                    $(function () {
                                                        window.prettyPrint && prettyPrint()
                                                    })
                                                }(window.jQuery)

                                                //sweet alerts
                                                function sweetalerts() {
                                                    $('.download').on('click', function () {
                                                        $('html, body').animate({
                                                            scrollTop: $('.download-section').offset().top
                                                        }, 1000)
                                                    })

                                                    $('.showcase.normal button').on('click', function () {
                                                        window.alert('Oops! Something went wrong!')
                                                    })

                                                    $('.showcase.sweet button').on('click', function () {
                                                        swal('Oops...', 'Something went wrong!', 'error').catch(swal.noop)
                                                    })

                                                    $('.examples .message button').on('click', function () {
                                                        swal('Any fool can use a computer').catch(swal.noop)
                                                    })

                                                    $('.examples .timer button').on('click', function () {
                                                        swal({
                                                            title: 'Auto close alert!',
                                                            text: 'I will close in 2 seconds.',
                                                            timer: 2000
                                                        }).then(
                                                                function () {},
                                                                // handling the promise rejection
                                                                        function (dismiss) {
                                                                            if (dismiss === 'timer') {
                                                                                console.log('I was closed by the timer')
                                                                            }
                                                                        }
                                                                )
                                                            })
                                                    //sweet alerts1
                                                    $('.examples .html button').on('click', function () {
                                                        swal({
                                                            title: '<i>HTML</i> <u>example</u>',
                                                            type: 'info',
                                                            html: 'You can use <b>bold text</b>, ' +
                                                                    '<a href="//github.com">links</a> ' +
                                                                    'and other HTML tags',
                                                            showCloseButton: true,
                                                            showCancelButton: true,
                                                            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                                                            cancelButtonText: '<i class="fa fa-thumbs-down"></i>'
                                                        }).catch(swal.noop)
                                                    })
                                                    //sweet alerts2
                                                    $('.examples .html-jquery button').on('click', function () {
                                                        swal({
                                                            title: 'jQuery HTML example',
                                                            html: $('<div>').addClass('some-class').text('jQuery is everywhere.'),
                                                            animation: false,
                                                            customClass: 'animated tada'
                                                        }).catch(swal.noop)
                                                    })
                                                    //sweet alerts3
                                                    $('.examples .title-text button').on('click', function () {
                                                        swal('The Internet?', 'That thing is still around?', 'question').catch(swal.noop)
                                                    })
                                                    //sweet alerts4
                                                    $('.examples .success button').on('click', function () {
                                                        swal('Good job!', 'You clicked the button!', 'success').catch(swal.noop)
                                                    })
                                                    //sweet alerts5
                                                    $('.examples .warning.confirm button').on('click', function () {
                                                        swal({
                                                            title: 'Are you sure?',
                                                            text: 'You won\'t be able to revert this!',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then(function () {
                                                            swal('Deleted!', 'Your file has been deleted!', 'success')
                                                        }).catch(swal.noop)
                                                    })
                                                    //sweet alerts6
                                                    $('.examples .warning.cancel button').on('click', function () {
                                                        swal({
                                                            title: 'Are you sure?',
                                                            text: 'Buttons below are styled with Bootstrap classes',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!',
                                                            cancelButtonText: 'No, cancel!',
                                                            confirmButtonClass: 'btn btn-success',
                                                            cancelButtonClass: 'btn btn-danger',
                                                            buttonsStyling: false
                                                        }).then(function () {
                                                            swal('Deleted!', 'Your file has been deleted!', 'success')
                                                        }, function (dismiss) {
                                                            // dismiss can be 'cancel', 'overlay', 'close', 'timer'
                                                            if (dismiss === 'cancel') {
                                                                swal('Cancelled', 'Your imaginary file is safe :)', 'error')
                                                            }
                                                        })
                                                    })
                                                    //sweet alerts7
                                                    $('.examples .custom-image button').on('click', function () {
                                                        swal({
                                                            title: 'Sweet!',
                                                            text: 'Modal with a custom image.',
                                                            imageUrl: 'https://unsplash.it/400/200/?random',
                                                            imageWidth: 400,
                                                            imageHeight: 200,
                                                            animation: false
                                                        }).catch(swal.noop)
                                                    })
                                                    //sweet alerts8
                                                    $('.examples .custom-width-padding-background button').on('click', function () {
                                                        swal({
                                                            title: 'Custom width, padding, background.',
                                                            width: 600,
                                                            padding: 100,
                                                            background: '#fff url(https://bit.ly/1Nqn9HU)'
                                                        }).catch(swal.noop)
                                                    })

                                                    $('.examples .dynamic-queue button').on('click', function () {
                                                        swal.queue([{
                                                                title: 'Your public IP',
                                                                confirmButtonText: 'Show my public IP',
                                                                text: 'Your public IP will be received via AJAX request',
                                                                currentProgressStep: 0,
                                                                showLoaderOnConfirm: true,
                                                                preConfirm: function () {
                                                                    return new Promise(function (resolve) {
                                                                        $.get('https://api.ipify.org?format=json')
                                                                                .done(function (data) {
                                                                                    swal.insertQueueStep(data.ip)
                                                                                    resolve()
                                                                                })
                                                                    })
                                                                }
                                                            }]).catch(swal.noop)
                                                    })

                                                    $('.modal-types button').on('click', function () {
                                                        var type = $(this).attr('class').slice(5)
                                                        swal(type + '!', '', type).catch(swal.noop)
                                                    })
                                                }

                                                sweetalerts();
        </script>

    </body>

</html>