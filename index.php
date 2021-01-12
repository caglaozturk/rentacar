<?php include "partials/header.php" ?> 

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('assets/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="feature-car-rent-box-1">
                <h3>Range Rover S7</h3>
                <ul class="list-unstyled">
                  <li>
                    <span>Kapı Sayısı</span>
                    <span class="spec">4</span>
                  </li>
                  <li>
                    <span>Koltuk Sayısı</span>
                    <span class="spec">6</span>
                  </li>
                  <li>
                    <span>Bagaj</span>
                    <span class="spec">2 Valiz/2 Çanta</span>
                  </li>
                  <li>
                    <span>Vites</span>
                    <span class="spec">Otomatik</span>
                  </li>
                  <li>
                    <span>Yaş</span>
                    <span class="spec">0</span>
                  </li>
                </ul>
                <div class="d-flex align-items-center bg-light p-3">
                  <span>300TL/gün</span>
                  <a href="#" onClick="Rent()" class="ml-auto btn btn-primary">Şimdi Kirala</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0 pb-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
              <form class="trip-form" action="#">
                <div class="row align-items-center mb-4">
                  <div class="col-md-6">
                    <h3 class="m-0">Aracınız Hazır</h3>
                  </div>
                  <div class="col-md-6 text-md-right">
                    <span class="text-primary">32</span> <span>araç kullanılabilir</span></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="cf-1">Alış Yeri</label>
                    <input type="text" id="cf-1" placeholder="Kiralayacağınız Yer" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="cf-3">Alış Tarihi</label>
                    <input type="text" id="cf-3" placeholder="Kiralayacağınız Tarih" class="form-control datepicker px-3">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="cf-4">Dönüş Tarihi</label>
                    <input type="text" id="cf-4" placeholder="Döneceğiniz Tarih" class="form-control datepicker px-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <a href="#" onClick="Rent()" class="ml-auto btn btn-primary">Şimdi Kirala</a>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h5><b>Müşteri Memnuniyeti</b></h5>
            <p class="mb-4">Aylık araç kiralamanın da kolay yolu GRSCAR'da. İster kurumsal ister bireysel aylık araç ihtiyaçlarınızda keyifli bir deneyim yaşatmak için hizmetinizdeyiz.</p>
            <p>
              <a href="#" class="btn btn-primary custom-prev">İleri</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next">Geri</a>
            </p>
          </div>
          <div class="col-lg-9">

            <div class="nonloop-block-13 owl-carousel">
              <?php foreach($cars as $car){ ?>
              <div class="item-1">
                <a href="#"><img style="width:400px;height:250px;" src="<?=$media_path.$car->pic?>" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#"><?=$car->name?></a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span><?=$car->price?>TL/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Kapı Sayısı</span>
                      <span class="spec"><?=$car->door_number?></span>
                    </li>
                    <li>
                      <span>Koltuk Sayısı</span>
                      <span class="spec"><?=$car->seat_number?></span>
                    </li>
                    <li>
                      <span>Vites</span>
                      <span class="spec"><?=$car->transmission?></span>
                    </li>
                    <li>
                      <span>Yaş</span>
                      <span class="spec"><?=$car->age?> yıllık</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="contact.php" class="btn btn-primary">Rent Now</a>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-3" style="background-image: url('assets/images/hero_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-white">Fırsatlarımız</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-car-1"></span>
              </span>
              <div class="service-1-contents">
                <h3>Taksitle Araç Kirala!</h3>
                <p>Maximum kredi kartlarına özel olarak peşin fiyatına 3 taksitle araç kiralayabilirsiniz. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-traffic"></span>
              </span>
              <div class="service-1-contents">
                <h3>Erken Rezervasyon Fırsatı</h3>
                <p>Kampanyamız l erken rezervasyon fırsatınızı sunmaktadır.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-valet"></span>
              </span>
              <div class="service-1-contents">
                <h3>Enflasyonla Topyekün Mücadele!</h3>
                <p>Türkiye ekonomisinin hak ettiği seviyeye ulaşması için araç kiralama artık %10 indirimli.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include "partials/footer.php" ?>
<script>
  function Rent(){
    swal("Mükemmel!", "Aracınız Kiralandı!", "success");
  }
  window.onload = function(){
    document.querySelector('.owl-nav').style.visibility = 'hidden';  
    document.querySelector('.owl-dots').style.visibility = 'hidden';  
  };
</script>