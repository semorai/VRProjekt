Täname edukalt esitatud postituse eest!

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Projekt</title>
	

	</head>
	
	<body>


	<?php
		
		$host = "localhost";
		$user = "test";
		$pass = "t3st3r123";
		$db = "test";

		$link = mysqli_connect($host, $user, $pass, $db);

		if (!$link) {
			die('Could not connect: ' . mysqli_error());
			}

		
		
		$value= $_POST['link1'];
		$value2= $_POST['comment1'];
		
		
		$sqli ="INSERT INTO Projekt123 (link1, comment1) VALUES ('$value', '$value2')";
		
		if (!mysqli_query($sqli)) {
			die('Error: ' . mysqli_error());
			}
		
		
		
		mysqli_close($link);
		
		?>
		
		
		
	</body>
		
		
		
		
		
		
</html>		