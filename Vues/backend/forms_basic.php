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
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> Basic Forms</h1>
                            <small> Basic forms styles</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="forms_basic.html">forms basic</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- basic forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-file-text-o fa-lg"></i>
                                        <h2>Basic Forms</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <form class="col s12 m-t-20">
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="tel" class="validate">
                                                    <label for="icon_prefix">First Name</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input type="tel" class="validate">
                                                    <label>Last Name</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">email</i>
                                                    <input type="tel" class="validate">
                                                    <label>Email</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input type="password" class="validate">
                                                    <label>Password</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="icon_telephone" type="tel" class="validate">
                                                    <label for="icon_telephone">Telephone</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">textsms</i>
                                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                                    <label for="autocomplete-input">Autocomplete</label>
                                                </div>
                                                <div class="input-field form-input form-input-select col s6">
                                                    <i></i>
                                                    <select class="icons">
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="" data-icon="assets/assets2/dist/img/avatar.png" class="left circle">example 1</option>
                                                        <option value="" data-icon="assets/assets2/dist/img/avatar2.png" class="left circle">example 2</option>
                                                        <option value="" data-icon="assets/assets2/dist/img/avatar3.png" class="left circle">example 3</option>
                                                    </select>
                                                    <label>Images in select</label>
                                                </div>
                                                <div class="input-field form-input form-input-select col s6">
                                                    <select class="icons">
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                    </select>
                                                    <label>Materialize Select</label>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ./basic forms -->

                            <!-- forms cntrol -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-file-o fa-lg"></i>
                                        <h2>Bootstrap Froms</h2>
                                    </div>
                                    <div class="card-content">
                                        <form class="form-horizontal" method="post">
                                            <h2 class="text-center">Basic forms Example</h2>
                                            <fieldset>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">First Name:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="first_name" type="text" class="validate" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Last Name:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="Last_name" type="text" class="validate" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">E-Mail:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="mail" type="text" class="validate" placeholder="Enter mail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Password:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="password" type="password" class="validate" placeholder="Enter Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Mobile No:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="Mobile" type="text" class="validate" placeholder="(757)555-1456">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">City:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="city" type="text" class="validate" placeholder="Enter City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Postal Code:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="post__code" type="text" class="validate" placeholder="Post code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Address:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <textarea id="icon_prefix2" class="materialize-textarea" placeholder="Address"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="input-group">
                                                            <input name="group1" type="radio" id="test1" />
                                                            <label for="test1">Radio</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="input-group">
                                                            <input class="with-gap" name="group3" type="radio" id="test5" checked />
                                                            <label for="test5">options</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="input-group">
                                                            <input type="checkbox" id="test2" />
                                                            <label for="test2">checkbox</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="switch">
                                                            <label>
                                                                Off
                                                                <input type="checkbox">
                                                                <span class="lever"></span> On
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-5 col-md-offset-3">
                                                        <input class="datepicker" type="text" placeholder="DatePicker">
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
                                                        <button type="submit" class="btn btn-success">Submit <span class="glyphicon glyphicon-send"></span></button>
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./bootstrap forms -->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>
            <!-- ./page-content -->
        </div>
        <!-- ./page-content-wrapper -->

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
        <script>
            "use strict";
            $(function () {
                $('select').material_select();
                Materialize.updateTextFields();
                // autocomplete
                $('input.autocomplete').autocomplete({
                    data: {
                        "Apple": null,
                        "Microsoft": null,
                        "Google": 'https://placehold.it/250x250'
                    },
                    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                    onAutocomplete: function (val) {
                        // Callback function when value is autcompleted.
                    },
                    minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
                });

                //datepicker
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                });
            });
        </script>

    </body>

</html>