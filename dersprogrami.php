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
.tg .tg-yw4l{vertical-align:top;width:10px;}
.tg .tg-b7b8{background-color:#f9f9f9;vertical-align:top;width:10px;}

</style>

<section>

<article><header>Ders Programı</header>
<table class="tg">
  <tr>
	<th class="tg-yw4l">Ders Saati</th>
    <th class="tg-yw4l">Pazartesi</th>
    <th class="tg-yw4l">Salı</th>
    <th class="tg-yw4l">Çarşamba</th>
	<th class="tg-yw4l">Perşembe</th>
	<th class="tg-yw4l">Cuma</th>
  </tr>


<tr>
    <td class="tg-yw4l">09:00</td>
    <td class="tg-b7b8">İnternet Programcılığı</td>
    <td class="tg-yw4l">Grafik ve Tasarım</td>
	<td class="tg-b7b8">Veritabanı</td>
	<td class="tg-yw4l">Nesne Tabanlı Programlama</td>
	<td class="tg-b7b8">Ağ Yönetimi</td>
  </tr>
<tr>
    <td class="tg-yw4l">09:50</td>
    <td class="tg-b7b8">İnternet Programcılığı</td>
    <td class="tg-yw4l">Grafik ve Tasarım</td>
	<td class="tg-b7b8">Veritabanı</td>
	<td class="tg-yw4l">Nesne Tabanlı Programlama</td>
	<td class="tg-b7b8">Ağ Yönetimi</td>
  </tr>
  <tr>
    <td class="tg-yw4l">10:40</td>
    <td class="tg-b7b8">İnternet Programcılığı</td>
    <td class="tg-yw4l">Grafik ve Tasarım</td>
	<td class="tg-b7b8">Veritabanı</td>
	<td class="tg-yw4l">Nesne Tabanlı Programlama</td>
	<td class="tg-b7b8">Ağ Yönetimi</td>
  </tr>
  <tr>
    <td class="tg-yw4l">11:30</td>
    <td class="tg-b7b8">İnternet Programcılığı</td>
    <td class="tg-yw4l"></td>
	<td class="tg-b7b8">Veritabanı</td>
	<td class="tg-yw4l">Nesne Tabanlı Programlama</td>
	<td class="tg-b7b8">Ağ Yönetimi</td>
  </tr>
    <tr>
    <td class="tg-yw4l">13:00</td>
    <td class="tg-b7b8"></td>
    <td class="tg-yw4l">Web Tasarım</td>
	<td class="tg-b7b8"></td>
	<td class="tg-yw4l"></td>
	<td class="tg-b7b8"></td>
  </tr>
    <tr>
    <td class="tg-yw4l">13:50</td>
    <td class="tg-b7b8"></td>
    <td class="tg-yw4l">Web Tasarım</td>
	<td class="tg-b7b8"></td>
	<td class="tg-yw4l"></td>
	<td class="tg-b7b8"></td>
  </tr>
  
</table>
</article>


</section>

<?php
include 'aside.php';

?>

<?php
include 'footer.php';
?>