<?php
	//Muutujad
	$myName = "Rain";
	$myFamilyName = "Meikar";
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", 
	"august", "september", "oktoober", "november", "detsember"];
	var_dump($monthNameEt);
	echo $monthNamesEt[8];
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8)(
		$partOfDay = "Varane hommik."
		);
	if ($hourNow >= 8 and $hourNow < 16)(
		$partOfDay = "koolipäev"
		);
	if ($hourNow > 16) (
		$partOfDay = "vaba aeg"
		);
		
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rain Meikari veebiprogremise asjad</title>
</head>
<body>
	<h1>Rain Meikar</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	<p>See tekst on kirjutatud kodus täiesti iseseisvalt</p>
	<p>See on juurdekirjutis</p>
	
	<?php
		echo "<p>Täna on vastik ilm!</p>";
		echo "<p>Täna on ";
		echo date("d.m.Y");
		echo ".</p>";
		echo "Lehe laadimise hetkel oli kell: " .date("H:i:s") .". </php>";
		echo "Praegu on " .$partOfDay .".";
	?>
	<p>PHP käivitatakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi jälle "kalkuleerida", siis laetakse kogu leht uuesti.</p>
	<?php
		echo "<p>Leheautori täisnimi on: " .$myName ." " .$myFamilyName .".</p>";
	?>
</body>
</html>