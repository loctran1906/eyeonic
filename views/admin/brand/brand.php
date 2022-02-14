<h1>Tên hãng</h1>
<section><a href="?request=addbrand">Thêm mới</a></section>
<table style="width:100%" border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($bra as $item):?>
            <tr>
                <td><?=$item['name']?></td>
                <td><?=$item['status']==1?'Active':'Deactive'?></td>
                <td><a href="?request=updatebrand&id=<?=$item['id']?>">Cập nhật</a><a href="?request=deletebrand&id=<?=$item['id']?>" onclick="return confirm('Bạn chắc chắn xóa')">Xóa</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>