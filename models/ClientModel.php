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
        if (isset($_POST['member'])) {
            $member = $_POST['member'];
        } else {
            $member = 0;
        }

        $this->connect->query("insert into users (fullname,address,phone,email,age,gender,content,member,sent_at) values ('$fullname','$address','$phone','$email','$age','$gender','$content','$member','$date')");
    }
    function getProd()
    {
        $result = $this->connect->query("select * from category where status = 1");
        return $result;
    }
    function getBrand()
    {
        $result = $this->connect->query("select * from brand where status = 1");
        return $result;
    }
    function showGlasses()
    {
        $query = "select * from glasses where status = 1 ";
        if (isset($_GET['request'])) {
            if (isset($_GET['cate'])) {
                if ($_GET['cate'] != 0) {
                    $result = $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) where glasses.status = 1 and cate_id = " . $_GET['cate']);
                } else {
                    $result = $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) where glasses.status = 1 ;");
                }
            } else {
                $result = $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) where glasses.status = 1 ;");
            }
        } elseif (isset($_GET['key'])) {
            $result = $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) where glasses.name like '%" . $_GET['key'] . "%' or brand.name like '%" . $_GET['key'] . "%'");
        } else {
            $result = $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) where glasses.status = 1 ;");
        }

        return $result;
    }
    function showNewGlasses()
    {
        return $result = $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) where glasses.status = 1 order by id desc LIMIT 5;");
    }
    function showDetailGlasses()
    {
        $result = $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) where glasses.status = 1 and glasses.id = ".$_GET['id']);
        return mysqli_fetch_array($result);
    }
}
