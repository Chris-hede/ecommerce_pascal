<?php include('_header.php');?>

<body class="sign-section">
    <div class="container sign-cont animated zoomIn">
        <div class="row sign-row">
            <div class="sign-title">
                <h2 class="teal-text"><i class="fa fa-user-circle-o"></i></h2>
                <h2 class="teal-text">Login</h2>
            </div>
            <form class="col s12" id="reg-form">
                <div class="row sign-row">
                    <div class="input-field col s12">
                        <input id="u_name" type="text" class="validate" required>
                        <label for="u_name">User Name</label>
                    </div>
                </div>
                <div class="row sign-row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row sign-row">
                    <div class="input-field col s12 m-b-30">
                        <label class="pull-left"><a class='pink-text' href='#!'><b>Forgot Password?</b></a></label>
                    </div>
                </div>
                <div class="row sign-row">
                    <div class="input-field col s6">
                        <div class="sign-confirm">
                            <input type="checkbox" id="sign-confirm" />
                            <label for="sign-confirm">Remember me!</label>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <button class="btn btn-large btn-register waves-effect waves-light green" type="submit" name="action">Login
                            <i class="material-icons right">done_all</i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <a title="Login" class="sign-btn btn-floating btn-large waves-effect waves-light green">
            <i class="material-icons">perm_identity</i></a>
    </div>

    <!-- Start Core Plugins
         =====================================================================-->
    <!-- jQuery -->
    <script src="assets/assets2/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- materialize  -->
    <script src="assets/assets2/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
    <!-- End Core Plugins
         =====================================================================-->
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
</body>
    </body>

</html>