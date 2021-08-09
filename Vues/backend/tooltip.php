<?php include('_header.php') ;?>
        <div id="wrapper">
            <!--navbar top-->
            <?php include('_navbar.php') ;?>
            <!-- Sidebar -->
            <?php include('_sidebar.php') ;?>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-circle-thin"></i>
                        </div>
                        <div class="header-title">
                            <h1> Tooltip</h1>
                            <small> tooltip & preloader Details</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="tooltip.html">tooltip</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Tooltip -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-circle-o-notch fa-lg"></i>
                                        <h2>Tooltips</h2>
                                    </div>
                                    <div class="card-content">
                                        <a class="btn tooltipped m-b-10 light-blue darken-2" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">Hover me!</a>
                                        <a class="btn tooltipped m-b-10 light-blue darken-2" data-position="top" data-delay="50" data-tooltip="I am tooltip">Hover me!</a>
                                        <a class="btn tooltipped m-b-10 light-blue darken-2" data-position="left" data-delay="50" data-tooltip="I am tooltip">Hover me!</a>
                                        <a class="btn tooltipped m-b-10 light-blue darken-2" data-position="right" data-delay="50" data-tooltip="I am tooltip">Hover me!</a>

                                    </div>
                                </div>
                            </div>
                            <!-- ./Tooltip -->

                            <!-- custom Tooltip -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-circle-o-notch fa-lg"></i>
                                        <h2>custom Tooltip</h2>
                                    </div>
                                    <div class="card-content">
                                        <a href="" class="tooltip1 btn m-b-10" title="Show me">hover me</a>
                                        <a href="" class="tooltip2 btn m-b-10" title="Show me">hover me</a>
                                        <a href="" class="tooltip3 btn m-b-10" title="Show me">hover me</a>
                                        <a href="" class="tooltip4 btn m-b-10" title="Show me">hover me</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./custom Tooltip -->
                            <!-- preloader -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-spinner fa-lg"></i>
                                        <h2>preloader</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="progress m-b-20">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <div class="progress m-b-20">
                                            <div class="indeterminate"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./preloader -->
                            <!-- preloader -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-spinner fa-lg"></i>
                                        <h2>preloader</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="preloader-wrapper big active m-r-pre m-b-10">
                                            <div class="spinner-layer spinner-blue-only">
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
                                        <div class="preloader-wrapper active m-r-pre m-b-10">
                                            <div class="spinner-layer spinner-red-only">
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
                                        <div class="preloader-wrapper small active m-b-10">
                                            <div class="spinner-layer spinner-green-only">
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
                            </div>
                            <!-- ./preloader -->

                            <!-- preloader -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-spinner fa-lg"></i>
                                        <h2>Flashing Colors preloader</h2>
                                    </div>
                                    <div class="card-content text-center">
                                        <div class="preloader-wrapper big active">
                                            <div class="spinner-layer spinner-blue">
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

                                            <div class="spinner-layer spinner-red">
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
                                            <div class="spinner-layer spinner-green">
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
                            </div>
                            <!-- ./preloader -->
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
        <!-- tooltipsy -->
        <script src="assets/assets2/plugins/tooltipsy/tooltipsy.min.js" type="text/javascript"></script>
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
            $(document).ready(function () {
                 "use strict";
                //material tooltip
                $('.tooltipped').tooltip({
                    delay: 50
                });
                //custom tooltip
                function ctooltip() {
                    $('.tooltip1').tooltipsy({
                        offset: [-10, 0],
                        show: function (e, $el) {
                            $el.css({
                                'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) - 50 + 'px',
                                'opacity': '0.0',
                                'display': 'block'
                            }).animate({
                                'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) + 50 + 'px',
                                'opacity': '1.0'
                            }, 300);
                        },
                        hide: function (e, $el) {
                            $el.slideUp(100);
                        },
                        css: {
                            'padding': '10px',
                            'max-width': '200px',
                            'color': '#fff',
                            'background-color': 'black',
                            'border': '1px solid black',
                            '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'text-shadow': 'none'
                        }
                    });
                    $('.tooltip2').tooltipsy({
                        offset: [0, -1],
                        show: function (e, $el) {
                            var cur_top = $el[0].getBoundingClientRect().top + 'px';
                            $el.css({
                                'top': '-50px',
                                'display': 'block'
                            }).animate({
                                'top': cur_top,
                                'opacity': '1.0'
                            }, 500, 'easeOutBounce').css('top', cur_top);
                        },
                        hide: function (e, $el) {
                            $el.animate({
                                'top': '+=200px',
                                'opacity': '0.0'
                            }, 200);
                        },
                        css: {
                            'padding': '10px',
                            'max-width': '200px',
                            'color': '#fff',
                            'background-color': 'black',
                            'border': '1px solid black',
                            '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'text-shadow': 'none'
                        }
                    });
                    $('.tooltip3').tooltipsy({
                        offset: [-10, 0],
                        css: {
                            'padding': '10px',
                            'max-width': '200px',
                            'color': '#fff',
                            'background-color': 'black',
                            'border': '1px solid black',
                            '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'text-shadow': 'none'
                        }
                    });
                    $('.tooltip4').tooltipsy({
                        offset: [10, 0],
                        css: {
                            'padding': '10px',
                            'max-width': '100px',
                            'color': '#fff',
                            'background-color': 'black',
                            'border': '1px solid black',
                            '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                            'text-shadow': 'none'
                        }
                    });
                }
                return (ctooltip());
            });
        </script>
    </body>

</html>