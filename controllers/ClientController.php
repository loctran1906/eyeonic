<?php

include "models/ClientModel.php";


class ClientController{
    var $cm;
    var $brands;
    var $prices;
    function __construct()
    {
        $this->cm = new ClientModel();
        $this->brands = $this->cm->getBrand();
        $this->prices = $this->cm->getPrices();
    }
    function routes()
    {
        if (isset($_GET['request'])):
            switch( $_GET['request'] ): //tiếp nhận lại biến get trên thanh địa chỉ
                case 'home':
                    $prod = $this->cm->fillProd();
                    
                    include "views/home.php"; //lấy nội dung tương ứng để hiển thị
                break;
                case 'news':include "views/news.php"; break;
                case 'feedback':include "views/feedback.php";break;
                case 'cart':include "views/cart.php";break;
                case 'signin':
                    if (isset($_POST['user'])):
                        if($this->cm->checkSignIn() == false):
                            $alert = 'Lỗi đăng nhập';
                            include "views/signin.php";
                        else:
                            $_SESSION['user'] = $_POST['user'];
                            header("location: ?request=home");
                        endif;
                    else:
                        include "views/signin.php";
                    endif;
                    break;
                case 'register':
                    if (isset($_POST['username'])):
                        if($this->cm->checkRegister() == true):
                            $alert = 'Lỗi đăng ký';
                            include "views/register.php";
                        else:
                            $alert = 'Đăng ký thành công';
                            include "views/home.php";
                        endif;
                    else:
                        include "views/register.php";
                    endif;
                    break;
                case 'signout': unset($_SESSION['user']) ;header("location:?request=home");;break;
                case 'filterProd':
                    $prd = $this->cm->fillProd();
                    include "views/prd.php";
                    break;
            endswitch;
        else:
            $prod = $this->cm->fillProd();
            include 'views/home.php';
        endif;
    }
   
}
?>
