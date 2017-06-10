<?php
   include("connect.php");
   session_start();

   // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['uyeadi'])!="" ) {
  header("Location: anasayfa.html");
  exit;
 }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uyeadi']);
      $mypassword = mysqli_real_escape_string($db,$_POST['sifre']); 
      
      $sql = "SELECT * FROM uyeler WHERE uyeadi = '$myusername' and sifre = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: anasayfa.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: giris.html");
      }
   }
?>