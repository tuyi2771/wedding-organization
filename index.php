<?php
 ob_start();
 session_start();
 require_once 'connect.php';

// it will never let you open index(login) page if session is set
 if ( isset($_SESSION['uyeadi'])!="" ) {
  header("Location: anasayfa.html");
  exit;
 }else{
 	header("Location: giris.html");
 }
 ?>