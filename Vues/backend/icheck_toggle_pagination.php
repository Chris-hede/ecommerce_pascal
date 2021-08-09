<?php  include('_header.php') ;?>
        <div id="wrapper">
            <!--navbar top-->
            <?php include('_navbar.php'); ?>
            <!-- Sidebar -->
           <?php include('_sidebar.php') ;?>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-circle-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> iCheck</h1>
                            <small> iCheck,toggle,pagination</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="icheck_toggle_pagination.html">icheck</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Toggle option -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-check fa-lg"></i>
                                        <h2>Toggle floating button</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="material-button-anim">
                                            <ul class="list-inline" id="options">
                                                <li class="option">
                                                    <button class="material-button option1" type="button">
                                                        <span class="fa fa-phone" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                                <li class="option">
                                                    <button class="material-button option2" type="button">
                                                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                                <li class="option">
                                                    <button class="material-button option3" type="button">
                                                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                            </ul>
                                            <button class="material-button material-button-toggle" type="button">
                                                <span class="fa fa-plus" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Toggle -->
                            <!-- icheck -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-check fa-lg"></i>
                                        <h2>icheck</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="skin-section">
                                            <ul class="list">
                                                <li>
                                                    <input tabindex="13" type="checkbox" id="flat-checkbox-1">
                                                    <label for="flat-checkbox-1">Checkbox 1</label>
                                                </li>
                                                <li>
                                                    <input tabindex="14" type="checkbox" id="flat-checkbox-2" checked>
                                                    <label for="flat-checkbox-2">Checkbox 2</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="flat-checkbox-disabled" disabled>
                                                    <label for="flat-checkbox-disabled">Disabled</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="flat-checkbox-disabled-checked" checked disabled>
                                                    <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                </li>
                                            </ul>
                                            <ul class="list">
                                                <li>
                                                    <input tabindex="15" type="radio" id="flat-radio-1" name="flat-radio">
                                                    <label for="flat-radio-1">Radio button 1</label>
                                                </li>
                                                <li>
                                                    <input tabindex="16" type="radio" id="flat-radio-2" name="flat-radio" checked>
                                                    <label for="flat-radio-2">Radio button 2</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="flat-radio-disabled" disabled>
                                                    <label for="flat-radio-disabled">Disabled</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="flat-radio-disabled-checked" checked disabled>
                                                    <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./icheck -->
                        </div>
                        <!-- ./row -->
                        <div class="row">
                            <!-- Toggle Button -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-check fa-lg"></i>
                                        <h2>Toggle Button</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Switch -->
                                        <div class="col-md-6 switch m-b-20">
                                            <label>
                                                Off
                                                <input type="checkbox">
                                                <span class="lever"></span> On
                                            </label>
                                        </div>
                                        <!-- Disabled Switch -->
                                        <div class="col-md-6 switch m-b-20">
                                            <label>
                                                Off
                                                <input disabled type="checkbox">
                                                <span class="lever"></span> On
                                            </label>
                                        </div>
                                        <ul class="toggle-list m-b-20">
                                            <li>
                                                <input checked data-toggle="toggle" data-onstyle="primary" type="checkbox">
                                            </li>
                                            <li>
                                                <input checked data-toggle="toggle" data-onstyle="success" type="checkbox">
                                            </li>
                                            <li>
                                                <input checked data-toggle="toggle" data-onstyle="info" type="checkbox">
                                            </li>
                                            <li>
                                                <input checked data-toggle="toggle" data-onstyle="warning" type="checkbox">
                                            </li>
                                            <li>
                                                <input checked data-toggle="toggle" data-onstyle="danger" type="checkbox">
                                            </li>
                                            <li>
                                                <input checked data-toggle="toggle" data-onstyle="default" type="checkbox">
                                            </li>
                                        </ul>
                                        <div class="m-b-20">
                                            <button type="button" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i></button>
                                            <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="glyphicon glyphicon-list"></i></button>
                                            <button type="button" class="btn btn-success btn-circle btn-lg"><i class="glyphicon glyphicon-link"></i></button>
                                            <button type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i></button>
                                            <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="glyphicon glyphicon-remove"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-heart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Toggle Button -->
                            <!-- pagination -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-arrow-circle-right fa-lg"></i>
                                        <h2>pagination</h2>
                                    </div>
                                    <div class="card-content">
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                            <li class="active"><a href="#!">1</a></li>
                                            <li class="waves-effect"><a href="#!">2</a></li>
                                            <li class="waves-effect"><a href="#!">3</a></li>
                                            <li class="waves-effect"><a href="#!">4</a></li>
                                            <li class="waves-effect"><a href="#!">5</a></li>
                                            <li class="waves-effect page-next"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                        </ul>
                                        <ul class="pagination pagination-circle">
                                            <li class="disabled"><a href="#">«</a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                        <br>
                                        <ul class="pagination">
                                            <li><a href="#" rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                            <li><a href="#" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--row-->
                        <!-- ./pagination -->
                        <!-- List group -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-check fa-lg"></i>
                                        <h2>List group</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="list-group">
                                            <button type="button" class="list-group-item list-group-item-action active">
                                                Cras justo odio
                                            </button>
                                            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                                            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                                            <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./List group -->
                            <!-- List group -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-check fa-lg"></i>
                                        <h2>List group</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-success">Dapibus ac facilisis in</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-info">Cras sit amet nibh libero</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Porta ac consectetur ac</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Vestibulum at eros</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./List group -->
                            <!-- List group -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-check fa-lg"></i>
                                        <h2>List group</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./List group -->
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
        <!-- Start Core Plugins-->
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
        <!-- bootstrap-toggle -->
        <script src="assets/assets2/plugins/bootstrap-toggle/js/bootstrap-toggle.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/assets2/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Start Theme label Script-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script-->

        <script>
             "use strict";
            $(function () {
                //bootstrap toggle
                $('#toggle-two').bootstrapToggle({
                    on: 'Enabled',
                    off: 'Disabled'
                });
                //matreial toggle
                $('.material-button-toggle').on("click", function () {
                    $(this).toggleClass('open');
                    $('.option').toggleClass('scale-on');
                });
            });
        </script>
    </body>

</html>