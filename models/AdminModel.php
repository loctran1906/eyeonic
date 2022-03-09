<?php
class AdminModel
{
    var $connect;

    function __construct()
    {
        $this->connect = new MySQLi('localhost', 'root', '', 'eyeonic');
    }
    function checkSignIn()
    {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $result  = $this->connect->query("select * from admin where username = '$user' and pass = '$pass'");

        if (mysqli_num_rows($result) > 0) :
            return true;
        endif;
        return false;
    }

    // action for brand
    function addBrand()
    {
        return $this->connect->query("insert brand(name,description,status) values ('" . $_POST['name'] . "','".$_POST['description']."', '" . $_POST['status'] . "')");
    }
    function getAllBrand()
    {
        return $this->connect->query("select * from brand");
    }
    function getBrandId()
    {
        $result  = $this->connect->query("select * from brand where id = " . $_GET['id']);
        return mysqli_fetch_array($result);
    }
    function checkNameBrand()
    {
        $result  = $this->connect->query("select * from brand where name ='" . $_POST['name'] . "'");
        if (mysqli_num_rows($result) != 0) :
            return true;
        else :
            return false;
        endif;
    }

    function checkSameNameBrand()
    {
        $result  = $this->connect->query("select * from brand where name ='" . $_POST['name'] . "' and id != " . $_GET['id']);
        if (mysqli_num_rows($result) != 0) :
            return true;
        else :
            return false;
        endif;
    }
    function updateBrand()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        return $this->connect->query("update brand set name='$name', description='$description', status='$status' where id = " . $_GET['id']);
    }
    function deleteBrand()
    {
        $result  = $this->connect->query("select * from brand where brandId = " . $_GET['id']);
        if (mysqli_num_rows($result) != 0) :
            $this->connect->query("update brands set status=0 where id = " . $_GET['id']);
        else :
            $this->connect->query("delete from brand where id = " . $_GET['id']);
        endif;
    }
    // END action for brand
    //=============================================================================================================//
    // action for category
    function addCate()
    {
        date_default_timezone_set('Asia/Saigon');
        $date = date('Y-m-d H:i:s');
        return $this->connect->query("insert category(name,status,created_at) values ('" . $_POST['name'] . "', '" . $_POST['status'] . "','$date')");
    }
    function getAllCate()
    {
        return $this->connect->query("select * from category");
    }
    function getCateId()
    {
        $result  = $this->connect->query("select * from category where id = " . $_GET['id']);
        return mysqli_fetch_array($result);
    }
    function checkNameCate()
    {
        $result  = $this->connect->query("select * from category where name ='" . $_POST['name'] . "'");
        if (mysqli_num_rows($result) != 0) :
            return true;
        else :
            return false;
        endif;
    }

    function checkSameNameCate()
    {
        $result  = $this->connect->query("select * from category where name ='" . $_POST['name'] . "' and id != " . $_GET['id']);
        if (mysqli_num_rows($result) != 0) :
            return true;
        else :
            return false;
        endif;
    }
    function updateCate()
    {
        date_default_timezone_set('Asia/Saigon');
        $date = date('Y-m-d H:i:s');
        $name = $_POST['name'];
        $status = $_POST['status'];

        return $this->connect->query("update category set name='$name',  status='$status', updated_at = '$date', updated_by = '$_SESSION[admin]' where id = " . $_GET['id']);
    }
    function deleteCate()
    {
        $result  = $this->connect->query("select * from category where cateId = " . $_GET['id']);
        if (mysqli_num_rows($result) != 0) :
            $this->connect->query("update category set status=0 where id = " . $_GET['id']);
        else :
            $this->connect->query("delete from category where id = " . $_GET['id']);
        endif;
    }
    // END action for category
    //=============================================================================================================//
    // action for glasses
    function getBrand()
    {
        return $this->connect->query("select * from brand");
    }
    function getCate()
    {
        return $this->connect->query("select * from category");
    }
    function addGlasses()
    {
        $image = basename('upload_' . $_FILES['image']['name']);
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/eyeonic/img/upload/'; //file lưu ảnh
        $target_file = $target_dir . $image; //lưu tên ảnh vào trong file để lưu
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        date_default_timezone_set('Asia/Saigon');
        $date = date('Y-m-d H:i:s');
        return $this->connect->query("insert glasses(name,image, description, price,brand_id, cate_id, detail, created_at, created_by) values ('" .addslashes( $_POST['name'] )  . "','$image', '" . addslashes($_POST['description']) . "', '" . $_POST['price'] . "','" . $_POST['brand'] . "', '" . $_POST['cate'] . "', '" . addslashes($_POST['detail']) . "', '$date', '$_SESSION[admin]')");
    }
    function getAllGlasses()
    {
        return $this->connect->query("SELECT glasses.*, category.name as cate, brand.name AS brand FROM ((glasses INNER JOIN category ON glasses.cate_id = category.id) INNER JOIN brand ON glasses.brand_id = brand.id) order by id DESC;");
    }
    function getGlassesId()
    {
        $result  = $this->connect->query("select * from glasses where id = " . $_GET['id']);
        return mysqli_fetch_array($result);
    }
    function checkNameGlassesAdd()
    {
        $result  = $this->connect->query("select * from glasses where name ='" . $_POST['name'] . "'");
        if (mysqli_num_rows($result) != 0) :
            return true;
        else :
            return false;
        endif;
    }

    function checkSameNameGlasses()
    {
        $result  = $this->connect->query("select * from glasses where name ='" . $_POST['name'] . "' and id != " . $_GET['id']);
        if (mysqli_num_rows($result) != 0) :
            return true;
        else :
            return false;
        endif;
    }
    function updateGlasses()
    {
        date_default_timezone_set('Asia/Saigon');
        $date = date('Y-m-d H:i:s');
        $name = addslashes($_POST['name']);
        $description = addslashes($_POST['description']);
        $price = $_POST['price'];
        $brand_id = $_POST['brand'];
        $cate_id = $_POST['cate'];
        $detail = addslashes($_POST['detail']);
        $status = $_POST['status'];
        if ($_FILES['image']['size'] !== 0) :
            $image = basename('update_' . $_FILES['image']['name']);
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/eyeonic/img/upload/'; //file lưu ảnh
            $target_file = $target_dir . $image; //lưu tên ảnh vào trong file để lưu
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $a = $this->connect->query("update glasses set name='$name', image = '$image', description = '$description', price = '$price',brand_id = '$brand_id' ,  cate_id = '$cate_id', detail = '$detail', status='$status', updated_at = '$date', updated_by = '$_SESSION[admin]' where id = " . $_GET['id']);
        else :
            $a = $this->connect->query("update glasses set name='$name', description = '$description', price = '$price',brand_id = '$brand_id' ,  cate_id = '$cate_id', detail = '$detail', status='$status', updated_at = '$date', updated_by = '$_SESSION[admin]' where id = " . $_GET['id']);
        endif;
        return $a;
    }
    function deleteGlasses()
    {
        $result  = $this->connect->query("select * from glasses where cateId = " . $_GET['id']);
        if (mysqli_num_rows($result) != 0) :
            $this->connect->query("update glasses set status=0 where id = " . $_GET['id']);
        else :
            $this->connect->query("delete from glasses where id = " . $_GET['id']);
        endif;
    }
    //=============================================================================================================//
    // action for customer
    function getCustomer()
    {
        return $this->connect->query("SELECT * FROM users");
    }
    function getCustomerId()
    {
        $result  = $this->connect->query("select * from users where id = " . $_GET['id']);
        return mysqli_fetch_array($result);
    }
    function deleteCustomer()
    {
        $this->connect->query("delete from users where id = " . $_GET['id']);
    }
    //=============================================================================================================//
    // action for banner home
    function bannerHome()
    {
       
    }
    //=============================================================================================================//
}
