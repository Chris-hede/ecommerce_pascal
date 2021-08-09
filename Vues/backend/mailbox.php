<?php include('_header.php') ;?>
        <div id="wrapper">
            <!--navbar top-->
            <?php  include('_navbar.php');?>
            <!-- Sidebar -->
            <?php include('_sidebar.php') ;?>
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
                            <h1> Inbox</h1>
                            <small> Mail Details</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="mailbox.html">Mail</a></li>
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
                                            <ul class="unstyled inbox-pagination">
                                                <li><span>1-50 of 234</span></li>
                                                <li>
                                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                                </li>
                                                <li>
                                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <table class="table table-bordered table-hover table-responsive">
                                            <tbody>
                                                <tr class="unread" id="tabl">
                                                    <td>
                                                        <input type="checkbox" id="test1"/>
                                                        <label for="test1"></label>
                                                    </td>
                                                    <td class="view-message"><a href="maildetails.html" target="_blank">web desgn</a></td>
                                                    <td class="view-message">html,css,bootstrap,javascript..</td>
                                                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message  text-right">4:32 AM</td>
                                                </tr>
                                                <tr class="unread">
                                                    <td>
                                                        <input type="checkbox" id="test2" />
                                                        <label for="test2"></label>
                                                    </td>
                                                    <td class="view-message">Google ai </td>
                                                    <td class="view-message">Improve the search presence of WebSite</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">june 16</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test3" />
                                                        <label for="test3"></label>
                                                    </td>
                                                    <td class="view-message">JW Player</td>
                                                    <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 15</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test4" />
                                                        <label for="test4"></label>
                                                    </td>
                                                    <td class="view-message">Tim Reid, S P N</td>
                                                    <td class="view-message">Boost Your Website Traffic</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">April 01</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test5" />
                                                        <label for="test5"></label>
                                                    </td>
                                                    <td class="view-message">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                                    <td class="view-message">Stop wasting your visitors </td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">May 23</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test6" />
                                                        <label for="test6"></label>
                                                    </td>
                                                    <td class="view-message">WOW Slider </td>
                                                    <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">March 14</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test7" />
                                                        <label for="test7"></label>
                                                    </td>
                                                    <td class="view-message">LinkedIn Pulse</td>
                                                    <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">Feb 19</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test8" />
                                                        <label for="test8"></label>
                                                    </td>
                                                    <td class="view-message">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                                    <td class="view-message view-message">Welcome to the Drupal Community</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 04</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test9" />
                                                        <label for="test9"></label>
                                                    </td>
                                                    <td class="view-message">Facebook</td>
                                                    <td class="view-message view-message">Somebody requested a new password </td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">June 13</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test10" />
                                                        <label for="test10"></label>
                                                    </td>
                                                    <td class="view-message">Skype <span class="label label-info pull-right">family</span></td>
                                                    <td class="view-message view-message">Password successfully changed</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test11" />
                                                        <label for="test12"></label>
                                                    </td>
                                                    <td class="view-message">Google+</td>
                                                    <td class="view-message">alireza, do you know</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 09</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test12" />
                                                        <label for="test13"></label>
                                                    </td>
                                                    <td class="view-message">Zoosk </td>
                                                    <td class="view-message">7 new singles we think you'll like</td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">May 14</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test13" />
                                                        <label for="test13"></label>
                                                    </td>
                                                    <td class="view-message">LinkedIn </td>
                                                    <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">jan 25</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test14" />
                                                        <label for="test14"></label>
                                                    </td>
                                                    <td>Facebook</td>
                                                    <td class="view-message view-message">Your account was recently logged into</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 14</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test15" />
                                                        <label for="test15"></label>
                                                    </td>
                                                    <td class="view-message">Twitter</td>
                                                    <td class="view-message">Your Twitter password has been changed</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">April 07</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test16" />
                                                        <label for="test16"></label>
                                                    </td>
                                                    <td class="view-message">InternetSeer Website Monitoring</td>
                                                    <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">July 14</td>
                                                </tr>
                                            </tbody>
                                        </table>
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