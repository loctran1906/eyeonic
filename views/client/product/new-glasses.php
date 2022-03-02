<div class="slider-for">
    <?php foreach ($glasses as $item) : ?>
        <div class="item">
            <div class="row">
                <div class="img-product col-sm-6"><img src="img/upload/<?= $item['image'] ?>" alt="" height="200"></div>
                <div class="content-product col-sm-6">
                    <h3><a style="font-size: 28px;" href="?request=detail&id=<?= $item['id'] ?>"><?= $item['brand'] ?> - <?= $item['name'] ?></a></h3>
                    <div class="flex-center price" style="justify-content:space-between;">
                        <span style="color: red; font-weight:800">Price: <?= number_format($item['price'], 0, ',', '.') . '$ ' ?></span>
                        <span style="font-weight:800">Type: <?= $item['cate'] ?></span>
                    </div>
                    <div><strong>Description:</strong> <?= $item['description'] ?></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="slider-nav">
    <?php foreach ($glasses as $item) : ?>
        <div>
            <div class="img-product-icon"><img src="img/upload/<?= $item['image'] ?>" alt="" height="60"></div>
        </div>
    <?php endforeach;?>
</div>