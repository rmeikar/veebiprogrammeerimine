<?php
	//Muutujad
	$myName = "Rain";
	$myFamilyName = "Meikar";
	$practiceStarted = "2017-09-11 8.15";
	
	//echo strtotime($practiceStarted);
	//echo strtotime("now");
	//$timePassed = strtotime("now") - strtotime($practiceStarted);
	//echo $timePassed;
	
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8)(
		$partOfDay = "Varane hommik.";
		)
	if ($hourNow >= 8)(
		$partOfDay = "koolipäev";
		)
		
		
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
		echo "Lehe laadimise hetkel oli kell: " .date("H:i:s") ."</php>";
		echo "Praegu on " .$partOfDay .".";
	?>
	<p>PHP käivitatakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi jälle "kalkuleerida", siis laetakse kogu leht uuesti.</p>
	<?php
		echo "<p>Leheautori täisnimi on: " .$myName ." " .$myFamilyName ."."</p>;
	?>
</body>
</html>