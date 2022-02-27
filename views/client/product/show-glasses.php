<div class="row" id="datapagi">
    <?php foreach ($glasses as $item) : ?>
        <div class="col-sm-4">
            <div class="item-product">
                <div style="width:100%"><img src="img/upload/<?= $item['image'] ?>" alt="" height="120"></div>
                <h3 style="height: 100px;"><a style="font-size: 28px;" href="?request=detail&id=<?= $item['id'] ?>"><?= $item['brand'] ?> - <?= $item['name'] ?></a></h3>
                <div class="flex-center price">
                    <span style="color: red; font-weight:800">Price: <?= number_format($item['price'], 0, ',', '.') . '$ ' ?></span>
                    <span style="font-weight:800">Type: <?= $item['cate'] ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>