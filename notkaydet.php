<?php
include ('connect.php');

session_start();


$ogrencino=$_SESSION['no'];
$ders_kodu=$_POST['ders_kodu'];
$vize=$_POST['vize'];
$final=$_POST['final'];
$not_ortalama=$vize*0.4+$final*0.6;

$ogrenciIdSorgu=mysqli_fetch_array( mysqli_query($baglan," SELECT id FROM ogrenciler WHERE ogrencino='$ogrencino' ") );
$ogrenci_id=$ogrenciIdSorgu[0];

$dersIdSorgu=mysqli_fetch_array( mysqli_query($baglan," SELECT id FROM dersler WHERE ders_kodu='$ders_kodu' ") );
$ders_id=$dersIdSorgu[0];

//$vizenotkontrol=mysqli_query($baglan," SELECT ders_adi, vize FROM ogrenci_ders od JOIN dersler d ON od.ogrenci_id='$ogrenci_id' AND d.id=od.ders_id ");



$not_kaydet=mysqli_query($baglan," UPDATE ogrenci_ders SET vize='$vize', final='$final', not_ortalama='$not_ortalama' WHERE ogrenci_id='$ogrenci_id' and ders_id='$ders_id' ");



if($not_kaydet)
{

	echo "Bilgiler veritabanına kaydedilmiştir.";
}
else
{
	echo "Bilgiler kaydedilirken bir sorun oluştu.";
}

header ("refresh:2, url=notgiris.php");
?>