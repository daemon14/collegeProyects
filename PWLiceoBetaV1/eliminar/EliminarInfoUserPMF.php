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

	$idusuario = ($_POST['idusuario']);
	
	$sql1 =	'DELETE FROM `bd_pmf`.`usuarios` WHERE `usuarios`.`idusuario` = "'.mysql_real_escape_string($idusuario).'"';
	
	//echo $sql1;
	
	if (mysqli_query($con, $sql1)) {
    echo "El usuario fue egresado correctamente. <br>";
	} else {
    echo "Error en la operación: " . $sql1 . "<br>" . mysqli_error($con);
	}
?>