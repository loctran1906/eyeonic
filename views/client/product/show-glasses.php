<div class="row" id="datapagi">
    <?php foreach ($glasses as $item) : ?>
        <div class="col-sm-4">
            <div class="item-product">
                <div style="width:100%"><img src="img/upload/<?= $item['image'] ?>" alt="" height="120"></div>
                <h3 style="height: 100px;"><a style="font-size: 28px;" href="?request=detail&id=<?= $item['id'] ?>"><?= $item['brand'] ?> - <?= $item['name'] ?></a></h3>
                <div class="flex-center price">
                    <span>Price: <?= number_format($item['price'], 0, ',', '.') . '$ ' ?></span>
                    <span>Group: <?= $item['cate'] ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>