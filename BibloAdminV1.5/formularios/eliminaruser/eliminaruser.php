<?php header ('Content-type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliopmf";

// Crear Conexión
$con = mysqli_connect($servername, $username, $password, $dbname);

// Verificar Conexión
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

	$ID_SEC = ($_POST['ID_Usuario']);
	
	$sql1 =	'DELETE FROM `bibliopmf`.`usuario` WHERE `usuario`.`ID_Usuario` = "'.mysql_real_escape_string($ID_SEC).'"';
	
	//echo $sql1;
	
	if (mysqli_query($con, $sql1)) {
    echo "<script type=\"text/javascript\">alert(\"Datos eliminados correctamente\");</script> <br>";
	//$msg = "Datos eliminados correctamente";
	echo "<script>location.href='../../index.html'</script>";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	echo "<script>location.href='../../error.html'</script>";
	//$msg = "Error en el registro";
	}
?>