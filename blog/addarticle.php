<?php

if (isset($_POST["btn"])) {
	$servername =  "c219um.forpsi.com:3306";
	$username = "f111539";
	$password = "Nv5AGNd";
	$dbname = "f111539";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
    die("ERROR: Could not connect. " . $conn->connect_error);
	}

	$sql = "INSERT INTO clanky (nadpis, textik, datum, autor, kategorie)
			VALUES ('". $_POST['nadpis']."','". $_POST['textik']."','". $_POST['datum']."','". $_POST['autor']."','". $_POST['kategorie']."')";

	if (mysqli_query($conn, $sql)) {
		echo "New Record added";
		header("Location: https://www.globalgraphicdesign.eu/welcome.php");
	}else {
		echo "Error" . $sql . "" . mysqli_error($conn);
	}
	$conn->close();
}


?>