<?php
include ('connect.php');

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tc=$_POST['tc'];
$cinsiyet=$_POST['cinsiyet'];
$dogum_yeri=$_POST['dogum_yeri'];
$dogum_tarihi=$_POST['dogum_tarihi'];
$medeni_hal=$_POST['medeni_hal'];

$bolum_adi=$_POST['bolum_adi'];
$programi=$_POST['programi'];

$il=$_POST['il'];
$posta_kodu=$_POST['posta_kodu'];
$ilce=$_POST['ilce'];
$mahalle=$_POST['mahalle'];

$ogrencino=$_POST['ogrencino'];
$ogrencisifre=$_POST['ogrencisifre'];
$sinif=$_POST['sinif'];


$ogrenci_kaydet=mysqli_query($baglan,"INSERT INTO kimlikler (
								ad,soyad,tc,cinsiyet,dogum_yeri,dogum_tarihi,medeni_hal
								)
							VALUES(
							'$ad','$soyad','$tc','$cinsiyet','$dogum_yeri','$dogum_tarihi','$medeni_hal'
							);
");

$ogrenci_kaydet=mysqli_query($baglan,"INSERT INTO bolumler (
								bolum_adi,programi
								)
							VALUES(
							'$bolum_adi','$programi'
							);
");

$ogrenci_kaydet=mysqli_query($baglan,"INSERT INTO adresler (
								il,posta_kodu,ilce,mahalle
								)
							VALUES(
							'$il','$posta_kodu','$ilce','$mahalle'
							);
");

	

if($ogrenci_kaydet)
{
	
	$yeniOgrenciKimlikId = mysqli_fetch_array( mysqli_query($baglan, "SELECT id FROM kimlikler WHERE tc = '$tc'" ) );
	$yeniOgrenciBolumId = mysqli_fetch_array( mysqli_query($baglan, "SELECT id FROM bolumler WHERE bolum_adi = '$bolum_adi' and programi='$programi'" ) );
	$yeniOgrenciAdresId = mysqli_fetch_array( mysqli_query($baglan, "SELECT id FROM adresler WHERE il='$il' and posta_kodu='$posta_kodu' and ilce='$ilce' and mahalle='$mahalle'" ) );
	
	$ogrenciKimlikId=$yeniOgrenciKimlikId['id'];
	$ogrenciBolumId=$yeniOgrenciBolumId['id'];
	$ogrenciAdresId=$yeniOgrenciAdresId['id'];
	
	$digerBilgilerSQL = mysqli_query($baglan,"INSERT INTO ogrenciler (
								ogrencino,ogrencisifre,sinif,kimlik_id,bolum_id,adres_id
								)
							VALUES(
							'$ogrencino','$ogrencisifre','$sinif','$ogrenciKimlikId','$ogrenciBolumId','$ogrenciAdresId'
							)
");

	
	echo "Bilgiler veritabanına kaydedilmiştir.";
}
else
{
	echo "Bilgiler kaydedilirken bir sorun oluştu.";
}

header ("refresh:2, url=yeniogrenci.php");

?>