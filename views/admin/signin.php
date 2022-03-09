<div class="hold-transition login-page" style="background: #000;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-box-body container login-container">
            <div class="col-md-12 login-form-1">

                <form action="" method="post">
                    <div class="form-group has-feedback">
                        <div class="logo-img text-center" style="margin-bottom: 15px; width:100%"><img style="width:inherit" src="../img/header/logo.png" /></div>
                        <h2 class="login-box-msg" style="color: #fff;">Admin login</h2>
                        <div class="alert-danger"><?= $alert ?? '' ?></div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" name="user" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Go</button><br>
                    </div>
                    <!-- <a href="register" class="text-center"> Đăng ký </a> -->
                </form>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
</div>
<!-- /.login-box -->
<?= md5('123'); ?>