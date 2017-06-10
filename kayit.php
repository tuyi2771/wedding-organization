<?php
 ob_start();
 session_start();
 if( isset($_SESSION['uyeadi'])!="" ){
  header("Location: anasayfa.html");
 }
 include_once 'connect.php';

 $error = false;

 if ( isset($_POST['submit']) ) {
  
  // clean user inputs to prevent sql injections
  $uyeadi = $_POST['uyeadi'];

  $sifre = $_POST['sifre'];

  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO uyeler(uyeadi,sifre) VALUES('$uyeadi','$sifre')";
   $res = mysqli_query($db,$query);
   if ($res) {
    echo "<body style='background-color: #F8E0E0'><div align='center'><h2>KAYIT BAŞARILI</h2></div><br><div align='center'><a href='giris.html'>Giriş Yapmak İçin Tıklayın</a></div></body>";
    
   } else {
        echo "Kayıtta hata!"; 
   } 
    
  }
  
  
 }
?>