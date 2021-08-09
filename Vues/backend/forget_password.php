<?php include('_header.php'); ?>

<body class="sign-section">
    <div class="container sign-cont animated bounceIn">
        <div class="row sign-row">
            <div class="sign-title text-center">
                <h2 class="teal-text"><i class="fa fa-lock fa-4x"></i></h2>
                <h2 class="teal-text">Reset Password</h2>
            </div>
            <form class="col s12" id="reg-form">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" required>
                        <label for="email">Enter Your Email</label>
                    </div>
                </div>
                <div class="row pull-right">
                    <div class="input-field col s12">
                        <button class="btn btn-large btn-register waves-effect waves-light teal" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
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