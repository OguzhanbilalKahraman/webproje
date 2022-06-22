<?php
    include("sqlbaglan.php");
    extract($_POST);


    $sql = "UPDATE uyeler".  
           "SET kullaniciAdi= '$kullaniciAdi', kullaniciSoyadi='$kullaniciSoyadi', kullaniciTelNo='$kullaniciTelNo', tarih='$tarih' ". 
           "WHERE uyeID=" .$_GET['id'];

    $cevap = mysqli_query ($baglanti, $sql);


    if(!$cevap)
        echo '<br>HATA: ' . mysqli_error($baglanti);

    
    else {

        echo  "Kayit Guncellendi."."<br>";
        echo  "<br><a href='listele.php'>Listele</a>\n";


    }
    echo "anasayfa <a href='anasayfa.php'>tikla</a>\n";


    mysql_close($baglanti);
    




?>