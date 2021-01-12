<?php include "partials/head.php"; ?>
<?php    
    $carObj = new Car;
    $cars = $carObj->getAllCars();
?>
<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Araba Listesi</h1>
        </div>

        <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h4>Sipariş Listesi</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1" style="text-align:center;">
                    <thead>
                        <tr>
                        <th class="text-center">
                            #
                        </th>
                        <th>Modeli</th>
                        <th>Resmi</th>
                        <th>Bilgisi</th>
                        <th>Stok</th>
                        <th>Durum</th>
                        <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $sayi=0; foreach($cars as $car){ $sayi++; ?>
                    <tr>
                        <td><?=$sayi?></td>
                        <td width="15%"><?=$car->name?></td>
                        <td><img src="<?=$media_path.$car->pic?>" class="small-image"></td>
                        <td><?=substr($car->info,0,200)?></td>
                        <td><?=$car->stock?></td>
                        <td width="15%">
                            <?php if($car->status == "0"){ ?>
                                <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Müsait Değil</a>
                            <?php }else{ ?>
                                <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-check"></i> Müsait</a>
                            <?php } ?>
                        </td>
                        <td width="15%">                            
                            <a href="updateCar.php?id=<?=$car->id?>&status=update" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                            <a href="#" onClick="carSil(<?=$car->id.',\''.$car->pic.'\''?>)" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                            <a href="updateCar.php?id=<?=$car->id?>&status=show" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</div>

<?php include "partials/footer.php"; ?>
<script>
  function carSil(id,img_name){
    swal({
      title: 'Emin Misin?',
      text: 'Siliyorum Bak Tekrar Düşün!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {        
        $.ajax({
            type		: "GET",
            url			: "carTasks.php",
            data		: {task:'carDelete',id:id,img_name:img_name},
            success		: function(ajaxData){
            if(ajaxData>0){
              swal({
                  text: "Poof! Sildim!",
                  icon: "success"
              }).then(function() {
                  window.location.href = "listCar.php";
              });              
              }else{
                swal('Ah Üzgünüm! Bir Hata Oluştu!', {icon: 'error'});
              }
			}
        });
      } else {
        swal('Vazgeçtin!');
      }
    });
  }
</script>
</body>
</html>
