<?php
    $server = 'kuaforotomasyon.6te.net';
    $user = 'kuaforotomasyon.6te.net';
    $password = '933593Sa.';
    $database = 'kuaforoto';



    $baglanti = mysqli_connect($server, $user, $password, $database);

    if(!$baglanti){  echo "mySql baglanti kuramadi! </br>";
        echo "hata: ". mysqli_connect_error();
        exit;
  }

    echo "mySql baglanti kurdu. </br>";    
?>