<?php
$cc = new ClientController(); ?>
<div class="content">
    <div class="container">
        <div class="row title flex-center">
            <div class="flex-center description">
                <h2>Featured Styles</h2>
            </div>
        </div>
        <div style="padding: 10px 20%; text-align:center"><p>At Eyeonic®, we care about your vision and how you see the world around you. That’s why we seamlessly connect your eyewear, your insurance coverage, and your doctor’s expertise.</p></div>
    </div>
    <div class="container">
        <div class="row flex-center">
            <ul class="nav nav-tabs flex-center glasses-cate">
                <li><a href="?request=home&cate=0">All</a></li>
                <?php foreach ($a as $item) : ?>
                    <li><a href="?request=home&cate=<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search" name="key">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
            </form>
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