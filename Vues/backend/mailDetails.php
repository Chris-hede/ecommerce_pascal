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
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <div class="header-title">
                            <h1> Mail details</h1>
                            <small> Mail Details</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="maildetails.html">Mail</a></li>
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
                                    </div>
                                    <div class="inbox-body">
                                        <div class="mail-option">
                                            <div class="btn-group">
                                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                    <i class="fa fa-reply"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                    <i class="fa fa-reply-all" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                    <i class=" fa fa-refresh"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <!-- Dropdown Trigger -->
                                                <a class='dropdown-button btn' href='#' data-activates='maildropdown'>Move <i class="fa fa-angle-down "></i></a>
                                                <!-- Dropdown Structure -->
                                                <ul id='maildropdown' class='dropdown-content'>
                                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group pull-right">
                                                <a data-original-title="Refresh" data-placement="top" href="#" class="btn mini tooltips">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="inbox-avatar inbox-brd p-20 border-btm">
                                            <img src="assets/assets2/dist/img/avatar5.png" class="border-green hidden-xs hidden-sm img-circle" width="60" height="50" alt="">
                                            <div class="inbox-avatar-text">
                                                <div class="avatar-name"><strong>From: </strong> Tanjil Ahmed - <em>tanjil_ahmed@example.com</em>
                                                </div>
                                                <div><small><strong>Subject: </strong> Regd financial projections for the next five years</small></div>
                                            </div>
                                            <div class="inbox-date hidden-xs hidden-sm">
                                                <div><small><b><i class="fa fa-clock-o"></i> Aug 21st, 11:30 PM</b></small></div>
                                            </div>
                                            <div class="inbox-mail-details p-20">
                                                <p><strong>Hi Naeem,</strong></p>
                                                <p><span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</span></p>
                                                <p><span>Maecenas sed enim ut sem viverra aliquet. Consectetur adipiscing elit ut aliquam purus sit amet luctus.</span><span>Bibendum est ultricies integer quis :</span></p>
                                                <div>
                                                    <ul>
                                                        <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                                                        <li><span>Quisque dictum lorem id tempus lacinia.</span></li>
                                                        <li><span>Aenean placerat metus eget dignissim sodales.</span></li>
                                                        <li><span>Vivamus pretium risus vitae nibh maximus bibendum.</span></li>
                                                        <li><span>Curabitur maximus neque eget elit fermentum, at sagittis elit gravida.</span></li>
                                                    </ul>
                                                </div>
                                                <p><span>Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Pellentesque massa placerat duis ultricies.</span></p>
                                                <div><strong>Regards,</strong></div>
                                                <div><strong>Tanjil Ahmed</strong></div>
                                                <hr>
                                                <input name="filebutton" class="input-file" type="file">
                                                <h4><i class="fa fa-paperclip"></i> Attachment files</h4>
                                                <div class="btn-group">
                                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                        <i class="fa fa-reply"></i>
                                                    </a>
                                                </div>
                                                <div class="btn-group">
                                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                        <i class="fa fa-reply-all" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="btn-group">
                                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                        <i class=" fa fa-refresh"></i>
                                                    </a>
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
        <!-- End Core Plugins-->
        <!-- Start Theme label Script
             =====================================================================-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script
             =====================================================================-->
    </body>
</html>