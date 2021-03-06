<?php include "partials/head.php"; ?>

<?php
    $carObj = new Car;
    $car = $carObj->getOneCar($_GET['id']);
    $dosyayolu = $media_path . $car->pic;
?>

<link rel="stylesheet" media="all" type="text/css" href="vendor/upload/css/fileinput.min.css">
<link rel="stylesheet" type="text/css" media="all" href="vendor/upload/themes/explorer-fas/theme.min.css">
<script src="vendor/upload/js/fileinput.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/upload/themes/fas/theme.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/upload/themes/explorer-fas/theme.minn.js" type="text/javascript" charset="utf-8"></script>

<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Araba Güncelle</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body"></div>
                        <form action="carTasks.php?task=carEdit" method="post" enctype="multipart/form-data">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Modeli</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="name" class="form-control" value="<?=$car->name?>">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="stock" class="form-control" value="<?=$car->stock?>">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Durumu</label>
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                <input type="radio" name="status" value="1" class="custom-switch-input" <?php if($car->status=="1") echo checked; ?>>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Müsait</span>
                                </label>
                                <label class="custom-switch">
                                <input type="radio" name="status" value="0" class="custom-switch-input" <?php if($car->status=="0") echo checked; ?>>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Müsait Değil</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Resim</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" id="projedosya" name="project_file" multiple>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Açıklaması</label>
                            <div class="col-sm-12 col-md-7">
                            <textarea class="summernote" name="description" id="editor" style="width:100%; height:200px;"><?=$car->info?></textarea>
                            </div>
                        </div>
                        
                        <?php if($_GET['status'] == "update"){ ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                <input type="hidden" name="car_id" value="<?=$car->id?>">
                                <button class="btn btn-primary" name="submit">Kaydet</button>
                                </div>
                            </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>

<?php include "partials/footer.php"; ?>
<script src="vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>

<?php 
if (strlen($dosyayolu)>10) {?>
    <script>
        $(document).ready(function () {
            var url1='<?php echo $dosyayolu ?>'
            $("#projedosya").fileinput({
                'theme': 'explorer-fas',
                'showUpload': false,
                'showCaption': true,
                'showDownload': true,
            //  'initialPreviewAsData': true,
            allowedFileExtensions: ["jpg", "png", "jpeg", "mp4", "zip", "rar"],
            initialPreview: [
            '<img src="<?php echo $dosyayolu ?>" style="height:100px" class="file-preview-image" alt="Dosya" title="Dosya">'
            ],
            initialPreviewConfig: [
            {downloadUrl: url1,
                showRemove: false,
            },
            ],
        });

        });
    </script>
<?php } else { ?>
    <script>
        $(document).ready(function () {
            $("#projedosya").fileinput({
                'theme': 'explorer-fas',
                'showUpload': false,
                'showCaption': true,
                'showDownload': true,
            //  'initialPreviewAsData': true,
            allowedFileExtensions: ["jpg", "png", "jpeg", "mp4", "zip", "rar"],
        });

        });
    </script>
<?php } ?>

</body>
</html>