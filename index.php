<html>
<head><title>Giriş Paneli</title></head>
<body onload="myFunction()" style="background: linear-gradient(#036771,#026979,#826b49);">

<style>
body {font-family: Arial;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
}
</style>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'ogrenci')" id="defaultOpen">Öğrenci Girişi</button>
  <button class="tablinks" onclick="openCity(event, 'ogretmen')">Öğretmen Girişi</button>
</div>

<div id="ogrenci" class="tabcontent">
  <div style="
	
	font-family:calibri;
	width:400px;
	height:400px;
	margin:auto;">

	<form action="login.php" method="post">
	<table style="color:#dadada;font-size:18px;font-weight:bold;margin:auto;">
	<tr><td><br><br><br><br><br><br><br></td></tr>
	<tr><td>Öğrenci No</td><td><input type="text" name="no" placeholder="Okul no girin." autofocus="autofocus" style="font-size:18px;border:#eaeaea;padding:7px;"></input></td></tr>
	<tr><td>Şifre</td><td><input type="password" name="password" placeholder="Şifrenizi girin." style="font-size:18px;border:#eaeaea;padding:7px;"></input></td></tr>
	<tr><td></td><td><input type="submit" name="loginogrenci" value="Giriş" style="font-size:18px;font-weight:bold;color:#026875;justify-content:center;border:none;padding:8px;background:#dadada;"></input></td></tr>
	</table>
	</form>
</div>
</div>

<div id="ogretmen" class="tabcontent">
  <div style="
	
	font-family:calibri;
	width:400px;
	height:400px;
	margin:auto;">

	<form action="login.php" method="post">
	<table style="color:#dadada;font-size:18px;font-weight:bold;margin:auto;">
	<tr><td><br><br><br><br><br><br><br></td></tr>
	<tr><td>Öğretmen No</td><td><input type="text" name="no" placeholder="Okul no girin." autofocus="autofocus" style="font-size:18px;border:#eaeaea;padding:7px;"></input></td></tr>
	<tr><td>Şifre</td><td><input type="password" name="password" placeholder="Şifrenizi girin." style="font-size:18px;border:#eaeaea;padding:7px;"></input></td></tr>
	<tr><td></td><td><input type="submit" name="loginogretmen" value="Giriş" style="font-size:18px;font-weight:bold;color:#026875;justify-content:center;border:none;padding:8px;background:#dadada;"></input></td></tr>
	</table>
	</form>
</div>
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
     
</body>
</html> 
