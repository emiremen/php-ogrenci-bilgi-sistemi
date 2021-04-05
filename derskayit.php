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

<article><header>Ders Kaydı</header>
<form action="derskaydet.php" method="post">
<button class="button" type="submit" style="float:right;margin-top:-73px;margin-right:-10px;padding:15 30 15 30;">Kaydet</button>
<table class="tg">
  <tr>
    <th class="tg-yw4l">Kayıtlı</th>
    <th class="tg-yw4l">Ders Adı</th>
    <th class="tg-yw4l">Kredisi</th>
  </tr>


<?php 

$sessionAd=$_SESSION['ad'];
$sessionNo=$_SESSION['no'];

$derscek=mysqli_query($baglan,"SELECT DISTINCT ders_adi, kredi, dersler.id FROM dersler JOIN ogrenciler ON ogrenciler.ogrencino='$sessionNo'");

while($dersListele = mysqli_fetch_array( $derscek ) )
{

echo "<tr>
    <td class=\"tg-yw4l\"><input type=\"checkbox\" name=\"dersid[]\"" . $dersListele[2] . "\" value=\"" . $dersListele[2] . "\"/></td>
    <td class=\"tg-b7b8\">".$dersListele[0]."</td>
    <td class=\"tg-yw4l\">".$dersListele[1]."</td>
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