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
                            <i class="fa fa-window-restore"></i>
                        </div>
                        <div class="header-title">
                            <h1> Grid</h1>
                            <small> Grid System</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="grid.html">Grid</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Grid system material  -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Material Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <p class="m-b-5">The container class is not strictly part of the grid but is important in laying out content. It allows you to center your page content.The <code class=" language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span><span class="token punctuation">&gt;</span></span></code> tag with a <code class=" language-markup">container</code> class is set to ~70% of the window width. It helps you center and contain your page content. We use the container to contain our body content.To add a container just put your content inside a <code class=" language-markup">div</code> tag with a container class. Here's an example of how your page might be set up.</p>
                                        <div class="row">
                                            <div class="col s1 grid-example">1</div>
                                            <div class="col s1 grid-example">2</div>
                                            <div class="col s1 grid-example">3</div>
                                            <div class="col s1 grid-example">4</div>
                                            <div class="col s1 grid-example">5</div>
                                            <div class="col s1 grid-example">6</div>
                                            <div class="col s1 grid-example">7</div>
                                            <div class="col s1 grid-example">8</div>
                                            <div class="col s1 grid-example">9</div>
                                            <div class="col s1 grid-example">10</div>
                                            <div class="col s1 grid-example">11</div>
                                            <div class="col s1 grid-example">12</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 grid-example">This div is 12-columns wide</div>
                                            <div class="col s6 grid-example">This div is 6-columns wide</div>
                                            <div class="col s6 grid-example">This div is 6-columns wide</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 grid-example"><span class="flow-text">This div is 12-columns wide on all screen sizes</span></div>
                                            <div class="col s6 offset-s6 grid-example"><span class="flow-text">6-columns (offset-by-6)</span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 grid-example"><span class="flow-text">s12</span></div>
                                            <div class="col s12 m4 l2 grid-example"><span class="flow-text">s12 m4</span></div>
                                            <div class="col s12 m4 l8 grid-example"><span class="flow-text">s12 m4</span></div>
                                            <div class="col s12 m4 l2 grid-example"><span class="flow-text">s12 m4</span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Grid system material -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Grid options</h3>
                                        <p class="m-b-5">See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
                                                        <th> Small devices <small>Tablets (≥768px)</small> </th>
                                                        <th> Medium devices <small>Desktops (≥992px)</small> </th>
                                                        <th> Large devices <small>Desktops (≥1200px)</small> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Grid behavior</th>
                                                        <td>Horizontal at all times</td>
                                                        <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Container width</th>
                                                        <td>None (auto)</td>
                                                        <td>750px</td>
                                                        <td>970px</td>
                                                        <td>1170px</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Class prefix</th>
                                                        <td><code>.col-xs-</code></td>
                                                        <td><code>.col-sm-</code></td>
                                                        <td><code>.col-md-</code></td>
                                                        <td><code>.col-lg-</code></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row"># of columns</th>
                                                        <td colspan="4">12</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Column width</th>
                                                        <td class="text-muted">Auto</td>
                                                        <td>~62px</td>
                                                        <td>~81px</td>
                                                        <td>~97px</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Gutter width</th>
                                                        <td colspan="4">30px (15px on each side of a column)</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Nestable</th>
                                                        <td colspan="4">Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Offsets</th>
                                                        <td colspan="4">Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Column ordering</th>
                                                        <td colspan="4">Yes</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Stacked-to-horizontal</h3>
                                        <p class="m-b-5">Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-8">.col-md-8</div>
                                            <div class="col-md-4">.col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4">.col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-6">.col-md-6</div>
                                            <div class="col-md-6">.col-md-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Mobile and desktop</h3>
                                        <p class="m-b-5">Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6">.col-xs-6</div>
                                            <div class="col-xs-6">.col-xs-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Mobile, tablet, desktop</h3>
                                        <p class="m-b-5">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                            <div class="clearfix visible-xs-block"></div>
                                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Responsive column resets</h3>
                                        <p class="m-b-5">With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.
                                        </p>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
                                                <br> Resize your viewport or check it out on your phone for an example.
                                            </div>
                                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                            <div class="clearfix visible-xs-block"></div>
                                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0"> Offsetting columns</h3>
                                        <p class="m-b-5">Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code>over four columns.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Nesting columns</h3>
                                        <p class="m-b-5">To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).
                                        </p>
                                        <div class="row show-grid m-0">
                                            <div class="col-sm-9">
                                                Level 1: .col-sm-9
                                                <div class="row show-grid">
                                                    <div class="col-xs-8 col-sm-6"> Level 2: .col-xs-8 .col-sm-6 </div>
                                                    <div class="col-xs-4 col-sm-6"> Level 2: .col-xs-4 .col-sm-6 </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Column ordering</h3>
                                        <p class="m-b-5">Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
                                            <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
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
        <!-- Start Theme label Script-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script-->
    </body>
</html>