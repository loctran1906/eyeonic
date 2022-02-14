<?php
class ClientModel{
    var $connect;
    
    function __construct()
    {
        $this->connect = new MySQLi('localhost','root','', 'c2104l');
    }
    
    function checkSignIn()
    {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $result  = $this->connect->query ("select * from users where username = '$user' and password = '$pass'");
        
        if(mysqli_num_rows($result) > 0):
            return true;
        else:
            return false;
        endif;
    }
    function checkRegister()
    {
        $username= $_POST['username'];
        $result = $this->connect->query("select *from users where username='$username'");
        
        if(mysqli_num_rows($result) != 0):
            return true;
        else:
            $password=md5($_POST['password']);
            $fullname= $_POST['fullname'];
            $mobile=$_POST['mobile'];
            $email= $_POST['email'];
            $address= $_POST['address'];
            $this->connect-> query("insert users(username,password,fullname,mobile,email,address) values('$username','$password','$fullname','$mobile','$email','$address')");
        endif;
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
    function fillProd(){
        if (isset($_GET['brand'])):
            $result = $this->connect->query("select * from prod where brandId = ".$_GET['brand']." and prodStatus = 1");
        elseif(isset($_GET['key'])):
            $result = $this->connect->query("select * from prod where prodName like '%".$_GET['key']."%'");
        elseif(isset($_GET['fromPrices'])):
            $result = $this->connect->query("select * from prod where prodStatus = 1 and prodPrice >= ".$_GET['fromPrices']." and prodPrice < ".$_GET['toPrices'] );
        else:
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
?>