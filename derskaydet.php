<?php
include ('connect.php');

session_start();



$ders_id=$_POST['dersid'];
$ogrencino=$_SESSION['no'];


$ogrenciIdSorgu=mysqli_fetch_array( mysqli_query($baglan," SELECT id FROM ogrenciler WHERE ogrencino='$ogrencino' ") );
$ogrenci_id=$ogrenciIdSorgu[0];


foreach ($ders_id as $key){
	$ders_kaydet=mysqli_query($baglan,"INSERT INTO ogrenci_ders (
								ogrenci_id,ders_id
								)
							VALUES(
							'$ogrenci_id','$key' 
							);
");
}


if($ders_kaydet)
{

	echo "Bilgiler veritabanına kaydedilmiştir.";
}
else
{
	echo "Bilgiler kaydedilirken bir sorun oluştu.";
}

header ("refresh:2, url=derskayit.php");
?>