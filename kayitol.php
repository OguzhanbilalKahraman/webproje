<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-grid.min.css">
    
</head>


<body>


    <?php

        include("sqlbaglan.php");


        $kullaniciAdi= $_POST['kullaniciAdi'];

        $kullaniciSoyadi= $_POST['kullaniciSoyadi'];

        $kullaniciTelNo= $_POST['kullaniciTelNo'];

        $tarih= $_POST['tarih'];




        $sql = "INSERT INTO uyeler". 
               "(kullaniciAdi,kullaniciSoyadi,kullaniciTelNo,tarih)". 
               "VALUES ('$kullaniciAdi','$kullaniciSoyadi','$kullaniciTelNo','$tarih')";

        echo $sql;
        echo "<br/>";

        $cevap = mysqli_query( $baglanti,$sql);

        if(!$cevap){
            echo '<br> Hata:'.mysqli_error($baglanti);
        }
            

        else{
            echo "Veritabanina eklendi, kayitlari gormek icin";
            echo " <a href='listele.php'> KayitListele </a>\n";

        }





        mysqli_close($baglanti);

        



        


    ?>



</body>
</html>
  <!-- 
            HATALAR:
            post ile verileri cekemiyor.



    -->