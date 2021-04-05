<?php
include ('connect.php');

session_start();



$konu=$_POST['konu'];
$duzensiz_duyuru=$_POST['duyuru'];
$ogrencino=$_SESSION['no'];

$duyuru=addslashes(nl2br($duzensiz_duyuru));

$duyuru_kaydet=mysqli_query($baglan,"INSERT INTO duyurular (
								konu, duyuru
								)
							VALUES(
							'$konu', '$duyuru' 
							);
");


if($duyuru_kaydet)
{

	echo "Bilgiler veritabanına kaydedilmiştir.";
}
else
{
	echo "Bilgiler kaydedilirken bir sorun oluştu.";
}

header ("refresh:2, url=duyuruekle.php");
?>