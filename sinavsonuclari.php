<?php
include 'connect.php'; 
include 'header.php'; 
session_start();
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:index.php");
}
?>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width:95%;margin:25px;}
.tg td{font-family:Arial, sans-serif;font-size:18px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;text-align:center;}
.tg th{font-family:Arial, sans-serif;font-size:18px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-yw4l{vertical-align:top;width:20px;height:20px;}
.tg .tg-b7b8{background-color:#f9f9f9;vertical-align:top;}

</style>

<section>

<article><header>Sınav Sonuçları</header>
<table class="tg">
  <tr>
    <th class="tg-yw4l">Ders Adı</th>
	<th class="tg-yw4l">Vize</th>
	<th class="tg-yw4l">Final</th>
	<th class="tg-yw4l">Ortalama</th>
  </tr>


<?php 

$sessionAd=$_SESSION['ad'];
$sessionNo=$_SESSION['no'];
//$sessionBolum_id=$_SESSION['bolum_id'];

$ogrenci_idcek=mysqli_query($baglan,"SELECT DISTINCT ogrenci_id FROM ogrenci_ders JOIN ogrenciler ON ogrenciler.id=ogrenci_ders.ogrenci_id WHERE ogrenciler.ogrencino='$sessionNo'");
$ogrenci_idcek=$ogrenci_idcek->fetch_object();
$ogrenci_idBlgisi = $ogrenci_idcek->ogrenci_id;

/*
while($ogrenci_idListele = mysqli_fetch_array( $ogrenci_idcek ) )
{
	$ogrenci_idBlgisi = $ogrenci_idListele[0];
}
*/

$derscek=mysqli_query($baglan,"SELECT DISTINCT dersler.ders_adi, ogrenci_ders.vize, ogrenci_ders.final, ogrenci_ders.not_ortalama FROM dersler JOIN ogrenci_ders ON ogrenci_ders.ogrenci_id='$ogrenci_idBlgisi' AND ogrenci_ders.ders_id=dersler.id");

while($dersListele = mysqli_fetch_array( $derscek ) )
{

echo "<tr>
    <td class=\"tg-b7b8\">".$dersListele[0]."</td>
    <td class=\"tg-yw4l\">".$dersListele[1]."</td>
	<td class=\"tg-b7b8\">".$dersListele[2]."</td>
	<td class=\"tg-yw4l\">".$dersListele[3]."</td>
  </tr>";


}

?>

</table>
</article>


</section>

<?php
include 'aside.php';

?>

<?php
include 'footer.php';
?>