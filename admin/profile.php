<?php include "partials/head.php"; ?>
<?php $user = $userObj->getAdminUser();?>
<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Yetkili Kullanıcı</h1>
      </div>

      <div class="section-body">
        <div class="card author-box card-primary">
          <div class="card-body">
            <div class="author-box-left">
              <img alt="image" src="<?=$media_path.$user->avatar?>" class="rounded-circle author-box-picture">
              <div class="clearfix"></div>
              <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a>
            </div>
            <div class="author-box-details">
              <div class="author-box-name">
                <a href="#"><?=$user->fullname?></a>
              </div>
              <div class="author-box-job">Web Developer</div>
              <div class="author-box-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
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