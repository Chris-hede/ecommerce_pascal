<?php include('_header.php') ;?>
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
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="header-title">
                            <h1> Jvector Maps</h1>
                            <small> Jvector Maps details and use</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="maps_jvector.html">Jvector Maps</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- World map -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-globe fa-lg"></i>
                                        <h2>World map</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="world-map-markers"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./World map -->
                            <!-- Europe map -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-globe fa-lg"></i>
                                        <h2>Europe map</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="europe"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Europe map -->
                            <!-- Asia map -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-globe fa-lg"></i>
                                        <h2>Asia map</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="asia"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Asia map -->
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
        <!-- m-custom-scrollbar -->
        <script src="assets/assets2/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins
            =====================================================================-->
        <!-- Start Page Lavel Plugins
            =====================================================================-->
        <!-- Jvectoe map -->
        <script src="assets/assets2/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/jvectormap/jquery-jvectormap-asia-mill.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/jvectormap/jquery-jvectormap-europe-mill.js" type="text/javascript"></script>

        <!-- End Page Lavel Plugins
            =====================================================================-->
        <!-- Start Theme label Script
            =====================================================================-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script
            =====================================================================-->
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict

                //  World Map
                $('#world-map-markers').vectorMap({
                    map: 'world_mill_en',
                    scaleColors: ['#1a237e', '#1a237e'],
                    normalizeFunction: 'polynomial',
                    hoverOpacity: 0.7,
                    hoverColor: false,
                    regionStyle: {
                        initial: {
                            fill: '#26a69a'
                        }
                    },
                    markerStyle: {
                        initial: {
                            r: 9,
                            'fill': '#b39ddb',
                            'fill-opacity': 0.9,
                            'stroke': '#fff',
                            'stroke-width': 7,
                            'stroke-opacity': 0.4
                        },
                        hover: {
                            'stroke': '#fff',
                            'fill-opacity': 1,
                            'stroke-width': 1.5
                        }
                    },
                    backgroundColor: 'transparent',
                    markers: [{
                            latLng: [48.019573, 66.923684],
                            name: 'kazakistan'
                        }, {
                            latLng: [56.130366, -106.346771],
                            name: 'Canada'
                        }, {
                            latLng: [-0.52, 166.93],
                            name: 'Nauru'
                        }, {
                            latLng: [43.93, 12.46],
                            name: 'San Marino'
                        }, {
                            latLng: [47.14, 9.52],
                            name: 'Liechtenstein'
                        }, {
                            latLng: [7.11, 171.06],
                            name: 'Marshall Islands'
                        }, {
                            latLng: [20.593684, 78.962880],
                            name: 'India'
                        }, {
                            latLng: [3.2, 73.22],
                            name: 'Maldives'
                        }, {
                            latLng: [35.88, 14.5],
                            name: 'Malta'
                        }, {
                            latLng: [12.05, -61.75],
                            name: 'Grenada'
                        }, {
                            latLng: [13.16, -61.23],
                            name: 'Saint Vincent and the Grenadines'
                        }, {
                            latLng: [13.16, -59.55],
                            name: 'Barbados'
                        }, {
                            latLng: [17.11, -61.85],
                            name: 'Antigua and Barbuda'
                        }, {
                            latLng: [-4.61, 55.45],
                            name: 'Seychelles'
                        }, {
                            latLng: [7.35, 134.46],
                            name: 'Palau'
                        }, {
                            latLng: [42.5, 1.51],
                            name: 'Andorra'
                        }, {
                            latLng: [14.01, -60.98],
                            name: 'Saint Lucia'
                        }, {
                            latLng: [6.91, 158.18],
                            name: 'Federated States of Micronesia'
                        }, {
                            latLng: [1.3, 103.8],
                            name: 'Singapore'
                        }, {
                            latLng: [35.861660, 104.195397],
                            name: 'Chin'
                        }, {
                            latLng: [23.810332, 90.412518],
                            name: 'Dhaka'
                        }, {
                            latLng: [15.3, -61.38],
                            name: 'Dominica'
                        }, {
                            latLng: [-20.2, 57.5],
                            name: 'Mauritius'
                        }, {
                            latLng: [26.02, 50.55],
                            name: 'Bahrain'
                        }, {
                            latLng: [0.33, 6.73],
                            name: 'SÃ£o TomÃ© and PrÃ­ncipe'
                        }]
                });
                // Asia Map
                $('#asia').vectorMap({
                    map: 'asia_mill',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: 'rgba(38, 166, 154, 0.79)'
                        }
                    }
                });
                // Europe Map
                $('#europe').vectorMap({
                    map: 'europe_mill',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: 'rgba(38, 166, 154, 0.79)'
                        }
                    }
                });

            });
        </script>
    </body>
</html>