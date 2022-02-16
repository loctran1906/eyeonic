<h3>Add new category</h3>
<?=$alert??''?>
<form method="post">
    <div class="form-group">
        <label for="brandname">Category name</label>
        <input type="text" class="form-control" id="brandname" name="name">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <div class="form-check">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Enable</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">Disable</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>