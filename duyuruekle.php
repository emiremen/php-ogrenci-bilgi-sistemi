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

<article><header>Duyuru Ekle</header>

<form action="duyurukaydet.php" method="post">

<table class="kayit" border="0px" style="width:80%;margin:15px;font-size:19px;">

<tr><td>Konu</td><td><input type="text" name="konu"/></td></tr>
<tr><td>Duyuru</td><td><textarea name="duyuru" cols="100" rows="15"></textarea></td><tr>
<tr><td></td><td><button class="button" type="submit" name="duyurukaydet">Duyuru Ekle</button></td></tr>
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