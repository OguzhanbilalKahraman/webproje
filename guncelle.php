<?php


include("sqlbaglan.php");

$sql = "SELECT * FROM uyeler WHERE uyeID =".$_GET['uyeID'];


$cevap = mysqli_query($baglanti,$sql);


if(!$cevap){

    echo '<br>HATA: ' . mysqli_error($baglanti);



}


$gelenCevap= mysqli_fetch_array($cevap);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-grid.min.css">
    
</head>
<body backgorund="dukkanici.jpg">
    <form action="guncelkayit.php?id=<?php echo $_GET['id'] ?>" method="POST"> 
    Adi:
    <input type="text" name="kullaniciAdi" value="<?php echo $gelenCevap['kullaniciAdi']?>" />    <br />

    Soyadi:
    <input type="text" name="kullaniciSoyadi" value="<?php echo $gelenCevap['kullaniciSoyadi']?>" />    <br />

    Telefon Numarasi:
    <input type="text" name="kullaniciTelNo" value="<?php echo $gelenCevap['kullaniciTelNo']?>" />    <br />

    Mail:
    <input type="date" name="tarih" value="<?php echo $gelenCevap['tarih']?>" />    <br />


    <input type="submit" value="Randevu Guncelle"/>
    
</body>
</html>