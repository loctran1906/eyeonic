<?php
include "../models/AdminModel.php";

class AdminController
{
    var $am;
    function __construct()
    {
        $this->am = new AdminModel();
    }
    function routes()
    {
        if (isset($_GET['request'])) :
            switch ($_GET['request']): //tiếp nhận lại biến get trên thanh địa chỉ'
                    //case for brand
                    //add
                case 'addbrand':
                    if (isset($_POST['name'])) :
                        if ($this->am->checkNameBrand() == true) :
                            $alert = '<div class="alert alert-danger">This brand has existed!</div>';
                            include "../views/admin/brand/addbrand.php";
                        else :
                            $this->am->addBrand();
                            header("location: ?request=brand");
                        endif;
                    else :
                        include "../views/admin/brand/addbrand.php";
                    endif;
                    break;
                    //view
                case 'brand':
                    $bra = $this->am->getAllBrand();
                    include "../views/admin/brand/brand.php";
                    break;
                    //update
                case 'updatebrand':
                    $id = $this->am->getBrandId();
                    if (isset($_POST['name'])) :
                        if ($this->am->checkSameNameBrand() == true) :
                            $alert = '<div class="alert alert-danger">This brand has existed!</div>';
                            include "../views/admin/brand/updatebrand.php";
                        else :
                            $this->am->updateBrand();
                            header("location: ?request=brand");
                        endif;
                    else :
                        include "../views/admin/brand/updatebrand.php";
                    endif;
                    break;
                    //delete
                case 'deletebrand':
                    $this->am->deleteBrand();
                    header("location: ?request=brand");
                    break;

                    //===============================================================================================================
                    //case for category
                    //add
                case 'addcate':
                    if (isset($_POST['name'])) :
                        if ($this->am->checkNameCate() == true) :
                            $alert = '<div class="alert alert-danger">This category has existed!</div>';
                            include "../views/admin/category/add.php";
                        else :
                            $this->am->addCate();
                            header("location: ?request=list");
                        endif;
                    else :
                        include "../views/admin/category/add.php";
                    endif;
                    break;
                    //view
                case 'cate':
                    $cate = $this->am->getAllCate();
                    include "../views/admin/category/list.php";
                    break;
                    //update
                case 'updatecate':
                    $id = $this->am->getCateId();
                    if (isset($_POST['name'])) :
                        if ($this->am->checkSameNameCate() == true) :
                            $alert = '<div class="alert alert-danger">This category has existed!</div>';
                            include "../views/admin/category/update.php";
                        else :
                            $this->am->updateCate();
                            header("location: ?request=cate");
                        endif;
                    else :
                        include "../views/admin/category/update.php";
                    endif;
                    break;
                    //delete
                case 'deletecate':
                    $this->am->deleteCate();
                    header("location: ?request=cate");
                    break;
                    //===============================================================================================================
                    //case for glasses
                    //add new
                case 'addglasses':
                    if (isset($_POST['submit'])) :
                        if ($this->am->checkNameGlassesAdd() == true) :
                            $alert = '<div class="alert alert-danger">There are similar products!</div>';
                            include "../views/admin/glasses/add.php";
                        else :
                            $this->am->addGlasses();
                            header("location: ?request=glasses");
                        endif;
                    else :
                        $brand = $this->am->getBrand();
                        $cate = $this->am->getCate();
                        include "../views/admin/glasses/add.php";
                    endif;
                    break;
                    //view list
                case 'glasses':
                    $bra = $this->am->getAllBrand();
                    $cate = $this->am->getAllGlasses();
                    $glasses = $this->am->getAllGlasses();
                    include "../views/admin/glasses/list.php";
                    break;
                    //update
                case 'updateglasses':
                    $id = $this->am->getGlassesId();
                    if (isset($_POST['submit'])) :
                        if ($this->am->checkSameNameGlasses() == true) :
                            $alert = '<div class="alert alert-danger">There are similar products!</div>';
                            include "../views/admin/glasses/update.php";
                        else :
                            $this->am->updateGlasses();
                            header("location: ?request=glasses");
                        endif;
                    else :
                        $brand = $this->am->getBrand();
                        $cate = $this->am->getCate();
                        include "../views/admin/glasses/update.php";
                    endif;
                    break;
                    //delete
                case 'deleteglasses':
                    $this->am->deleteGlasses();
                    header("location: ?request=glasses");
                    break;
                    //===============================================================================================================
                    //case for login - logout
                case 'signout':
                    unset($_SESSION['admin']);
                    header("location: .");
                    break;
                case 'home':
                    include "../views/admin/home/home.php";
                    break;
                    //case list of customer
                case 'listcustomer':
                    $customer = $this->am->getCustomer();
                    include "../views/admin/customer/customer.php";
                    break;
                case 'deletecustomer':
                    $this->am->deleteCustomer();
                    header("location: ?request=listcustomer");
                    break;
                case 'homepageconfig':
                    include "../views/admin/home/config.php";
                    break;
            endswitch;
        endif;
    }
    function checkSignInAdmin()
    {
        if (isset($_POST['user'])) :
            if ($this->am->checkSignIn() == false) :
                $alert = '<div class="alert alert-danger">Username or password is not correct!</div>';
                include "../views/admin/signin.php";
            else :
                $_SESSION['admin'] = $_POST['user'];
                header("location: ?request=home");
            endif;
        else :
            if (empty($_SESSION['admin'])) :
                include "../views/admin/signin.php";
            else :
                include "../views/admin/control.php";
            endif;
        endif;
    }
}
