<?php header ('Content-type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_pmf";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

	$ID_SEC = ($_POST['ID_SEC']);
	
	$sql1 = 'DELETE FROM `bd_pmf`.`seccion` WHERE `seccion`.`ID_SEC` = "'.mysql_real_escape_string($ID_SEC).'"';
	
	//echo $sql1;
	
if (mysqli_query($con, $sql1)) {
    echo "La sección fue eliminada correctamente. <br>";
	} else {
    echo "Error en la operación: " . $sql1 . "<br>" . mysqli_error($con);
	}
?>