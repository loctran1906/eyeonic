<?php
class AdminModel{
    var $connect;
    
    function __construct()
    {
        $this->connect = new MySQLi('localhost','root','', 'eyeonic');
    }
    function checkSignIn()
    {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $result  = $this->connect->query ("select * from admin where username = '$user' and pass = '$pass'");
        
        if(mysqli_num_rows($result) > 0):
            return true;
        endif;
        return false;
    }
    function addBrand()
    {
        return $this->connect->query("insert brands(name,status) values ('".$_POST['name']."', '".$_POST['status']."')");
    }
    function getAllBrand()
    {
        return $this->connect->query("select * from brands");
    }
    function getBrandId()
    {
        $result  = $this->connect->query("select * from brands where id = ".$_GET['id']);
        return mysqli_fetch_array($result);
    }
    function checkNameBrand()
    {
        $result  = $this->connect->query("select * from brands where name ='".$_POST['name']."'");
        if(mysqli_num_rows($result) != 0):
            return true;
        else:
            return false;
        endif;
    }

    function checkSameNameBrand()
    {
        $result  = $this->connect->query("select * from brands where name ='".$_POST['name']."' and id != ".$_GET['id']);
        if(mysqli_num_rows($result) != 0):
            return true;
        else:
            return false;
        endif;
    }
    function updateBrand()
    {
        $name = $_POST['name'];
        $status = $_POST['status'];

        return $this->connect->query("update brands set name='$name',  status='$status' where id = ".$_GET['id']  );
    }
    function deleteBrand()
    {
        $result  = $this->connect->query("select * from brands where brandId = ".$_GET['id']  );
        if(mysqli_num_rows($result) != 0):
            $this->connect->query("update brands set status=0 where id = ".$_GET['id']);
        else:
            $this->connect->query("delete from brands where id = ".$_GET['id']);
        endif;
    }
}
?>