<?php
    session_start();
    include("sqlbaglan.php");


    if(isset($_POST['username']) and isset($_POST['password'])){

        extract($_POST);


        $password= hasah('sha256', $password);

        $sql = "SELECT * FROM 'uyeler' WHERE ";
        $sql = $sql . "kullaniciAdi='$username' and kullaniciSifre='$password'";

        $cevap = mysqli_query($baglanti, $sql);


        if(!$cevap){

            echo '<br>HATA:' . mysqli_error($baglanti);
        }

        $sayi = mysqli_num_rows($cevap);

        if($sayi == 1){


            $_SESSION['username']=$username;


        }   
        else{

            $mesaj= "<h1>Hatali ad veya sifre.</h1>";


        }



    }

        if(isset($_SESSION['username'])){

            header("Location:anasayfa.php");




        }
 

?>
<html>
    <head>
   <meta http-equiv="Content-Type" content="text/html;  
      charset=UTF-8" />
      <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-grid.min.css">

    </head>
   <body background="background.jpg">
        <center>
      <form action="<?php $_PHP_SELF ?>" method="POST"> 
         <?php  
            if(isset($mesaj)){ echo $mesaj;}  
            
            ?> 
         Kullanıcı Adı: 
         <input type="text" name="username"><br /> 
         Şifre:  
         <input type="password" name="password" ><br /><br /> 
         <input type="submit" value="GİRİŞ"/><br /><br /> 
         <a href="kayitol.php">[Kayıt Ol]</a> 
      </form>
         </center>
   </body>
   
</html>
  <!-- 
         verileri gonderemiyor kayitol.php de sıkıntı var.



    -->

