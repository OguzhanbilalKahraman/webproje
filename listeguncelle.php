<?php
    include("sqlbaglan.php");


    $sql = "SELECT * FROM uyeler";


    $cevap = mysqli_query($baglanti,$sql);

    if(!$cevap){
        echo '<br>HATA: ' . mysqli_error($baglanti);
    }
        


    echo "<table border=1>";
    echo "<tr>";
    echo "<th>uyeID<th>";
    echo "<th>kullaniciAdi<th>";
    echo "<th>kullaniciSoyadi<th>";
    echo "<th>kullaniciTelNo<th>";
    echo "<th>tarih<th>";
    echo "</tr>";


    while($gelen=mysqli_fetch_array($cevap)){
        
        echo "<tr><td>". $gelen['uyeID']. "</td>";
        echo "<td>". $gelen['kullaniciAdi']. "</td>";
        echo "<td>". $gelen['kullaniciSoyadi']. "</td>";
        echo "<td>". $gelen['kullaniciTelNo']. "</td>";
        echo "<td>". $gelen['tarih']. "</td>";
        echo "<td><a href=guncelle.php?id=";
        echo $gelen['uyeID'];
        echo ">Guncelle</a></td></tr>";    
    }
    echo "</table>";
    
    echo "<br/><a href='anasayfa.php'> Anasayfa </a>";


    mysqli_close($baglanti);
    
?>

  <!-- 
            herhangi bir sıkıntı yok guncelliyor.



    -->