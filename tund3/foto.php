<?php
	$picsDir = "../../pix/";
	
	$picFiles = [];
	
	$allFiles = scandir($picsDir);
	//var_dump($allFiles);
	
	$picFiles = array_slice($allFiles, 2);
	
	
	$picCount = count($picFiles);
	
	$picNum = mt_rand(0,($picCount - 1));
	$picFile = $picFiles[$picNum];
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
	<p>Üks pilt Tallinna Ülikoolis</p>
		<img src="<?php echo $picsDir .$picFile; ?>" alt="TLÜ">
</body>
</html>