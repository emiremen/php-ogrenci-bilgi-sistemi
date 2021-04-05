<?php
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

<section>

<article><header>Yeni Öğrenci Kaydı</header>
<form action="ogrencikaydet.php" method="post">
<table class="kayit" border="0px" style="width:80%;margin:15px;font-size:19px;">
<tr><td width="20%">Adı</td><td><input type="text" name="ad"  style="text-transform:capitalize;"/></td></tr>
<tr><td>Soyadı</td><td><input type="text" name="soyad"  style="text-transform:capitalize;"/></td></tr>
<tr><td>TC No</td><td><input type="text" name="tc" maxlength="11"/></td></tr>
<tr><td>Cinsiyet</td><td><input type="radio" name="cinsiyet" value="kadın" style="width:auto;height:auto;font-size:18px;"/>Kadın<input type="radio" name="cinsiyet" value="erkek" style="width:auto;height:auto;font-size:18px;"/>Erkek</td></tr>
<tr><td>Doğum Tarihi</td><td><input type="text" name="dogum_tarihi" placeholder="yyyy.aa.gg" maxlength="10"/></td></tr>
<tr><td>Doğum Yeri</td><td><input type="text" name="dogum_yeri"  style="text-transform:capitalize;"/></td></tr>
<tr><td>Medeni Hali</td><td><input type="radio" name="medeni_hal" value="evli" style="width:auto;height:auto;font-size:18px;"/>Evli<input type="radio" name="medeni_hal" value="bekar" maxlength="5" style="width:auto;height:auto;font-size:18px;"/>Bekar</td></tr>

<tr><td colspan="2" style="color:green;font-weight:bold;"><br>Yeni Öğrenci Bilgileri Belirleyin<br></td>
<tr><td>Öğrenci No</td><td><input type="text" name="ogrencino" /></td></tr>
<tr><td>Öğrenci Şifresi</td><td><input type="text" name="ogrencisifre" /></td></tr>
<tr><td>Sınıf</td><td><input type="radio" name="sinif" value="1" style="width:auto;height:auto;font-size:18px;"/>1<input type="radio" name="sinif" value="2" style="width:auto;height:auto;font-size:18px;"/>2</td></tr>

<tr><td colspan="2" style="color:green;font-weight:bold;"><br>Yeni Bölüm Bilgileri Belirleyin<br></td>
<tr><td>Bölüm Adı</td><td><input type="text" name="bolum_adi"  style="text-transform:capitalize;"/></td></tr>
<tr><td>Programı</td><td><input type="text" name="programi"  style="text-transform:capitalize;"/></td></tr>

<tr><td colspan="2" style="color:green;font-weight:bold;"><br>Yeni Adres Bilgileri Belirleyin<br></td>
<tr><td>İl</td><td><input type="text" name="il"  style="text-transform:capitalize;"/></td></tr>
<tr><td>Posta Kodu</td><td><input type="text" name="posta_kodu" /></td></tr>
<tr><td>İlçe</td><td><input type="text" name="ilce"  style="text-transform:capitalize;"/></td></tr>
<tr><td>Mahalle</td><td><input type="text" name="mahalle"  style="text-transform:capitalize;"/></td></tr>

<tr><td></td><td><button class="button" type="submit">Kaydet</button>
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