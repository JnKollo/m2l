<?php $this->classBody = "class= 'hold-transition login-page'" ?>
<?php $this->title = "Connexion" ?>

<div class="login-box">
    <div class="login-logo">
        <b>M2L</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Veuillez rentrer vos indentifiants</p>

        <form action=<?php ROOTDIR ?>"/m2l/index.php?controller=main&action=index" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Identifiant" name="login">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Mot de passe" name="password">
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