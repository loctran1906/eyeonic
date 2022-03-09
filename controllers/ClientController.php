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
    }
    function routes()
    {
        if (isset($_GET['request'])) :
            $b = $this->cm->getBrand();
            switch ($_GET['request']): //tiếp nhận lại biến get trên thanh địa chỉ
                case 'home':
                    $glasses = $this->cm->showGlasses();
                    $a = $this->cm->getProd();
                    include "views/home.php"; //lấy nội dung tương ứng để hiển thị
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
                case 'brand':
                    if (isset($_GET['id'])) :
                        switch ($_GET['id']): //tiếp nhận lại biến get trên thanh địa chỉ
                            case '1':
                                $brand = $this->cm->getBrandFollowId();
                                $glasses = $this->cm->showGlassesFollowBrand();
                                include "views/client/product/show-glasses-brand.php";
                                break;
                            case '2':
                                $brand = $this->cm->getBrandFollowId();
                                $glasses = $this->cm->showGlassesFollowBrand();
                                include "views/client/product/show-glasses-brand.php";
                                break;
                            case '3':
                                $brand = $this->cm->getBrandFollowId();
                                $glasses = $this->cm->showGlassesFollowBrand();
                                include "views/client/product/show-glasses-brand.php";
                                break;
                            case '4':
                                $brand = $this->cm->getBrandFollowId();
                                $glasses = $this->cm->showGlassesFollowBrand();
                                include "views/client/product/show-glasses-brand.php";
                                break;
                        endswitch;
                    endif;
                    break;
                case 'detail':
                    if (isset($_GET['id'])) :
                        $glasses = $this->cm->showDetailGlasses();
                        include "views/client/product/detail.php";
                        $more = $this->cm->showMoreGlasses();
                        include "views/client/product/more-glasses.php";
                    endif;
                    break;
            endswitch;
        else :
            $glasses = $this->cm->showGlasses();
            $a = $this->cm->getProd();
            $b = $this->cm->getBrand();
            include 'views/home.php';
        endif;
    }
    function routes2()
    {
        if (isset($_GET['request'])) :
            if (isset($_GET['cate'])) :
                switch ($_GET['cate']): //tiếp nhận lại biến get trên thanh địa chỉ
                    case '0':
                        $glasses = $this->cm->showGlasses();
                        include "views/client/product/show-glasses.php"; //lấy nội dung tương ứng để hiển thị
                        break;

                    case '1':
                        $glasses = $this->cm->showGlasses();
                        include "views/client/product/show-glasses.php";
                        break;
                    case '2':
                        $glasses = $this->cm->showGlasses();
                        include "views/client/product/show-glasses.php";
                        break;
                    case '3':
                        $glasses = $this->cm->showGlasses();
                        include "views/client/product/show-glasses.php";
                        break;
                    case '4':
                        $glasses = $this->cm->showGlasses();
                        include "views/client/product/show-glasses.php";
                        break;
                endswitch;
            else :
                $glasses = $this->cm->showGlasses();
                include "views/client/product/show-glasses.php";
            endif;
        else :
            $glasses = $this->cm->showGlasses();
            include "views/client/product/show-glasses.php";
        endif;
    }
    function routes3()
    {
        if (isset($_GET['request'])) :
            $glasses = $this->cm->showNewGlasses();
            include "views/client/product/new-glasses.php";
        else :
            $glasses = $this->cm->showNewGlasses();
            include "views/client/product/new-glasses.php";
        endif;
    }
    function routes4()
    {
        if (isset($_GET['request'])) :
            $b = $this->cm->getBrand();
            include "views/client/product/brand.php";
        else :
            $b = $this->cm->getBrand();
            include "views/client/product/brand.php";
        endif;
    }
}
