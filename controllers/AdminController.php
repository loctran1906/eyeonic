<?php 
include "../models/AdminModel.php";

class AdminController{
    var $am;
    function __construct()
    {
        $this->am = new AdminModel();
    }
    function routes()
    {
        if (isset($_GET['request'])):
            switch( $_GET['request'] ): //tiếp nhận lại biến get trên thanh địa chỉ'
                case 'deletebrand':
                    $this->am->deleteBrand();
                    header("location: ?request=brand");
                    break;


                case 'addbrand':
                    if(isset($_POST['name'])):
                        if($this->am->checkNameBrand() == true):
                            $alert = 'Trung ten';
                            include "../views/admin/brand/addbrand.php";
                        else:
                            $this->am->addBrand();
                            header("location: ?request=brand");
                        endif;
                    else:
                        include "../views/admin/brand/addbrand.php";
                    endif;
                    break;



                case 'updatebrand':
                    $id = $this->am->getBrandId();
                    if(isset($_POST['name'])):
                        if($this->am->checkSameNameBrand() == true):
                            $alert = 'Trung ten';
                            include "../views/admin/brand/updatebrand.php";
                        else:
                            $this->am->updateBrand();
                            header("location: ?request=brand");
                        endif;
                    else:
                        include "../views/admin/brand/updatebrand.php";
                    endif;
                    
                    
                    break;



                case 'brand':
                    $bra = $this->am->getAllBrand();
                    include "../views/admin/brand/brand.php";
                    break;



                case 'signout': unset($_SESSION['admin']) ;header("location: .");break;



            endswitch;
        endif;
    }
    function checkSignInAdmin()
    {
        if (isset($_POST['user'])):
                if($this->am->checkSignIn() == false):
                    $alert = 'Lỗi đăng nhập';
                    include "../views/admin/signin.php";
                else:
                    $_SESSION['admin'] = $_POST['user'];
                    header("location: .");
                endif;
            else:
                if(empty($_SESSION['admin'])):
                    include "../views/admin/signin.php";
                else:
                    include "../views/admin/control.php";
                endif;
            endif;
    }
}
?>