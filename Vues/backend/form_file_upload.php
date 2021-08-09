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
                            <i class="fa fa-file-text-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> File upload</h1>
                            <small class="hidden-xs">DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="forms_editor_summernote.html">File upload</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Summernote -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-file-text"></i>
                                        <h2>File Upload</h2>
                                    </div>
                                    <div class="card-content">
                                        <p class="m-b-15"><strong>Dropzone.js</strong> is a light weight JavaScript library that turns an HTML element into a dropzone. This means that a user can drag and drop a file onto it, and the file gets uploaded to the server via AJAX.</p>
                                        <form action="#" class="dropzone" id="dropzoneForm">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="panel-footer">
                                        <p class="m-0">All avalible options and full documentation you can find: <a target="_blank" href="http://www.dropzonejs.com/#configuration-options">http://www.dropzonejs.com/#configuration-options</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Summernote -->

                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./page header -->
            </div>
            <!-- ./cotainer -->
        </div>
        <!-- ./page-content -->
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
        -
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
        <!-- Dropzone js -->
        <script src="assets/assets2/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>

        <!-- End Core Plugins-->
        <!-- Start Theme label Script-->

        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script-->
        -
        <script>
            $(function () {
                "use strict"; // Start of use strict
                Dropzone.options.dropzoneForm = {
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 2, // MB
                    dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
                };
            });
        </script>

    </body>

</html>