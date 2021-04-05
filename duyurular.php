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

<section>

<?php

$duyurucek=mysqli_query($baglan,"SELECT konu, duyuru FROM duyurular");

while($duyuruListele = mysqli_fetch_array( $duyurucek ) )
{

echo "<article style=\"min-height:35%;font-size:18px;\"><header>". $duyuruListele[0] ."</header><p>
		". $duyuruListele[1] ."
		</p></article>";

}
?>

</section>

<?php
include 'aside.php';

include 'footer.php';

?>


