<!DOCTYPE html>

<html>

<?php include("file:///C:/wamp/www/AdminLTE-master/custom/include/head.php"); ?>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="home.php"><b>M2L</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Veuillez rentrer vos indentifiants</p>

                <form action="../../index2.html" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-xs-4 col-xs-offset-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <?php include("file:///C:/wamp/www/AdminLTE-master/custom/include/required-script.php"); ?>

    </body>

    </html>