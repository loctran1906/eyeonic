<h1>Edit Brand</h1>
<?=$alert??''?>
<form action="" method="post">
    <table style="width:100%" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="name" value="<?=$id['name']?>"></td>
                <td><input type="radio" name="status" <?=$id['status'] == 1 ?'checked':'';?> value="1">Active<input type="radio" name="status" <?=$id['status'] == 0 ?'checked':'';?> value="0">Deactive</td>
                <td><input type="submit" value="Cập nhật"></td>
            </tr>
        </tbody>
    </table>
</form>