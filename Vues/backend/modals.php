<?php include('_header.php'); ?>
        <div id="wrapper">
            <!--navbar top-->
            <?php include('_navbar.php') ;?>
            <!-- Sidebar -->
            <?php include('_sidebar.php'); ?>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-window-maximize"></i>
                        </div>
                        <div class="header-title">
                            <h1> Modals</h1>
                            <small>Modal examples</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="modals.html">Modals</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- ./Modals -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-maximize fa-lg"></i>
                                        <h2>Modals example</h2>
                                    </div>
                                    <div class="card-content">
                                        <a class="waves-effect waves-light btn m-b-10" href="#bounceIn" data-target="#bounceIn" data-toggle="modal">bounceIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#flash" data-target="#flash" data-toggle="modal">flash</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#pulse" data-target="#pulse" data-toggle="modal">pulse</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#shake" data-target="#shake" data-toggle="modal">shake</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#swing" data-target="#swing" data-toggle="modal">swing</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#tada" data-target="#tada" data-toggle="modal">tada</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#fadeIn" data-target="#fadeIn" data-toggle="modal">fadeIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#slideInLeft" data-target="#slideInLeft" data-toggle="modal">slideInLeft</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#slideInRight" data-target="#slideInRight" data-toggle="modal">slideInRight</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#rollIn" data-target="#rollIn" data-toggle="modal">rollIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#zoomIn" data-target="#zoomIn" data-toggle="modal">zoomIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#zoomInDown" data-target="#zoomInDown" data-toggle="modal">zoomInDown</a>

                                        <a class="waves-effect waves-light btn m-b-10" href="#rotateIn" data-target="#rotateIn" data-toggle="modal">rotateIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#flipInX" data-target="#flipInX" data-toggle="modal">flipInX</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#flipInY" data-target="#flipInY" data-toggle="modal">flipInY</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./MOdals -->

                            <!-- Animated Modals -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-maximize fa-lg"></i>
                                        <h2>Animated Modals example</h2>
                                    </div>
                                    <div class="card-content">
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-1 m-b-10">A simple modal</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-2 m-b-10">Need buttons?</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-3 m-b-10">Big content? No problem!</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-4 m-b-10">Stick to me!</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-5 m-b-10">Close with footer button only</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-6 m-b-10">?</button>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Animated Modals -->
                            <!-- ssi Modals -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-maximize fa-lg"></i>
                                        <h2> Basic Modals</h2>
                                    </div>
                                    <div class="card-content">
                                        <button id="modal" class="btn indigo darken-3 m-b-10">simple modal</button>
                                        <button id="modal1" class="btn indigo darken-3 m-b-10">Open modal</button>
                                        <button id="modal2" class="btn indigo darken-3 m-b-10">Confirm modal</button>
                                        <button id="modal2a" class="btn indigo darken-3 m-b-10">Open modal</button>
                                        <button id="modal3" class="btn indigo darken-3 m-b-10">Button modal</button>
                                        <button id="notify" class="btn indigo darken-3 m-b-10">Right top</button>
                                        <button id="notify2" class="btn indigo darken-3 m-b-10">Left top</button>
                                        <button id="notify3" class="btn indigo darken-3 m-b-10">Right bottom</button>
                                        <button id="notify4" class="btn indigo darken-3 m-b-10">Left bottom</button>
                                        <button id="notify5" class="btn indigo darken-3 m-b-10">Center top</button>
                                        <button id="notify6" class="btn indigo darken-3 m-b-10">Center bottom</button>
                                    </div>
                                </div>
                            </div>
                            <!-- ./ssi Modals -->
                            <!-- bounce -->
                            <div class="modal animated bounceIn" id="bounceIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- flash -->
                            <div class="modal animated flash" id="flash" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- flash -->
                            <div class="modal animated pulse modal-col-pink" id="pulse" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- shake -->
                            <div class="modal animated shake" id="shake" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- swing -->
                            <div class="modal animated swing" id="swing" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- tada -->
                            <div class="modal animated tada" id="tada" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- fadeIn -->
                            <div class="modal animated fadeIn" id="fadeIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- slideInRight -->
                            <div class="modal animated slideInRight" id="slideInRight" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- slideInLeft -->
                            <div class="modal animated slideInLeft" id="slideInLeft" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- zoomIn -->
                            <div class="modal animated zoomIn" id="zoomIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- zoomInDown -->
                            <div class="modal animated zoomInDown" id="zoomInDown" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- rollIn -->
                            <div class="modal animated rollIn" id="rollIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- rotateIn -->
                            <div class="modal animated rotateIn" id="rotateIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- flipInX -->
                            <div class="modal animated flipInX" id="flipInX" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- flipInY -->
                            <div class="modal animated flipInY" id="flipInY" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--animated Modals-->
                            <!-- Tingle tiny content -->
                            <div class="tingle-demo tingle-demo-tiny">
                                <h1>A small content</h1>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>
                            <!-- /Tingle tiny content -->

                            <!-- Tingle big content -->
                            <div class="tingle-demo tingle-demo-big">
                                <h1 class="plop">Big content with scroll</h1>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <img src="https://placehold.it/700x400" height="400" alt="">
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <img src="https://placehold.it/700x400" height="400" alt="">
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>

                            <!-- Tingle big content with sticky footer -->
                            <div class="tingle-demo tingle-demo-sticky">
                                <h1>Terms of use</h1>
                                <h2>Boring first article</h2>
                                <p>
                                    Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                </p>
                                <h2>Boring second article</h2>
                                <p>
                                    Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.
                                </p>
                                <h2>Boring third article</h2>
                                <p>
                                    Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                                </p>

                                <p>
                                    Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                </p>
                            </div>
                            <!-- Tingle tiny content -->
                            <div class="tingle-demo tingle-demo-force-close">
                                <h1>Forcing the user to use the close button</h1>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>
                            <!-- /Tingle tiny content -->

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
        <!-- tingle js -->
        <script src="assets/assets2/plugins/tingle/dist/tingle.js" type="text/javascript"></script>
        <!-- ssi-modal js -->
        <script src="assets/assets2/plugins/ssi-modal/ssi-modal.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/assets2/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        =====================================================================-->
        <!-- Start Theme label Script
            =====================================================================-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script-->
        <script>
             "use strict";
            function modelsuprise() {
                //Modal Tiny no footer
                var modalTinyNoFooter = new tingle.modal({
                    onClose: function () {
                        console.log('close');
                    },
                    onOpen: function () {
                        console.log('open');
                    },
                    beforeClose: function () {
                        console.log('before close');
                        return true;
                    },
                    cssClass: ['class1', 'class2']
                });
                var btn = document.querySelector('.js-tingle-modal-1');
                btn.addEventListener('click', function () {
                    modalTinyNoFooter.open();
                });
                modalTinyNoFooter.setContent(document.querySelector('.tingle-demo-tiny').innerHTML);

                //Modal tiny with btn

                var modalTinyBtn = new tingle.modal({
                    footer: true
                });
                var btn2 = document.querySelector('.js-tingle-modal-2');

                btn2.addEventListener('click', function () {
                    modalTinyBtn.open();
                });

                modalTinyBtn.setContent(document.querySelector('.tingle-demo-tiny').innerHTML);

                modalTinyBtn.addFooterBtn('Primary action', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function () {
                    alert('click on primary button!');
                });

                modalTinyBtn.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
                    modalTinyBtn.close();
                });

                modalTinyBtn.addFooterBtn('Danger!', 'tingle-btn tingle-btn--danger', function () {
                    alert('click on danger button!');
                });

                //Modal big

                var modalBigContent = new tingle.modal();
                var btn3 = document.querySelector('.js-tingle-modal-3');
                btn3.addEventListener('click', function () {
                    modalBigContent.open();
                });
                modalBigContent.setContent(document.querySelector('.tingle-demo-big').innerHTML);

                // Modal big with sticky footer

                var modalStickyFooter = new tingle.modal({
                    footer: true,
                    stickyFooter: true
                });
                var btn4 = document.querySelector('.js-tingle-modal-4');
                btn4.addEventListener('click', function () {
                    modalStickyFooter.open();
                });

                modalStickyFooter.addFooterBtn('I agree', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function () {
                    modalStickyFooter.close();
                });

                modalStickyFooter.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
                    modalStickyFooter.close();
                });

                modalStickyFooter.setContent(document.querySelector('.tingle-demo-sticky').innerHTML);

                //Force close button

                var modalButtonOnly = new tingle.modal({
                    closeMethods: [],
                    footer: true,
                    stickyFooter: true
                });
                var btn5 = document.querySelector('.js-tingle-modal-5');
                btn5.addEventListener('click', function () {
                    modalButtonOnly.open();
                });
                modalButtonOnly.setContent(document.querySelector('.tingle-demo-force-close').innerHTML);

                modalButtonOnly.addFooterBtn('I agree', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function () {
                    modalButtonOnly.close();
                });

                modalButtonOnly.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
                    modalButtonOnly.close();
                });

                //Modal suprise

                var btn6 = document.querySelector('.js-tingle-modal-6');
                btn6.addEventListener('click', function () {
                    var modalSurprise = new tingle.modal({
                        onClose: function () {
                            modalSurprise.destroy();
                        }
                    });
                    modalSurprise.setContent('<iframe width="100%" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allowfullscreen></iframe>');
                    modalSurprise.open();
                });
            }
            modelsuprise();
            //basic model
            function main() {
                var $body = $('body');
                $('#modal').click(function () {
                    ssi_modal.show({
                        content: 'Hello World'
                    });
                });
                $('#modal1').click(function () {
                    ssi_modal.show({
                        content: 'Hello World',
                        sizeClass: 'small',
                        title: 'Featured modal',
                        animation: true
                    });
                });
                $('#modal2').click(function () {
                    ssi_modal.confirm({
                        content: 'Are you sure you want to exit?',
                        okBtn: {
                            className: 'btn btn-primary'
                        },
                        cancelBtn: {
                            className: 'btn btn-danger'
                        }
                    }, function (result) {
                        if (result)
                            ssi_modal.notify('success', {
                                content: 'Result: ' + result
                            });
                        else
                            ssi_modal.notify('error', {
                                content: 'Result: ' + result
                            });
                    });
                });
                $('#modal2a').click(function () {
                    ssi_modal.dialog({
                        content: 'Hello World',
                        okBtn: {
                            className: 'btn btn-primary'
                        }
                    });
                });
                $('#modal3').click(function () {
                    ssi_modal.show({
                        content: 'Hello World',
                        title: 'Modal with buttons',
                        buttons: [{
                                className: 'btn btn-primary',
                                label: 'Ok',
                                enableAfter: 3,
                                keyPress: 39,
                                closeAfter: false,
                                method: function () {
                                    ssi_modal.notify('info', {
                                        content: 'Ok'
                                    })
                                }
                            }, {
                                className: 'btn btn-danger',
                                label: 'Cancel',
                                closeAfter: true,
                                focused: true,
                                method: function () {
                                    ssi_modal.notify('error', {
                                        content: 'Cancel'
                                    })
                                }
                            }]
                    });

                });

                $body.on('click.example', '#modal6b', function () {

                    ssi_modal.show({
                        content: '<button id="modal6c" class="btn btn-primary">Open modal</butto>',
                        sizeClass: 'small',
                        title: 'Second modal',
                        onClose: function () {
                            ssi_modal.notify('warning', {
                                content: 'Second closed'
                            })
                        }
                    });
                });

                $body.on('click.example', '#modal6c', function () {
                    ssi_modal.show({
                        content: '<a href="images/3b5dd04be82af929dd3070cb089bcf03.jpg" title="My landscape" class="ssi-imgBox"><img src="images/3b5dd04be82af929dd3070cb089bcf03.jpg" style="width:50px;height:50px"/></a>',
                        sizeClass: 'dialog',
                        title: 'Third modal',
                        onClose: function () {
                            ssi_modal.notify('info', {
                                content: 'Third closed'
                            })
                        }
                    });
                });

                var modalContent = 'Start</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>End';

                $body.on('click', '#modal5b', function (e) {});
                var modalOptions = {
                    animation: true,
                    sizeClass: 'dialog'
                };

                $body.on('click.example', '#modal10a', function () {
                    modalOptions.content = '<button id="modal10b" class="btn btn-primary">Center bottom</button>';
                    modalOptions.title = modalOptions.position = 'left top';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10b', function () {
                    modalOptions.content = '<button id="modal10c" class="btn btn-primary">Left bottom</button>';
                    modalOptions.title = modalOptions.position = 'center bottom';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10c', function () {
                    modalOptions.content = '<button id="modal10d" class="btn btn-primary">Right bottom</button>';
                    modalOptions.title = modalOptions.position = 'left bottom';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10d', function () {
                    modalOptions.content = '<button id="modal10e" class="btn btn-primary">Center top</button>';
                    modalOptions.title = modalOptions.position = 'right bottom';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10e', function () {
                    modalOptions.content = 'The end!!<br><br><button id="modal10f" class="btn btn-primary">Remove all</button>';
                    modalOptions.title = modalOptions.position = 'center top';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10f', function () {
                    ssi_modal.removeAll();
                })

                $body.on('click.example', '#modal10', function () {

                    ssi_modal.show({
                        title: 'stackModal left top',
                        position: 'left top',
                        content: '<button id="modal11a" class="btn btn-primary">Open modal</button>',
                        backdrop: false,
                        stack: true
                    })
                });
                $body.on('click.example', '#modal11a', function () {
                    ssi_modal.show({
                        title: 'stackModal right top',
                        position: 'right top',
                        content: '<button id="modal11" class="btn btn-primary">Open modal</button>',
                        backdrop: false,
                        stack: true
                    })
                });

                //====== right top ======

                $('#notify').click(function () {
                    ssi_modal.notify('success', {
                        content: 'You have successfully upload the file!',
                        modalAnimation: {
                            'show': 'animated fadeInRight mediumSpeed',
                            'hide': 'animated  fadeOutRight mediumSpeed'
                        }
                    });
                });
                //====== left top ======

                $('#notify2').click(function () {
                    ssi_modal.notify('error', {
                        position: 'left top',
                        backdrop: 'shared',
                        outSideClose: true,
                        content: 'An error occurred.',
                        buttons: [{
                                label: 'Shared backdrop',
                                className: 'btn btn-default btn-xs',
                                method: function () {
                                    ssi_modal.notify('info', {
                                        content: 'hi',
                                        outSideClose: true,
                                        backdrop: 'shared'
                                    })
                                }
                            }, {
                                label: 'Without backdrop',
                                className: 'btn btn-default btn-xs',
                                method: function () {
                                    ssi_modal.notify('warning', {
                                        content: 'hi'
                                    })
                                }
                            }]
                    })
                });
                //====== left bottom ======
                $("#notify3").click(function () {
                    ssi_modal.notify('info', {
                        position: 'right bottom',
                        content: 'Hello there'
                    })
                });
                $('#notify4').click(function () {
                    ssi_modal.notify('warning', {
                        position: 'left bottom',
                        content: 'You have to register first to see the content!'
                    })
                });
                //====== center top ======

                $('#notify5').click(function () {
                    ssi_modal.notify('dialog', {
                        sizeClass: 'medium',
                        okBtn: {
                            className: 'btn btn-primary'
                        },
                        position: 'center top',
                        content: 'This site uses cookies to provide better services!'
                    }, function () {})
                });
                //====== center bottom ======

                $('#notify6').click(function () {
                    ssi_modal.notify('confirm', {
                        closeIcon: true,
                        okBtn: {
                            className: 'btn btn-primary'
                        },
                        cancelBtn: {
                            className: 'btn btn-danger'
                        },
                        position: 'center bottom',
                        content: 'Are you sure you want to exit?'
                    }, function (result) {
                        if (result) {
                            ssi_modal.notify('success', {
                                content: 'Result: ' + result
                            })
                        } else {
                            ssi_modal.notify('error', {
                                content: 'Result: ' + result
                            })
                        }
                    })
                });
                //====== custom full ======

                $('#notify7').click(function () {
                    ssi_modal.notify('custom', {
                        sizeClass: 'full',
                        icon: 'fa fa-glass',
                        position: 'center top',
                        content: 'This is a custom notification message!'
                    })
                });

                ssi_modal.imgBox({
                    title: true,
                    animation: true,
                    center: true,
                    iframe: {
                        className: 'idd'
                    }
                }, 'landscapes');
                ssi_modal.imgBox({
                    className: 'aaa',
                    title: false,
                    backdropAnimation: true,
                    modalAnimation: {
                        'show': 'animated  rotateInDownLeft',
                        hide: 'animated  rotateOutDownLeft'
                    }
                }, 'bands');
            }

            main();
        </script>
    </body>

</html>