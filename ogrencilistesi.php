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
.tg .tg-yw4l{vertical-align:top;}
.tg .tg-b7b8{background-color:#f9f9f9;vertical-align:top;}

</style>

<section>

<article><header>Ders Kaydı</header>
<table class="tg">
  <tr>
    <th class="tg-yw4l">Öğrenci No</th>
    <th class="tg-yw4l">Ad Soyad</th>
    <th class="tg-yw4l">Sınıfı</th>
  </tr>


<?php 

$sessionAd=$_SESSION['ad'];
$sessionNo=$_SESSION['no'];



$ogrencicek=mysqli_query($baglan," SELECT DISTINCT ad,soyad FROM ogrenciler JOIN kimlikler ");

$sinifcek=mysqli_query($baglan," SELECT ogrencino, sinif FROM ogrenciler");

while($ogrenciListele = mysqli_fetch_array( $ogrencicek) and $sinifListele = mysqli_fetch_array( $sinifcek ) )
{

echo "<tr>
    <td class=\"tg-yw4l\">".$sinifListele[0]."</td>
    <td class=\"tg-b7b8\">". $ogrenciListele[0] . " " . $ogrenciListele[1]."</td>
    <td class=\"tg-yw4l\">".$sinifListele[1]."</td>
  </tr>";


}

?>

</table>
</form>
</article>


</section>

<?php
include 'aside.php';

?>

<?php
include 'footer.php';
?>