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
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <div class="header-title">
                            <h1> Buttons</h1>
                            <small> Buttons details and use</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- fixed action button -->
                            <div class="fixed-action-btn">
                                <a class="btn-floating btn-large red">
                                    <i class="large material-icons">mode_edit</i>
                                </a>
                                <ul>
                                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                                </ul>
                            </div>
                            <!-- ./fixed action button -->
                            <!-- Materialize  Buttons-->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Materialize Buttons</h2>
                                    </div>
                                    <div class="card-content" id="color-button">
                                        <!--Materialize Buttons -->
                                        <a class="waves-effect waves-light btn red ">red</a>
                                        <a class="waves-effect waves-light btn red accent-3">red</a>
                                        <a class="waves-effect waves-light btn pink lighten-1">light pink</a>
                                        <a class="waves-effect waves-light btn pink darken-4">dark pink</a>
                                        <a class="waves-effect waves-light btn purple darken-2">dark purple</a>
                                        <a class="waves-effect waves-light btn purple accent-4">light purple</a>
                                        <a class="waves-effect waves-light btn blue darken-4">dark blue</a>
                                        <a class="waves-effect waves-light btn indigo">Indigo</a>
                                        <a class="waves-effect waves-light btn light-blue accent-3">light blue</a>
                                        <a class="waves-effect waves-light btn teal accent-3">teal</a>
                                        <a class="waves-effect waves-light btn green">green</a>
                                        <a class="waves-effect waves-light btn amber darken-4">amber</a>
                                        <a class="waves-effect waves-light btn orange darken-4">dark orange</a>
                                        <a class="waves-effect waves-light btn deep-orange accent-3">dark orange</a>
                                        <a class="waves-effect waves-light btn black">black</a>
                                        <a class="waves-effect waves-light btn blue-grey lighten-2">light blue</a>
                                        <a class="waves-effect waves-light btn green"><i class="material-icons left">check_circle</i>check</a>
                                        <a class="waves-effect waves-light btn orange darken-4"><i class="material-icons left">description</i>orange</a>
                                        <a class="waves-effect waves-light btn purple accent-4"><i class="material-icons left">search</i>search</a>
                                        <a class="waves-effect waves-light btn red"><i class="material-icons left">warning</i>warning</a>
                                        <a class="waves-effect waves-light btn blue"><i class="material-icons left">settings</i>settings</a>
                                        <a class="waves-effect waves-light btn teal"><i class="material-icons left">send</i>submit</a>
                                        <a class="waves-effect waves-light btn blue-grey"><i class="material-icons right">cloud_download</i>download</a>
                                        <a class="waves-effect waves-light btn red"><i class="material-icons left">subscriptions</i>subscribe</a>
                                        <a class="waves-effect waves-light btn pink darken-1"><i class="material-icons right">backup</i>backup</a>
                                        <a class="waves-effect waves-light btn purple darken-3"><i class="material-icons right">home</i>home</a>
                                        <a class="waves-effect waves-light btn blue darken-2"><i class="material-icons right">settings</i>settings</a>
                                        <a class="waves-effect waves-light btn teal"><i class="material-icons right">play_circle_filled</i>play</a>
                                        <a class="waves-effect waves-light btn  cyan darken-1"><i class="material-icons right">location_on</i>location</a>
                                        <a class="waves-effect waves-light btn light-blue darken-2"><i class="material-icons right">mail</i>mail</a>
                                    </div>
                                </div>
                            </div>
                            <!--./Materialize Buttons -->
                            <!--./Disabled Buttons -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Disabled Buttons</h2>
                                    </div>
                                    <div class="card-content">
                                        <a class="btn-large disabled m-r-5 m-b-20">Button</a>
                                        <a class="btn disabled m-r-5 m-b-20">Button</a>
                                        <a class="btn-flat disabled m-r-5 m-b-20">Button</a>
                                        <a class="btn-floating disabled m-r-5 m-b-20"><i class="material-icons">add</i></a>
                                        <a class="btn-large btn-floating disabled m-r-5"><i class="material-icons">add</i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Disabled Buttons -->
                            <!-- ./Floting Buttons -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Floting Buttons</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Floting Button -->
                                        <a class="btn-floating btn-large waves-effect waves-light red m-b-20"><i class="material-icons">add</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light teal m-b-20"><i class="material-icons">navigation</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light indigo m-b-20"><i class="material-icons">directions</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light red darken-2 m-b-20"><i class="material-icons">security</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light blue-grey m-b-20"><i class="material-icons">file_download</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light purple darken-2 m-b-20"><i class="material-icons">attachment</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light purple m-b-20"><i class="material-icons">insert_comment</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light pink darken-2 m-b-20"><i class="material-icons">send</i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Floting Button -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Dropdown Buttons</h2>
                                    </div>
                                    <div class="card-content" id="dropdown-btn">
                                        <!-- Dropdown Trigger -->
                                        <a class='dropdown-button btn m-r-5' href='#' data-activates='dropdown1'><i class="material-icons right">arrow_drop_down</i>Jhon Deo</a>
                                        <!-- Dropdown Structure -->
                                        <ul id='dropdown1' class='dropdown-content'>
                                            <li><a href="#!"><i class="material-icons left">settings</i>Settings</a></li>
                                            <li><a href="#!"><i class="material-icons left">person</i>Profile</a></li>
                                            <li><a href="#!"><i class="material-icons left">subdirectory_arrow_left</i>Logout</a></li>
                                        </ul>
                                        <!-- Dropdown2 -->
                                        <a class='dropdown-button btn red m-r-5' href='#' data-activates='dropdown2'><i class="material-icons right">arrow_drop_down</i>Jhon Deo</a>
                                        <ul id='dropdown2' class='dropdown-content'>
                                            <li><a href="#!"><i class="material-icons left">settings</i>Settings</a></li>
                                            <li><a href="#!"><i class="material-icons left">person</i>Profile</a></li>
                                            <li><a href="#!"><i class="material-icons left">subdirectory_arrow_left</i>Logout</a></li>
                                        </ul>
                                        <!-- ./Dropdown2 -->
                                        <!-- Dropdown3 -->
                                        <a class='dropdown-button btn pink m-r-5' href='#' data-activates='dropdown3'><i class="material-icons right">arrow_drop_down</i>Jhon Deo</a>
                                        <ul id='dropdown3' class='dropdown-content'>
                                            <li><a href="#!"><i class="material-icons left">settings</i>Settings</a></li>
                                            <li><a href="#!"><i class="material-icons left">person</i>Profile</a></li>
                                            <li><a href="#!"><i class="material-icons left">subdirectory_arrow_left</i>Logout</a></li>
                                        </ul>
                                        <!-- ./Dropdown3 -->
                                        <!-- Dropdown4 -->
                                        <a class='dropdown-button btn purple m-r-5' href='#' data-activates='dropdown4'><i class="material-icons right">arrow_drop_down</i>Jhon Deo</a>
                                        <ul id='dropdown4' class='dropdown-content'>
                                            <li><a href="#!"><i class="material-icons left">settings</i>Settings</a></li>
                                            <li><a href="#!"><i class="material-icons left">person</i>Profile</a></li>
                                            <li><a href="#!"><i class="material-icons left">subdirectory_arrow_left</i>Logout</a></li>
                                        </ul>
                                        <!-- ./Dropdown4 -->
                                        <!-- Dropdown5 -->
                                        <a class='dropdown-button btn indigo m-r-5' href='#' data-activates='dropdown5'><i class="material-icons right">arrow_drop_down</i>Jhon Deo</a>
                                        <ul id='dropdown5' class='dropdown-content'>
                                            <li><a href="#!"><i class="material-icons left">settings</i>Settings</a></li>
                                            <li><a href="#!"><i class="material-icons left">person</i>Profile</a></li>
                                            <li><a href="#!"><i class="material-icons left">subdirectory_arrow_left</i>Logout</a></li>
                                        </ul>
                                        <!-- ./Dropdown5 -->
                                        <!-- Dropdown6 -->
                                        <a class='dropdown-button btn light-blue m-r-5' href='#' data-activates='dropdown6'><i class="material-icons right">arrow_drop_down</i>Jhon Deo</a>
                                        <ul id='dropdown6' class='dropdown-content'>
                                            <li><a href="#!"><i class="material-icons left">settings</i>Settings</a></li>
                                            <li><a href="#!"><i class="material-icons left">person</i>Profile</a></li>
                                            <li><a href="#!"><i class="material-icons left">subdirectory_arrow_left</i>Logout</a></li>
                                        </ul>
                                        <!-- ./Dropdown6 -->
                                        <!-- Dropdown7 -->
                                        <a class='dropdown-button btn blue-grey m-r-5' href='#' data-activates='dropdown7'><i class="material-icons right">arrow_drop_down</i>Jhon Deo</a>
                                        <ul id='dropdown7' class='dropdown-content'>
                                            <li><a href="#!"><i class="material-icons left">settings</i>Settings</a></li>
                                            <li><a href="#!"><i class="material-icons left">person</i>Profile</a></li>
                                            <li><a href="#!"><i class="material-icons left">subdirectory_arrow_left</i>Logout</a></li>
                                        </ul>
                                        <!-- ./Dropdown7 -->
                                    </div>
                                </div>
                            </div>
                            <!-- Bootstrap buttons -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Bootstrap Buttons</h2>
                                    </div>
                                    <div class="card-content" id="bootstrap-butn">
                                        <button type="button" class="btn btn-default w-md">Default</button>
                                        <button type="button" class="btn btn-primary w-md">Primary</button>
                                        <button type="button" class="btn btn-success w-md">Success</button>
                                        <button type="button" class="btn btn-info w-md">Info</button>
                                        <button type="button" class="btn btn-warning w-md">Warning</button>
                                        <button type="button" class="btn btn-danger w-md">Danger</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Bootstrap buttons -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Transparent Buttons</h2>
                                    </div>
                                    <div class="card-content" id="transparent-btn">
                                        <button type="button" class="btn btn-default btn-transparent w-md">Default</button>
                                        <button type="button" class="btn btn-primary  btn-transparent w-md">Primary</button>
                                        <button type="button" class="btn btn-success btn-transparent w-md">Success</button>
                                        <button type="button" class="btn btn-info btn-transparent w-md">Info</button>
                                        <button type="button" class="btn btn-warning btn-transparent w-md">Warning</button>
                                        <button type="button" class="btn btn-danger btn-transparent w-md">Danger</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Bootstrap Block buttons -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Bootstrap Block Buttons</h2>
                                    </div>
                                    <div class="card-content" id="bootstrap-block-butn">
                                        <button type="button" class="btn btn-default btn-block w-md">Default</button>
                                        <button type="button" class="btn btn-primary btn-block w-md">Primary</button>
                                        <button type="button" class="btn btn-success btn-block w-md">Success</button>
                                        <button type="button" class="btn btn-info btn-block w-md">Info</button>
                                        <button type="button" class="btn btn-warning btn-block w-md">Warning</button>
                                        <button type="button" class="btn btn-danger btn-block w-md">Danger</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Label buttons -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Labeled-Buttons</h2>
                                    </div>
                                    <div class="card-content" id="label-btn">
                                        <button type="button" class="btn btn-labeled btn-success">
                                            <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Success
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-danger">
                                            <span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Cancel
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-warning">
                                            <span class="btn-label"><i class="glyphicon glyphicon-bookmark"></i></span>Bookmark
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-primary">
                                            <span class="btn-label"><i class="glyphicon glyphicon-camera"></i></span>Camera
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-pink">
                                            <span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Left
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-pink">
                                            <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>Right
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse cyan darken-2">
                                            <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Thumbs Up
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse deep-purple darken-3">
                                            <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>cart
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse teal darken-2">
                                            <span class="btn-label"><i class="glyphicon glyphicon-tasks"></i></span>task
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse blue accent-3">
                                            <span class="btn-label"><i class="glyphicon glyphicon-paperclip"></i></span>Attach
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse indigo darken-2">
                                            <span class="btn-label"><i class="glyphicon glyphicon-fullscreen"></i></span>zoom
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse pink darken-2">
                                            <span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>Add
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse purple darken-2">
                                            <span class="btn-label"><i class="glyphicon glyphicon-envelope"></i></span>Mailbox
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse purple accent-4">
                                            <span class="btn-label"><i class="glyphicon glyphicon-question-sign"></i></span>help
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-inverse purple darken-4">
                                            <span class="btn-label"><i class="glyphicon glyphicon-ban-circle"></i></span>Error
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-purple blue darken-2">
                                            <span class="btn-label"><i class="glyphicon glyphicon-thumbs-down"></i></span>Thumbs Down
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-info pink darken-4">
                                            <span class="btn-label"><i class="glyphicon glyphicon-refresh"></i></span>Refresh
                                        </button>
                                        <button type="button" class="btn btn-labeled btn-danger pink">
                                            <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>Trash
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Label buttons -->
                            <!-- circle buttons -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>circle-Buttons</h2>
                                    </div>
                                    <div class="card-content" id="circle-btn">
                                        <button type="button" class="btn btn-default btn-circle m-r-5"><i class="glyphicon glyphicon-ok"></i></button>
                                        <button type="button" class="btn btn-primary btn-circle m-r-5"><i class="glyphicon glyphicon-list"></i></button>
                                        <button type="button" class="btn btn-success btn-circle m-r-5"><i class="glyphicon glyphicon-link"></i></button>
                                        <button type="button" class="btn btn-info btn-circle m-r-5"><i class="glyphicon glyphicon-ok"></i></button>
                                        <button type="button" class="btn btn-warning btn-circle m-r-5"><i class="glyphicon glyphicon-remove"></i>
                                        </button>
                                        <button type="button" class="btn green btn-circle m-r-5"><i class="glyphicon glyphicon-ok"></i></button>
                                        <button type="button" class="btn purple btn-primary btn-circle m-r-5"><i class="glyphicon glyphicon-list"></i></button>
                                        <button type="button" class="btn indigo btn-circle m-r-5"><i class="glyphicon glyphicon-link"></i></button>
                                        <button type="button" class="btn blue-grey btn-circle m-r-5"><i class="glyphicon glyphicon-ok"></i></button>
                                        <button type="button" class="btn deep-orange btn-circle m-r-5"><i class="glyphicon glyphicon-remove"></i></button>
                                        <button type="button" class="btn yellow btn-circle m-r-5"><i class="glyphicon glyphicon-ok"></i></button>
                                        <button type="button" class="btn blue btn-circle m-r-5"><i class="glyphicon glyphicon-list"></i></button>
                                        <a class="btn icon-btn btn-default m-r-5" href="#"><span class="glyphicon btn-glyphicon glyphicon-save img-circle text-muted"></span>Download</a>
                                        <a class="btn icon-btn btn-muted m-r-5" href="#"><span class="glyphicon btn-glyphicon glyphicon-remove-circle img-circle text-muted"></span>Unavailable</a>
                                        <a class="btn icon-btn btn-primary m-r-5" href="#"><span class="glyphicon btn-glyphicon glyphicon-thumbs-up img-circle text-primary"></span>Like</a>
                                        <a class="btn icon-btn btn-success m-r-5" href="#"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Add</a>
                                        <a class="btn icon-btn btn-info m-r-5" href="#"><span class="glyphicon btn-glyphicon glyphicon-share img-circle text-info"></span>Share</a>
                                        <a class="btn icon-btn btn-warning m-r-5" href="#"><span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Remove</a>
                                        <a class="btn icon-btn btn-danger m-r-5" href="#"><span class="glyphicon btn-glyphicon glyphicon-trash img-circle text-danger"></span>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <!-- social buttons -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-toggle-on fa-lg"></i>
                                        <h2>Social Buttons</h2>
                                    </div>
                                    <div class="card-content" id="social-butn">
                                        <a href="http://facebook.com" class="btn btn-social-icon btn-facebook z-depth-2 m-r-5">
                                            <i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-bitbucket z-depth-2 m-r-5"><i class="fa fa-bitbucket"></i></a>
                                        <a class="btn btn-social-icon btn-dropbox z-depth-2 m-r-5"><i class="fa fa-dropbox"></i></a>
                                        <a class="btn btn-social-icon btn-flickr z-depth-2 m-r-5"><i class="fa fa-flickr"></i></a>
                                        <a class="btn btn-social-icon btn-foursquare z-depth-2 m-r-5"><i class="fa fa-foursquare"></i></a>
                                        <a class="btn btn-social-icon btn-github z-depth-2 m-r-5"><i class="fa fa-github"></i></a>
                                        <a class="btn btn-social-icon btn-google-plus z-depth-2 m-r-5"><i class="fa fa-google-plus"></i></a>
                                        <a class="btn btn-social-icon btn-instagram z-depth-2 m-r-5"><i class="fa fa-instagram"></i></a>
                                        <a class="btn btn-social-icon btn-linkedin z-depth-2 m-r-5"><i class="fa fa-linkedin"></i></a>
                                        <a class="btn btn-social-icon btn-tumblr z-depth-2 m-r-5"><i class="fa fa-tumblr"></i></a>
                                        <a class="btn btn-social-icon btn-twitter z-depth-2 m-r-5"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-vk z-depth-2 m-r-5"><i class="fa fa-vk"></i></a>
                                        <br>
                                        <br>
                                        <ul class="social-network social-circle">
                                            <li><a href="#" class="icoRss m-r-5 m-b-10" title="Rss"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#" class="icoFacebook m-r-5 m-b-10" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="icoTwitter m-r-5 m-b-10" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="icoGoogle m-r-5 m-b-10" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" class="icoLinkedin m-r-5" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
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
        <!-- Start Core Plugins -->

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
        <!-- End Core Plugins -->
        <!-- Start Theme label Script -->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script -->
    </body>
</html>