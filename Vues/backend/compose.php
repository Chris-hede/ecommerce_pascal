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
                            <i class="fa fa-pencil-square"></i>
                        </div>
                        <div class="header-title">
                            <h1> Compose Mail</h1>
                            <small> Type Mails</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="compose.html">tabs</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mail-box">
                                <aside class="sm-side hidden-xs">
                                    <div class="user-head">
                                        <a class="inbox-avatar">
                                            <img src="assets/assets2/dist/img/avatar5.png" class="border-green" width="60" height="50" alt="logo">
                                        </a>
                                        <div class="user-name">
                                            <h5><a href="#">AlRazY</a></h5>
                                            <span><a href="#">Alraz@Gmail.com</a></span>
                                        </div>
                                    </div>
                                    <div class="inbox-body">
                                        <a href="compose.html" class="btn btn-compose">
                                            <i class="fa fa-edit"></i> Compose
                                        </a>
                                    </div>
                                    <ul class="inbox-nav inbox-divider">
                                        <li class="active">
                                            <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">7</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-primary pull-right">15</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-pills nav-stacked labels-info ">
                                        <li>
                                            <h4> recent chat</h4>
                                        </li>
                                        <li>
                                            <p><i class=" fa fa-comments-o"></i> No recent chat</p>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="lg-side">
                                    <div class="inbox-head">
                                        <h3>Inbox</h3>
                                        <form action="#" class="pull-right position">
                                            <div class="input-append">
                                                <input type="text" class="sr-input" placeholder="Search Mail">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="inbox-body">
                                        <div class="panel panel-default">
                                            <div class="panel-body message">
                                                <h2 class="text-center">Type your Message</h2>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label for="to" class="col-sm-1 control-label">To:</label>
                                                        <div class="col-sm-11">
                                                            <input type="text" class="form-control select2-offscreen" id="to" placeholder="type Email" tabindex="-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cc" class="col-sm-1 control-label">CC:</label>
                                                        <div class="col-sm-11">
                                                            <input type="text" class="form-control select2-offscreen" id="cc" placeholder="details" tabindex="-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bcc" class="col-sm-1 control-label">BCC:</label>
                                                        <div class="col-sm-11">
                                                            <input type="email" class="form-control select2-offscreen" id="bcc" placeholder="subject" tabindex="-1">
                                                        </div>
                                                    </div>

                                                </form>

                                                <div class="col-sm-11 col-sm-offset-1">

                                                    <div class="btn-toolbar" role="toolbar">
                                                        <div class="btn-group">
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-bold"></span></button>
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-italic"></span></button>
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-underline"></span></button>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-align-left"></span></button>
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-align-right"></span></button>
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-align-center"></span></button>
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-align-justify"></span></button>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-indent"></span></button>
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-outdent"></span></button>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-list-ul"></span></button>
                                                            <button class="btn m-b-5 m-r-2"><span class="fa fa-list-ol"></span></button>
                                                        </div>
                                                        <button class="btn m-b-5 m-r-2"><span class="fa fa-trash-o"></span></button>
                                                        <button class="btn m-b-5 m-r-2"><span class="fa fa-paperclip"></span></button>
                                                        <div class="btn-group">
                                                            <button class="btn m-b-5 m-r-2 dropdown-toggle" data-toggle="dropdown"><span class="fa fa-tags"></span> <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">add label <span class="label label-danger"> Home</span></a></li>
                                                                <li><a href="#">add label <span class="label label-info">Job</span></a></li>
                                                                <li><a href="#">add label <span class="label label-success">Clients</span></a></li>
                                                                <li><a href="#">add label <span class="label label-warning">News</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn m-b-5"><i class="material-icons right">send</i>Send</button>
                                                        <button type="submit" class="btn btn-default m-b-5"><i class="material-icons right">attachment</i>Draft</button>
                                                        <button type="submit" class="btn btn-danger m-b-5"><i class="material-icons right">do_not_disturb_alt</i>Discard</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </aside>
                            </div>

                        </div>
                        <!-- ./row -->
                    </div>
                    <!-- ./cotainer -->
                </div>
                <!-- ./page-content -->
            </div>
            <!-- ./page-content-wrapper -->
        </div>
        <!-- ./wrapper -->

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
    </body>

</html>