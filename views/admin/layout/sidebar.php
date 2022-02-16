<style>
    html {
        position: relative;
        min-height: 100%;
    }

    body {
        padding-top: 4.5rem;
        margin-bottom: 4.5rem;
    }

    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 3.5rem;
        line-height: 3.5rem;
        background-color: #ccc;
    }

    .nav-link:hover {
        transition: all 0.4s;
    }

    .nav-link-collapse:after {
        float: right;
        content: '\f067';
        font-family: 'FontAwesome';
    }

    .nav-link-show:after {
        float: right;
        content: '\f068';
        font-family: 'FontAwesome';
    }

    .nav-item ul.nav-second-level {
        padding-left: 0;
    }

    .nav-item ul.nav-second-level>.nav-item {
        padding-left: 20px;
    }

    @media (min-width: 992px) {
        .sidenav {
            position: absolute;
            top: 0;
            left: 0;
            width: 230px;
            height: calc(100vh - 3.5rem);
            margin-top: 3.5rem;
            background: #343a40;
            box-sizing: border-box;
            border-top: 1px solid rgba(0, 0, 0, 0.3);
        }

        .navbar-expand-lg .sidenav {
            flex-direction: column;
        }

        .content-wrapper {
            margin-left: 230px;
        }

        .footer {
            width: calc(100% - 230px);
            margin-left: 230px;
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
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
                                    <a href="?request=signout" class="btn btn-default btn-flat">Đăng xuất</a><?php //$ac->routes(); ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Homepage config</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-collapse" href="#" id="hasSubItems" data-toggle="collapse" data-target="#collapseSubItems2" aria-controls="collapseSubItems2" aria-expanded="false">Brand</a>
                <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
                    <li class="nav-item">
                        <a class="nav-link" href="?request=addbrand">
                            <span class="nav-link-text">Add new</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?request=brand">
                            <span class="nav-link-text">List of brand</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-collapse" href="#" id="hasSubItems" data-toggle="collapse" data-target="#collapseSubItems3" aria-controls="collapseSubItems3" aria-expanded="false">Category</a>
                <ul class="nav-second-level collapse" id="collapseSubItems3" data-parent="#navAccordion">
                    <li class="nav-item">
                        <a class="nav-link" href="?request=addcate">
                            <span class="nav-link-text">Add new</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?request=list">
                            <span class="nav-link-text">List of category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-collapse" href="#" id="hasSubItems" data-toggle="collapse" data-target="#collapseSubItems4" aria-controls="collapseSubItems4" aria-expanded="false">Glasses</a>
                <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-text">Add new</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-text">List of glasses</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">List of customer</a>
            </li>
        </ul>
    </div>
</nav>

<main class="content-wrapper">
    <div class="container-fluid">
        <?php
        $ac->routes();
        ?>
    </div>
</main>