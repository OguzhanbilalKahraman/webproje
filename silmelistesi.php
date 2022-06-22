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
    <?php
        include("sqlbaglan.php");
        $sql = "SELECT * FROM uyeler";
        $cevap = mysqli_query($baglanti,$sql);

        if(!$cevap ){
            echo '<br>HATA: ' . mysqli_error($baglanti);
        }
            
            echo "<table border=1>";
            echo "<tr><th>Uye ID</th><th>Adi</th><th>Soyadi</th><th>Telefon Numarasi</th><th>Tarih</th></tr>";

            while($gelen=mysqli_fetch_array($cevap)){


                echo "<tr><td>".$gelen['uyeID']."</td>";
                echo "<td>".$gelen['kullaniciAdi']."</td>";
                echo "<td>".$gelen['kullaniciSoyadi']."</td>";
                echo "<td>".$gelen['kullaniciTelNo']."</td>";
                echo "<td>".$gelen['tarih']."</td></tr>";
                echo "<td><a href=kayitsil.php?id=".$gelen['uyeID'].">Sil</a></td></tr>"; 
        
        
            }
        
            echo"</table>";

            echo "anasayfa <a href='anasayfa.php'>tikla</a>\n";


            mysql_close($baglanti);

    ?>
    <!-- 
            HATALAR:
            1 BACK GROUND CIKMIYOR



    -->
</body>
</html>