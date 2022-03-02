<div class="container">
    <h2 class="flex-center">Related eyewear products</h2>
    <p style="padding: 10px 25%; text-align:center;" class="flex-center">Single-vision lenses are always included in the pricing. Plus, if you have vision insurance, you’ll see your savings as you shop.</p>
    <div class="row">
        <?php foreach ($more as $item) : ?>
            <div class="col-md-4">
                <div style="padding: 10px 25%; text-align:center; transition: transform .2s;" class="imageMore"><a href="?request=detail&id=<?= $item['id'] ?>"><img src="img/upload/<?= $item['image'] ?>" alt="" style="max-width: 200px"></a></div>
                <div style="padding: 10px 25%; text-align:center;"><h3><a style="font-size: 28px;" href="?request=detail&id=<?= $item['id'] ?>"><?= $item['brand'] ?> - <?= $item['name'] ?></a></h3></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>