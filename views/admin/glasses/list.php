<h3>Glasses list</h3>
<div class="form-group"><a href="?request=addglasses" class="btn btn-success"> Add more glasses</a></div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Created at</th>
            <th scope="col">Created by</th>
            <th scope="col">Updated at</th>
            <th scope="col">Updated by</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($glasses as $item) : ?>
            <tr>
                <th scope="row"><?=$item['id']?></th>
                <td><img src="../img/upload/<?=$item['image']?>" alt="" width="100" height="50" style="image-rendering: pixelated; object-fit: contain; filter: drop-shadow(0 0 5px blue);"></td>
                <td><?=$item['name']?></td>
                <td><?=$item['created_at']?></td>
                <td><?=$item['created_by']?></td>
                <td><?=$item['updated_at']?></td>
                <td><?=$item['updated_by']?></td>
                <td><?= $item['status'] == 1 ? 'Active' : 'Deactive' ?></td>
                <td><a href="?request=updateglasses&id=<?= $item['id'] ?>">Edit</a></td>
                <td><a href="?request=deleteglasses&id=<?= $item['id'] ?>" onclick="return confirm('Bạn chắc chắn xóa')">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
