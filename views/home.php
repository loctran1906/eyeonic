<section>
    <?php foreach($prod as $item):?>
    <div class="item">
        <section><img src="img/<?= $item['prodImg']?>" alt=""></section>
        <section><?= $item['prodName']?></section>
        <section>Giá: <?= $item['prodPrice']?></section>
        <section>Mô tả: <?= $item['prodDesc']?></section>
    </div>
    <?php endforeach;?>
</section>