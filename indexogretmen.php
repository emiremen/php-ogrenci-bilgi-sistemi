<?php
include 'headerogretmen.php'; 
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

<article><header>Anasayfa</header><p>Merhaba sevgili <?php echo "<font color=\"tomato\">".$_SESSION['no']."</font>"; ?> numaralı <?php echo "<font color=\"tomato\">".$_SESSION['ad']." ".$_SESSION['soyad']."</font>"; ?>. Okulumuzun öğrenci bilgi sistemine hoşgeldiniz. Öğrenci işlemlerinizi bu sistem üzerinden gerçekleştirebilirsiniz. İşlemlerinizi bitiridikten sonra çıkış yapmayı unutmayınız.</p></article>


</section>

<?php
include 'ogretmenaside.php';

?>

<?php
include 'footer.php';
?>