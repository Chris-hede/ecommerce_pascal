<?php include('_header.php'); ?>
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
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="header-title">
                            <h1> Data Maps</h1>
                            <small> Data Maps details and use</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="index.html">Data Maps</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Basic data map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>Basic</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map2"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Basic data map -->
                            <!-- Choropleth data map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>Choropleth with color</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map4"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Choropleth data map -->
                            <!-- State Labels map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>State Labels</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map5"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./State Labels data map -->

                            <!-- Arcs map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>Arcs </h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map7"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Arcs map -->
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
        <!-- Data maps js -->
        <script src="assets/assets2/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
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
                //basic data map
                var map = new Datamap({
                    element: document.getElementById('map2'),
                    fills: {
                        defaultFill: '#26a69a' // Any hex, color name or rgb/rgba value
                    }
                });

                //Choropleth
                var basic_choropleth = new Datamap({
                    element: document.getElementById("map4"),
                    projection: 'mercator',
                    fills: {
                        defaultFill: "gray",
                        authorHasTraveledTo: "#6913a5e6"
                    },
                    data: {
                        USA: {
                            fillKey: "authorHasTraveledTo"
                        },
                        JPN: {
                            fillKey: "authorHasTraveledTo"
                        },
                        ITA: {
                            fillKey: "authorHasTraveledTo"
                        },
                        CRI: {
                            fillKey: "authorHasTraveledTo"
                        },
                        KOR: {
                            fillKey: "authorHasTraveledTo"
                        },
                        DEU: {
                            fillKey: "authorHasTraveledTo"
                        }
                    }
                });

                var colors = d3.scale.category10();

                window.setInterval(function () {
                    basic_choropleth.updateChoropleth({
                        USA: colors(Math.random() * 10),
                        RUS: colors(Math.random() * 100),
                        AUS: {
                            fillKey: 'authorHasTraveledTo'
                        },
                        BRA: colors(Math.random() * 50),
                        CAN: colors(Math.random() * 50),
                        ZAF: colors(Math.random() * 50),
                        IND: colors(Math.random() * 50)
                    });
                }, 2000);

                //State Labels
                var election = new Datamap({
                    scope: 'usa',
                    element: document.getElementById('map5'),
                    geographyConfig: {
                        highlightBorderColor: '#bada55',
                        popupTemplate: function (geography, data) {
                            return '<div class="hoverinfo">' + geography.properties.name +
                                    Electoral;
                            Votes: ' +  data.electoralVotes + ';
                        },
                        highlightBorderWidth: 3
                    },
                    fills: {
                        'Republican': '#bada55',
                        'Democrat': '#306596',
                        'Heavy Democrat': '#667FAF',
                        'Light Democrat': '#A9C0DE',
                        'Heavy Republican': '#bada55',
                        'Light Republican': '#EAA9A8',
                        defaultFill: '#EDDC4E'
                    },
                    data: {
                        "AZ": {
                            "fillKey": "Republican",
                            "electoralVotes": 5
                        },
                        "CO": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 5
                        },
                        "DE": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "FL": {
                            "fillKey": "UNDECIDED",
                            "electoralVotes": 29
                        },
                        "GA": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "HI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "ID": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "IL": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "IN": {
                            "fillKey": "Republican",
                            "electoralVotes": 11
                        },
                        "IA": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 11
                        },
                        "KS": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "KY": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "LA": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "MD": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "ME": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MN": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MS": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "MO": {
                            "fillKey": "Republican",
                            "electoralVotes": 13
                        },
                        "MT": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "NC": {
                            "fillKey": "Light Republican",
                            "electoralVotes": 32
                        },
                        "NE": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "NV": {
                            "fillKey": "Heavy Democrat",
                            "electoralVotes": 32
                        },
                        "NH": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 32
                        },
                        "NJ": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "NY": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "ND": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "NM": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "OH": {
                            "fillKey": "UNDECIDED",
                            "electoralVotes": 32
                        },
                        "OK": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "OR": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "PA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "RI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "SC": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "SD": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "TN": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "TX": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "UT": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "WI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "VA": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 32
                        },
                        "VT": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "WA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "WV": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "WY": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "CA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "CT": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "AK": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "AR": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "AL": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        }
                    }
                });
                election.labels();

                //Arcs
                var arcs = new Datamap({
                    element: document.getElementById("map7"),
                    scope: 'usa',
                    fills: {
                        defaultFill: "rgba(38, 166, 154, 0.77)",
                        win: '#02386F'
                    },
                    data: {
                        'TX': {
                            fillKey: 'win'
                        },
                        'FL': {
                            fillKey: 'win'
                        },
                        'NC': {
                            fillKey: 'win'
                        },
                        'CA': {
                            fillKey: 'win'
                        },
                        'NY': {
                            fillKey: 'win'
                        },
                        'CO': {
                            fillKey: 'win'
                        }
                    }
                });

                // Arcs coordinates can be specified explicitly with latitude/longtitude,
                // or just the geographic center of the state/country.
                arcs.arc([{
                        origin: 'CA',
                        destination: 'TX'
                    }, {
                        origin: 'OR',
                        destination: 'TX'
                    }, {
                        origin: 'NY',
                        destination: 'TX'
                    }, {
                        origin: {
                            latitude: 40.639722,
                            longitude: -73.778889
                        },
                        destination: {
                            latitude: 37.618889,
                            longitude: -122.375
                        }
                    }, {
                        origin: {
                            latitude: 30.194444,
                            longitude: -97.67
                        },
                        destination: {
                            latitude: 25.793333,
                            longitude: -80.290556
                        },
                        options: {
                            strokeWidth: 2,
                            strokeColor: 'rgba(100, 10, 200, 0.4)',
                            greatArc: true
                        }
                    }, {
                        origin: {
                            latitude: 39.861667,
                            longitude: -104.673056
                        },
                        destination: {
                            latitude: 35.877778,
                            longitude: -78.7875
                        }
                    }], {
                    strokeWidth: 1,
                    arcSharpness: 1.4
                });
            });
        </script>
    </body>
</html>