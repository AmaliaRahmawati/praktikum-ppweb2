<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <h3>Belanja Online</h3>
    <hr>

<form method="post" action="form_belanja.php">
<?php 
    $belanja = [
        "TV"=> 4200000,
        "Mesin Cuci"=> 3800000,
        "Kulkas"=> 3100000,
    ]
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Customer :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="customer" name="customer" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk : </label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah : </label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" type="number" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            
        </div>

        <!-- Daftar Harga -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-black" style="background-color: #B7B1F2">
                    Daftar Harga
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">TV: Rp 4.200.000</li>
                        <li class="list-group-item">Kulkas: Rp 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci: Rp 3.800.000</li>
                    </ul>
                </div>
                <div class="card-footer text-center text-black" style="background-color:rgb(214, 212, 247)">
                    Harga Dapat Berubah Setiap Saat
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- ngambil data form -->
<hr>
<?php
if (isset($_POST['submit'])) {
    $_nama = $_POST['customer'];
    $_produk = $_POST['produk'];
    $_jumlah = $_POST['jumlah'];
    $_total = $belanja[$_produk] * $_jumlah;  
}
?>


<!-- menampilkan hasil di web -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
<strong>Detail Pesanan</strong><br>
Nama Customer : <?=$_nama; ?><br>
Produk Pilihan : <?=$_produk; ?><br>
Jumlah beli : <?=$_jumlah; ?><br>
Total belanja : Rp <?=number_format($_total, 0, ',', '.'); ?><br>
<?php } ?>
 

</body>
</html>