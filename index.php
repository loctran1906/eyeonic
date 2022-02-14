<?php
session_start();
$connect = new MySQLi('localhost','root','', 'eyeonic'); //kết nối lên db, tạo đối tượng mới tên MySQLi truyền vào 4 đối só tên host là 'localhost', user mặc định là 'root', pass mặc định rỗng, tên database là 'c2104l' (db này đã đc tạo trên phpmyadmin)
?>
<?php 
include "controllers/ClientController.php";
$cc = new ClientController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eyeonic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/main.js"></script>
</head>

<body>
    <?php include "views/client/layout/header.php";?>
    <?php include "views/client/homepage/banner.php";?>
    <?php include "views/client/homepage/new-product.php";?>
    <?php include "views/client/homepage/content.php";?>
    <?php include "views/client/homepage/aboutus.php";?>
    <?php include "views/client/layout/footer.php";?>

    <section id="wrapper">
        <header>
            <section>Logo</section>
            <section>Banner</section>
        </header>
        <nav>
            <section><a href="?request=home">Home</a></section> <!-- thiết lập request -->
            <section><a href="?request=news">News</a></section>
            <section><a href="?request=feedback">Feedback</a></section>
            <section><a href="?request=cart">Cart</a></section>
            <?php if (empty($_SESSION['user'])) : ?>
                <section><a href="?request=signin">Sign In</a></section>
                <section><a href="?request=register">Register</a></section>
            <?php else : ?>
                <section>Hello: <?= $_SESSION['user']; ?></section>
                <section><a href="?request=signout">Sign out</a></section>
            <?php endif; ?>
        </nav>
        <section class="body">
            <aside>
                <ul style="list-style: none; padding-left: 10px">
                    <?php foreach ($cc->brands as $item) : ?>
                        <li style="text-align: left;"><a href="?request=filterProd&brand=<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
            <article>
                <?php $cc->routes(); ?>
            </article>
            <aside>
                <form action="?request=view">
                    <input type="search" name="key" placeholder="search here">
                    <input type="submit" value="Search">
                </form>
                <div style="display: flex; flex-wrap: wrap">
                    <?php foreach ($cc->prices as $item) : ?>
                        <a style="font-size: 10px;" href="?request=filterProd&fromPrices=<?= $item['fromPrice'] ?>&toPrices=<?= $item['toPrice'] ?>"><?= number_format($item['fromPrice'], 0, ',', '.') . '$ -' . number_format($item['toPrice'], 0, ',', '.') . '$' ?></a>
                    <?php endforeach; ?>
                </div>
            </aside>
        </section>
        <footer>footer</footer>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>