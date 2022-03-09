<style>
    .hidden {
        display: none;
    }

    .list-banner-item {
        margin-bottom: 5px;
        border: 1px solid #e1e1e1;
        padding: 15px 15px;
    }

    .title-collapse {
        cursor: pointer;
    }

    .btn-close-item {
        right: 15px;
        top: 8px;
        z-index: 1;
    }

    .pst-relative {
        position: relative;
    }

    .pst-absolute {
        position: absolute;
    }
</style>
<div class="box-header">
    <h3 class="box-title">Banner homepage</h3>
</div>
<div class="box-body">
    <form action="" class="form-group" method="POST" enctype="multipart/form-data">
        <section class="banner-box">
            <div class="data_banner_clone hidden form-group">
                <div class="list-banner-item pst-relative">
                    <div class="font-bold title-collapse" data-toggle="collapse" data-key="" data-target="" aria-expanded="false"><strong>Banner Item</strong></div>
                    <button class="pst-absolute btn-close-item btn btn-dark"><i class="fa fa-times"></i></button>
                    <div class="collapse" id="">
                        <div class="content">
                            <label for="data_banner">Tittle</label>
                            <textarea class="form-control title1"></textarea>
                            <div class="form-group">
                                <label for="imagename">Select Image File to Upload:</label>
                                <input type="file" class="form-control" id="imagename" name="image" accept="image/*">
                                <div id='img_contain'>
                                    <img id="image-preview" src="../img/header/1.jpg" alt="your image" title='' height="250" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="data_banner" class="form-group">
                <div class="list_banner" data-list-banner="">
                    <input class="hidden" type="text" name="lst_banner" value="" />
                    <div class="list-banner-item pst-relative form-group">
                        <div class="font-bold title-collapse pst-relative display-block" data-toggle="collapse" data-key='' data-target="#collapseBanner_" aria-expanded="false"><strong>Banner Item</strong></div>
                        <button class="pst-absolute btn-close-item btn btn-dark"><i class="fa fa-times"></i></button>
                        <div class="collapse" id="collapseBanner_">
                            <div class="content">
                                <label for="data_banner">Tittle</label>
                                <textarea class="form-control title1"></textarea>
                                <div class="form-group">
                                    <label for="imagename">Select Image File to Upload:</label>
                                    <input type="file" class="form-control" id="imagename" name="image" accept="image/*">
                                    <div id='img_contain'>
                                        <img id="image-preview" src="../img/header/1.jpg" alt="your image" title='' height="250" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="add_banner_item btn btn-success">More banner</button>
            </div>
        </section>
        <section class="form-submit">
            <input type="submit" class="btn btn-primary" name="submit" value="Add" />
            <input type="reset" class="btn btn-default" value="Reset" />
        </section>
    </form>
</div>