<?php
    include("sqlbaglan.php");

    $sql = "DELETE FROM uyeler WHERE uyeID=".$_GET['id'];

    $cevap = mysqli_query($baglanti,$sql);

    if(!$cevap){
        echo '<br>HATA: ' .mysqli_error($baglanti);
    }
        
    else{
        echo "Kayit Silindi! </br>";
        echo "<a href='silmelistesi.php'> Listele </a> \n";


    }
    echo "anasayfa <a href='anasayfa.php'>tikla</a>\n";

    mysqli_close($baglanti);
    
?>
  <!-- 
            HATALAR:
            sql ile alakalı bir hata veriyor ama yine de kayit siliyor. 
            :D?


    -->