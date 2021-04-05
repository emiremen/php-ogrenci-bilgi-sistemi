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
<form action="notkaydet.php" method="post">
<button class="button" type="submit" style="float:right;margin-top:-73px;margin-right:-10px;padding:15 30 15 30;">Kaydet</button>
<table class="tg">
  <tr>
    <th class="tg-yw4l">Öğrenci No</th>
    <th class="tg-yw4l">Ders Kodu</th>
    <th class="tg-yw4l">Vize</th>
	<th class="tg-yw4l">Final</th>
  </tr>


<tr>
    <td class="tg-yw4l"><input type="text" name="ogrencino"/></td>
    <td class="tg-b7b8"><input type="text" name="ders_kodu" style="text-transform:uppercase;"/></td>
    <td class="tg-yw4l"><input type="text" name="vize"/></td>
	<td class="tg-b7b8"><input type="text" name="final"/></td>
  </tr>

</table>
</form>
</article>


</section>

<?php
include 'ogretmenaside.php';

?>

<?php
include 'footer.php';
?>