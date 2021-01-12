<?php include "partials/header.php" ?> 
<?php $sayfa = (isset($_GET['sayfa'])) ? ($_GET['sayfa']-1)*3 : 0; ?>
    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('assets/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Kiralık Araçlarımız</h1>
              <p>HER ZAMAN DAHA İYİSİ İÇİN</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <?php $i=$sayfa; while($i<$sayfa+3 && $i<count($cars)){ ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img style="width:350px;height:210px;" src="<?=$media_path.$cars[$i]->pic?>" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#"><?=$cars[$i]->name?></a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span><?=(!empty($cars[$i]->price))?$cars[$i]->price:'250';?>TL/</span>gün</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Kapı Sayısı</span>
                      <span class="spec"><?=(!empty($cars[$i]->door_number))?$cars[$i]->door_number:'4';?></span>
                    </li>
                    <li>
                      <span>Koltuk Sayısı</span>
                      <span class="spec"><?=(!empty($cars[$i]->seat_number))?$cars[$i]->seat_number:'4';?></span>
                    </li>
                    <li>
                      <span>Vites</span>
                      <span class="spec"><?=(!empty($cars[$i]->transmission))?$cars[$i]->transmission:'Otomatik';?></span>
                    </li>
                    <li>
                      <span>Yaşı</span>
                      <span class="spec"><?=(!empty($cars[$i]->age))?$cars[$i]->age:'1';?> yıl</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="contact.php" class="btn btn-primary">Şimdi Kirala</a>
                  </div>
                </div>
              </div>
          </div>
          <?php $i++;} ?>

          <div class="col-12">
            <?php for ($i = 1; $i <= ceil(count($cars)/3); $i++) {?>
            <a href="cars.php?sayfa=1" class="active p-3"><?=$i?></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

<?php include "partials/footer.php" ?>

