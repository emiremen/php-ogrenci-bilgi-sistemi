<?php
session_start();
ob_start();
include 'connect.php';

if($_POST['loginogrenci'])
{

$no=$_POST["no"];
$login=true;
$password=$_POST["password"];

if($no && $password)
{
	
	$loginsorgu=mysqli_query($baglan,"SELECT * FROM ogrenciler WHERE ogrencino='$no' and ogrencisifre='$password'");
	$adsoyadsorgu=mysqli_query($baglan,"SELECT ad, soyad FROM kimlikler JOIN ogrenciler ON ogrenciler.kimlik_id=kimlikler.id WHERE ogrenciler.ogrencino='$no'");
	
	$adsoyaddizi=mysqli_fetch_array($adsoyadsorgu);
	$ad=$adsoyaddizi['ad'];
	$soyad=$adsoyaddizi['soyad'];
	
	$verisay=mysqli_num_rows($loginsorgu);
	if($verisay>0)
	{
		$_SESSION['no']=$no;
		$_SESSION['login']=$login;
		$_SESSION['ad']=$ad;
		$_SESSION['soyad']=$soyad;
		header("location:indexogrenci.php");
	}
	else
	{
		header("location:index.php?login='$no'");
	}
	
}


}

else if($_POST['loginogretmen'])
{

$no=$_POST["no"];
$login=true;
$password=$_POST["password"];

if($no && $password)
{
	
	$loginsorgu=mysqli_query($baglan,"SELECT * FROM ogretmenler WHERE ogretmenno='$no' and ogretmensifre='$password'");
	$adsoyadsorgu=mysqli_query($baglan,"SELECT ad, soyad, bolum_id FROM ogretmenler WHERE ogretmenno='$no' and ogretmensifre='$password'");

	
	$adsoyaddizi=$adsoyadsorgu->fetch_array();
	$ad=$adsoyaddizi['ad'];
	$soyad=$adsoyaddizi['soyad'];
	//$bolum_id=$adsoyaddizi['bolum_id'];
	
?>	

<script>
function myFunction() {
  alert(<?php echo $bolum_id; ?>);
}
</script>
<?php		
	$verisay=mysqli_num_rows($loginsorgu);
	if($verisay>0)
	{
		$_SESSION['no']=$no;
		$_SESSION['login']=$login;
		$_SESSION['ad']=$ad;
		$_SESSION['soyad']=$soyad;
		//$_SESSION['bolum_id']=$bolum_id;
		
		header("location:indexogretmen.php");
	}
	else
	{
		header("location:index.php?login='$no'");
	}
	
}
}
else{
	echo " <span style=\" font-size:18px;text-align:center; \"> ";
	echo " Yanlış giriş bilgileri kullanarak giriş yaptınız. Lütfen tekrar deneyin. ";
	echo " </span> ";
	}


ob_end_flush();

?>