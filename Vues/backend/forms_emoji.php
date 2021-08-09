<?php include('_header.php'); ?>
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
                            <i class="fa fa fa-frown-o"></i>
                        </div>
                        <div class="header-title">
                            <h1>Forms Emoji</h1>
                            <small class="hidden-xs">Supper simple emoji forms editor on bootstrap</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="forms_emoji.html">emoji forms</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Emoji forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-smile-o"></i>
                                        <h2>Emoji forms</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-6">
                                                <p>From:</p>
                                                <textarea id="demo1">
                                                Lorem ipsum dolor 😍 sit amet, consectetur 👻 adipiscing elit, 🖐 sed do eiusmod tempor ☔ incididunt ut labore et dolore magna aliqua 🐬.
                                                </textarea>
                                            </div>
                                            <div class="col-6">
                                                <p>To:</p>
                                                <div id="emj"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Emoji Forms -->
                            <!-- Emoji Forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-meh-o"></i>
                                        <h2> badge edit</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="forms-emj">
                                            <textarea id="hero-demo">example tags, sortable, autocomplete, edit in place, tab/cursor navigation, duplicate check, callbacks, copy-paste, placeholder, public methods, custom delimiter, graceful degradation</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./badge edit -->

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
        <!-- m-custom-scrollbar -->
        <script src="assets/assets2/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- mervick-emojionearea js -->
        <script src="assets/assets2/plugins/mervick-emojionearea/dist/emojionearea.min.js" type="text/javascript"></script>
        <!-- jQuery-tagEditor -->
        <script src="assets/assets2/plugins/jQuery-tagEditor/jquery.caret.min.js"></script>
        <script src="assets/assets2/plugins/jQuery-tagEditor/jquery.tag-editor.js"></script>
        <!-- metismenu-master -->
        <script src="assets/assets2/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
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
                //editable badge
                var cache = {};

                function googleSuggest(request, response) {
                    var term = request.term;
                    if (term in cache) {
                        response(cache[term]);
                        return;
                    }
                    $.ajax({
                        url: 'https://query.yahooapis.com/v1/public/yql',
                        dataType: 'JSONP',
                        data: {
                            format: 'json',
                            q: 'select * from xml where url="http://google.com/complete/search?output=toolbar&q=' + term + '"'
                        },
                        success: function (data) {
                            var suggestions = [];
                            try {
                                var results = data.query.results.toplevel.CompleteSuggestion;
                            } catch (e) {
                                var results = [];
                            }
                            $.each(results, function () {
                                try {
                                    var s = this.suggestion.data.toLowerCase();
                                    suggestions.push({
                                        label: s.replace(term, '<b>' + term + '</b>'),
                                        value: s
                                    });
                                } catch (e) {
                                }
                            });
                            cache[term] = suggestions;
                            response(suggestions);
                        }
                    });
                }
                $(function () {
                    //emoji
                    $("#demo1").emojioneArea({
                        container: "#emj",
                        hideSource: false,
                    });
                    $('#hero-demo').tagEditor({
                        placeholder: 'Enter tags ...',
                        autocomplete: {
                            source: googleSuggest,
                            minLength: 3,
                            delay: 250,
                            html: true,
                            position: {
                                collision: 'flip'
                            }
                        }
                    });
                    $('#demo3').tagEditor({
                        initialTags: ['Hello', 'World'],
                        placeholder: 'Enter tags ...'
                    });
                    $('#remove_all_tags').click(function () {
                        var tags = $('#demo3').tagEditor('getTags')[0].tags;
                        for (i = 0; i < tags.length; i++) {
                            $('#demo3').tagEditor('removeTag', tags[i]);
                        }
                    });


                });
            });
        </script>
    </body>

</html>