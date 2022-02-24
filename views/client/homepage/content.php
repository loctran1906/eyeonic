<?php
$cc = new ClientController(); ?>
<div class="content">
    <div class="container">
        <div class="row title flex-center">
            <div class="flex-center description">
                <h2>Featured Styles</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row flex-center">
            <ul class="nav nav-tabs ">
                <li class="active"><a href="?request=home&cate=0">All</a></li>
                <?php foreach ($a as $item) : ?>
                    <li><a href="?request=home&cate=<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if (isset($_GET['cate'])) :
                    $cc->routes2();
                else :
                    $cc->routes2();
                endif;
                ?>
            </div>
        </div>
    </div>
</div>