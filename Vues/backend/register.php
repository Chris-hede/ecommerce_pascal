<?php include('_header.php');?>

    <body class="sign-section">
        <div class="container sign-cont animated zoomIn">
            <div class="row sign-row">
                <div class="sign-title">
                    <h2 class="teal-text"><i class="fa fa-user-plus"></i> Create A New Account</h2>
                </div>
                <form class="col s12" id="reg-form">
                    <div class="row sign-row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate" required>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" required>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s12">
                            <input type="password" class="validate" required>
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s12">
                            <input type="password" class="validate" required>
                            <label>Confirm Password</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s6">
                            <div class="sign-confirm">
                                <input type="checkbox" id="sign-confirm" />
                                <label for="sign-confirm">confirm</label>
                            </div>
                        </div>
                        <div class="input-field col s6">
                            <button class="btn btn-large btn-register waves-effect waves-light teal" type="submit" name="action">Join Now
                                <i class="material-icons right">cloud_done</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <a title="Login" class="sign-btn btn-floating btn-large waves-effect waves-light teal">
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
    </body>
</body>
</html>