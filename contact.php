<?php include "partials/header.php" ?> 
<?php
  if(!empty($_POST)){
    $connect = new Contact;
    $connect->inserts($_POST);
  }
?>
    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('assets/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Bize Ulaşın</h1>
              <p>Car Rent İletişim Merkezi</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Bize Ulaşın Veya Araç Kiralamak İçin Bu Formu Kullanın</h2>
          <p>Bizlere 444 4 937 no’lu Enterprise İletişim Merkezi hattımızdan 7 gün 24 saat ulaşabilirsiniz. İletişim Merkezimizden, araç kiralama rezervasyonu yapabilir, yol yardım hattımıza ulaşabilir ve bizlerle paylaşmak istediğiniz tüm talep, öneri, görüş ve sorularınızı iletebilirsiniz!</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="contact.php" method="POST">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="firstname" required placeholder="İsim">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="surname" required placeholder="Soyisim">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" name="email" required placeholder="Email adresi">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="" class="form-control" required placeholder="Mesajınız" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Mesaj Gönder">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">İletişim Bilgileri</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Adres:</span>
                  <span>Tem Otoyolu Kavacık Kavşağı, Ford Plaza Kat:4 - Beykoz / İstanbul</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Telefon:</span><span>+90 216 680 08 91</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@carrent.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include "partials/footer.php" ?>