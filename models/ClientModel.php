<?php
class ClientModel
{
    var $connect;

    function __construct()
    {
        $this->connect = new MySQLi('localhost', 'root', '', 'eyeonic');
    }


    function sendMess()
    {
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $content = $_POST['content'];
        
        date_default_timezone_set('Asia/Saigon');
        $date = date('Y-m-d H:i:s');
        $this->connect->query("insert users (fullname,address,phone,email,age,gender,content,sent_at) values ('$fullname','$address','$phone','$email','$age','$gender','$content','$date')");
    }
    function getProd()
    {
        $result = $this->connect->query("select * from prod where prodStatus = 1");
        return $result;
    }
    function getBrand()
    {
        $result = $this->connect->query("select * from brands where status = 1");
        return $result;
    }
    function fillProd()
    {
        if (isset($_GET['brand'])) :
            $result = $this->connect->query("select * from prod where brandId = " . $_GET['brand'] . " and prodStatus = 1");
        elseif (isset($_GET['key'])) :
            $result = $this->connect->query("select * from prod where prodName like '%" . $_GET['key'] . "%'");
        elseif (isset($_GET['fromPrices'])) :
            $result = $this->connect->query("select * from prod where prodStatus = 1 and prodPrice >= " . $_GET['fromPrices'] . " and prodPrice < " . $_GET['toPrices']);
        else :
            $result = $this->connect->query("select * from prod where prodStatus = 1");
        endif;
        return $result;
    }
    // tìm theo khoảng giá
    function getPrices()
    {
        return $this->connect->query("select * from prices where status");
    }
}
