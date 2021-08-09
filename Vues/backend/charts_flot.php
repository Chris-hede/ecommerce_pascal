<?php include('_header.php'); ?>
        <div id="wrapper">
            <!--navbar top-->
            <?php include('_navbar.php'); ?>
            <!-- Sidebar -->
            <?php include('_sidebar.php'); ?>
            <!-- ./sidebar-wrapper -->

            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> Flot Charts</h1>
                            <small class="hidden-xs">Preview sample. Documentation here: <a href="http://www.flotcharts.org/" target="_blank">http://www.flotcharts.org/</a></small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="charts_flot.html">Flot chart</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- bar chart -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bar-chart fa-lg"></i>
                                        <h2>Bar Chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart1" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./bar chart -->
                            <!-- bar chart -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-area-chart fa-lg"></i>
                                        <h2>Points chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart2" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./point chart  -->
                            <!-- Line chart -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-line-chart fa-lg"></i>
                                        <h2>Line Chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart3" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Line chart -->
                            <!-- Real time chart -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-area-chart fa-lg"></i>
                                        <h2>Real time chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart4" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Real time chart -->
                            <!-- Filled chart -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-line-chart fa-lg"></i>
                                        <h2>Filled chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart5" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Filled chart -->
                            <!-- Line chart step -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-line-chart fa-lg"></i>
                                        <h2>step line chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart6" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./step line chart -->
                            <!-- points line chart -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-line-chart fa-lg"></i>
                                        <h2>points line chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart7" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./points line chart -->
                            <!-- pie chart -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-pie-chart fa-lg"></i>
                                        <h2>pie chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="flotChart">
                                            <div id="flotChart8" class="flotChart-demo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./pie chart -->
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
        <!-- sscroll -->
        <script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Flot Charts js -->
        <script src="assets/assets2/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <!-- End Page Lavel Plugins-->
        <!-- Start Theme label Script-->
        <!-- Dashboard js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script
            =====================================================================-->
        <script type="text/javascript">
             "use strict";
            $(function () {
                //Flot charts data and options
                var data = [
                    [1, 4],
                    [2, 5],
                    [3, 7],
                    [4, 4],
                    [5, 8],
                    [6, 9],
                    [7, 11],
                    [8, 10],
                    [9, 8],
                    [10, 5],
                    [11, 4],
                    [12, 3]
                ];

                $.plot("#flotChart1", [data], {
                    series: {
                        bars: {
                            show: true,
                            lineWidth: 2,
                            align: "center",
                            fill: false
                        }
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        tickColor: "#e4e5e7",
                        borderWidth: 1,
                        borderColor: '#ddd',
                        color: '#26a69a'
                    },
                    colors: ["#26a69a"]
                });

                var data1 = [
                    [0, 3],
                    [1, 6],
                    [2, 8],
                    [3, 9],
                    [4, 12],
                    [5, 14],
                    [6, 15],
                    [7, 12],
                    [8, 14],
                    [9, 12],
                    [10, 11],
                    [11, 10],
                    [12, 14],
                    [13, 16],
                    [14, 15],
                    [15, 15],
                    [16, 16],
                    [17, 12],
                    [18, 13],
                    [19, 15],
                    [20, 16],
                    [21, 18],
                    [22, 20],
                    [23, 23],
                    [24, 22],
                    [25, 21],
                    [26, 20],
                    [27, 17],
                    [28, 15],
                    [29, 14],
                    [30, 13],
                    [31, 10]
                ];

                var chartUsersOptions2 = {
                    points: {
                        show: true,
                        fill: true,
                        lineWidth: 1,
                        fillColor: "#26a69a"
                    },
                    grid: {
                        tickColor: "#e4e5e7",
                        borderWidth: 1,
                        borderColor: '#ddd',
                        color: '#26a69a'
                    },
                    colors: ["#26a69a"]
                };
                $.plot($("#flotChart2"), [data1], chartUsersOptions2);
                var chartUsersOptions3 = {
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 2,
                        fillColor: "#26a69a"
                    },
                    grid: {
                        tickColor: "#e4e5e7",
                        borderWidth: 1,
                        borderColor: '#ddd',
                        color: '#26a69a'
                    },
                    colors: ["#26a69a"]
                };
                $.plot($("#flotChart3"), [data1], chartUsersOptions3);

                var data = [],
                        totalPoints = 300;

                function getRandomData() {
                    if (data.length > 0)
                        data = data.slice(1);
                    // Do a random walk
                    while (data.length < totalPoints) {

                        var prev = data.length > 0 ? data[data.length - 1] : 50,
                                y = prev + Math.random() * 10 - 5;

                        if (y < 0) {
                            y = 0;
                        } else if (y > 100) {
                            y = 100;
                        }

                        data.push(y);
                    }
                    // Zip the generated y values with the x values
                    var res = [];
                    for (var i = 0; i < data.length; ++i) {
                        res.push([i, data[i]]);
                    }

                    return res;
                }
                // Set up the control widget
                var updateInterval = 30;

                var plot = $.plot("#flotChart4", [getRandomData()], {
                    series: {
                        shadowSize: 0 // Drawing is faster without shadows
                    },
                    yaxis: {
                        min: 0,
                        max: 100
                    },
                    xaxis: {
                        show: false
                    },
                    grid: {
                        tickColor: "#e4e5e7",
                        borderWidth: 1,
                        borderColor: '#ddd',
                        color: '#26a69a'
                    },
                    colors: ["#26a69a"]
                });

                function update() {

                    plot.setData([getRandomData()]);

                    // Since the axes don't change, we don't need to call plot.setupGrid()

                    plot.draw();
                    setTimeout(update, updateInterval);
                }

                update();

                var data5 = [{
                        data: [
                            [1, 4],
                            [2, 5],
                            [3, 7],
                            [4, 4],
                            [5, 8],
                            [6, 9],
                            [7, 11],
                            [8, 10],
                            [9, 8],
                            [10, 5],
                            [11, 4],
                            [12, 3]
                        ]
                    }];

                var chartUsersOptions5 = {
                    lines: {
                        show: true,
                        fill: 0.1
                    },
                    grid: {
                        tickColor: "#e4e5e7",
                        borderWidth: 1,
                        borderColor: '#ddd',
                        color: '#26a69a'
                    },
                    colors: ["#26a69a"]
                };

                $.plot($("#flotChart5"), data5, chartUsersOptions5);

                var data6 = [{
                        label: "bar",
                        data: [
                            [1, 12],
                            [2, 14],
                            [3, 18],
                            [4, 24],
                            [5, 28],
                            [6, 22],
                            [7, 20],
                            [8, 18],
                            [9, 17],
                            [10, 13],
                            [11, 15],
                            [12, 17]
                        ]
                    }];

                var chartUsersOptions6 = {
                    lines: {
                        show: true,
                        steps: true
                    },
                    grid: {
                        tickColor: "#e4e5e7",
                        borderWidth: 1,
                        borderColor: '#ddd',
                        color: '#26a69a'
                    },
                    colors: ["#26a69a"]
                };

                $.plot($("#flotChart6"), data6, chartUsersOptions6);

                var sin = [],
                        cos = [];
                for (var i = 0; i < 14; i += 0.5) {
                    sin.push([i, Math.sin(i)]);
                    cos.push([i, Math.cos(i)]);
                }

                var data7 = [{
                        data: sin,
                        label: "sin(x)"
                    }, {
                        data: cos,
                        label: "cos(x)"
                    }];

                var chartUsersOptions7 = {
                    series: {
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    grid: {
                        tickColor: "#e4e5e7",
                        borderWidth: 1,
                        borderColor: '#ddd',
                        color: '#26a69a'
                    },
                    yaxis: {
                        min: -1.2,
                        max: 1.2
                    },
                    colors: ["#26a69a", "#efefef"]
                };

                $.plot($("#flotChart7"), data7, chartUsersOptions7);

                var data8 = [{
                        label: "Data 1",
                        data: 16,
                        color: "grey"
                    }, {
                        label: "Data 2",
                        data: 6,
                        color: "black"
                    }, {
                        label: "Data 3",
                        data: 22,
                        color: "green"
                    }, {
                        label: "Data 4",
                        data: 32,
                        color: "#26a69a"
                    }];

                var chartUsersOptions8 = {
                    series: {
                        pie: {
                            show: true
                        }
                    },
                    grid: {
                        hoverable: true
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                        shifts: {
                            x: 20,
                            y: 0
                        },
                        defaultTheme: false
                    }
                };

                $.plot($("#flotChart8"), data8, chartUsersOptions8);

            });
        </script>
    </body>

</html>