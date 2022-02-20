<?php

include "models/ClientModel.php";


class ClientController
{
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
        if (isset($_GET['request'])) :
            switch ($_GET['request']): //tiếp nhận lại biến get trên thanh địa chỉ
                case 'home':
                    $prod = $this->cm->fillProd();

                    include "views/home.php"; //lấy nội dung tương ứng để hiển thị
                    break;
                case 'news':
                    include "views/news.php";
                    break;
                case 'feedback':
                    include "views/feedback.php";
                    break;
                case 'cart':
                    include "views/cart.php";
                    break;
                case 'filterProd':
                    $prd = $this->cm->fillProd();
                    include "views/prd.php";
                    break;
                case 'contact':
                    if (isset($_POST['submit'])) :
                        $this->cm->sendMess();
                        $alert = '<div class="alert alert-success">Thank you for leaving a message!<br>If you have any questions, we will contact you shortly</div>';
                        include "views/client/contact/contact.php";
                    else :
                        include "views/client/contact/contact.php";
                    endif;
                    break;
                case 'sitemap':
                    include "views/client/sitemap/sitemap.php";
                    break;
                case 'aboutus':
                    include "views/client/aboutus/aboutus.php";
                    break;
                case 'eyeglasses':
                    include "views/client/product/eyeglasses.php";
                    break;
                case 'glasses':
                    include "views/client/product/glasses.php";
                    break;
                case 'sunglasses':
                    include "views/client/product/sunglasses.php";
                    break;
                case 'lens':
                    include "views/client/product/lens.php";
                    break;
            endswitch;
        else :
            $prod = $this->cm->fillProd();
            include 'views/home.php';
        endif;
    }
}
