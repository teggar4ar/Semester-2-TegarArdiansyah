<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container-md">

    <div class="row mt-5">
        <div class="col">
          <figure class="text-center">
            <blockquote class="blockquote">
                 <p class="fs-2">Toko Elektronik Selalu Untung Dong</p>
            </blockquote>
            <figcaption class="blockquote-footer">
               Ayooo <cite title="Source Title">Beli Disini!!!</cite>
         </figcaption>
             </figure>
        </div>
    </div>

	<div class="row mt-3">
		<div class="col-md-8">
            <form method="POST">
            <div class="form-group row">
                <label for="customer" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin"> 
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for=" uts" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id=" jumlah" name=" jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
            </form>
		</div>
            <div class="col-md-4">
                <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Kulkas : 3.100.000</li>
                <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                <li class="list-group-item active">Harga sewaktu-waktu dapat berubah!</li>
                </ul>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <!-- PHP -->
    <?php

        // $customer = $_POST['customer'];
        // $produk = $_POST['produk'];
        // $jumlah = $_POST['jumlah']

        if(isset($_POST['submit']) && isset($_POST['produk']) ) :?>

        Nama Customer : <?= $_POST['customer'] ?>
        <br>
        Produk Pilihan : <?= $_POST['produk'] ?>
        <br>
        Jumlah Beli :  <?= $_POST['jumlah'] ?>

        <?php

            if($_POST['produk'] == "tv" && $_POST['jumlah'] >= 1 ) {
                $harga = 4200000 * $_POST['jumlah'];
                echo '<br>TOTAL HARGA : '. $harga;
            }

            elseif ($_POST['produk'] == "kulkas" && $_POST['jumlah'] >= 1 ) {
                $harga = 3100000 * $_POST['jumlah'];
                echo '<br>TOTAL HARGA : '. $harga;
            }

            elseif ($_POST['produk'] == "mesin" && $_POST['jumlah'] >= 1 ) {
                $harga = 3800000 * $_POST['jumlah'];
                echo '<br>TOTAL HARGA : '. $harga;
            }

        ?>

        <?php endif ?>    
    <!-- PHP -->
  </body>
</html>
