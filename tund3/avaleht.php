<?php
	//Muutujad
	$myName = "Rain";
	$myFamilyName = "Meikar";
	$myAge = 0;
	$myBirthYear;
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", 
	"august", "september", "oktoober", "november", "detsember"];
	$hourNow = date("H");
	$partOfDay = "";
	$myLivedYearsList = "";
	
	if ($hourNow < 8)(
		$partOfDay = "Varane hommik."
		);
	if ($hourNow >= 8 and $hourNow < 16)(
		$partOfDay = "koolipäev"
		);
	if ($hourNow > 16) (
		$partOfDay = "vaba aeg"
		);
		
		//nüüd vaatame, kas ja mida kasutaja sisestas
	if (isset($_POST["yearBirth"])){
		$myAge = date("Y") - $_POST["yearBirth"];
		$myBirthYear = $_POST["yearBirth"];
		//tekitame loendi kõigist elatud aastatest
		for ($i = $myBirthYear; $i <= date("Y"); $i++){
			echo $i;
			$myLivedYearsList .= "<li>" .$i ."</li> \n";
		}
		$myLivedYearsList .= "</ol> \n";
	}
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
		$monthIndex = date("n") - 1;
		echo date("d.") .$monthNamesEt[$monthIndex] .date(" Y");
		echo ".</p>";
		echo "Lehe laadimise hetkel oli kell: " .date("H:i:s") .". </php>";
		echo "Praegu on " .$partOfDay .".";
	?>
	<p>PHP käivitatakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi jälle "kalkuleerida", siis laetakse kogu leht uuesti.</p>
	<?php
		echo "<p>Leheautori täisnimi on: " .$myName ." " .$myFamilyName .".</p>";
	?>
	<h2>Vanus</h2>
	<p>Järgnevalt palume sisestada oma sünniaasta!</p>
	<form method="POST">
		<label>Teie sünniaasta: </label>
		<input id="yearBirth" name="yearBirth" type="number" min="1900" max="2017" value="<?php echo $myYearBirth; ?> aastat.</p>
		<input id="submitYearBirth" name="submitYearBirth" type="submit" value="Kinnita">
	
	</form>
	<p>Teie vanus on <?php echo $myAge; ?> aastat.</p>
	<?php
		if ($myLivedYearsList != "") {
			echo "<h3>Oled elanus järgnevatel aastatel</h3> \n";
			echo $myLivedYearslist;
		}}
		?>
</body>
</html>