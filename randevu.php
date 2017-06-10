<?php

include("connect.php");

$query = "SELECT * FROM salon WHERE tarih = '06/08/2017'";

$res = mysqli_query($db,$query);
$tarih = $_POST['tarih'];
if ($res == $tarih) {
    echo "<body style='background-color: #F8E0E0'><div align='center'><h2>Seçtiğiniz Tarih Dolu</h2></div><br><div align='center'><a href='randevu.html'>Yeni Tarih Seçmek İçin Tıklayın</a></div></body>";} 
    else {
        echo "<body style='background-color: #F8E0E0'><div align='center'><h2>Seçtiğiniz Tarih Uygun</h2></div><br><div align='center'><a href='iletisim.html'>İletişim için Tıklayın</a></div></body>";; 
   }

?>