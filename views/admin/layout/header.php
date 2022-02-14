<div class="row" style="display: flex; justify-content: space-between; width:100%">
    <div class="col-sm-6">
        <a class="navbar-brand" href="#">Eyeonic Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="col-sm-6" style="display: flex; justify-content: flex-end; align-items: center">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- <div class="btn btn-success"><a href="">Compare</a></div> -->
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs showUserName">Hi: <?= $_SESSION['admin'] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="?request=signout" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>