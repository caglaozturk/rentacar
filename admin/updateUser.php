<?php include "partials/head.php"; ?>

<link rel="stylesheet" media="all" type="text/css" href="vendor/upload/css/fileinput.min.css">
<link rel="stylesheet" type="text/css" media="all" href="vendor/upload/themes/explorer-fas/theme.min.css">
<script src="vendor/upload/js/fileinput.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/upload/themes/fas/theme.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/upload/themes/explorer-fas/theme.minn.js" type="text/javascript" charset="utf-8"></script>

<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>
<?php
    $user = $userObj->getOneUser($_GET['id']);
?>
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Kullanıcı Güncelle</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body"></div>
                        <form action="userTasks.php?task=userEdit&userId=<?=$user->id?>" method="post">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">İsim Soyisim</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="fullname" class="form-control" value="<?=$user->fullname?>">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="email" name="email" class="form-control datepicker"  value="<?=$user->email?>">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Position</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="position" class="form-control datepicker"  value="<?=$user->user_position?>">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                <input type="radio" name="username" value="admin" class="custom-switch-input" <?php if($user->username=="admin") echo checked; ?>>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Admin</span>
                                </label>
                                <label class="custom-switch">
                                <input type="radio" name="username" value="yetkili" class="custom-switch-input" <?php if($user->username=="yetkili") echo checked; ?>>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Yetkili</span>
                                </label>
                                <label class="custom-switch">
                                <input type="radio" name="username" value="garson" class="custom-switch-input" <?php if($user->username=="garson") echo checked; ?>>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Garson</span>
                                </label>
                            </div>
                        </div>
                        
                        <?php if($_GET['status'] == "update"){ ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary" name="submit" type="submit">Kaydet</button>
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
</body>
</html>