<?php header ('Content-type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliopmf";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!($_POST['Devolver'])){
	echo 'Datos no encontrados';
}
else{

	$Devolver = ($_POST['Devolver']);
	$ID_Benef = ($_POST['ID_Benef']);

	$Disponible = "Disponible";

	$CantidadBuscada = 0;

	while($CantidadBuscada < count($Devolver)){

		
		
		$sql = 'UPDATE prestamo SET 
		Estado = "'.mysql_real_escape_string($Disponible).'"
		WHERE ID_Benef = "'.mysql_real_escape_string($ID_Benef).'"
		AND ID_Prestamo = '.mysql_real_escape_string($Devolver[$CantidadBuscada]).'';

		if (mysqli_query($con, $sql)) {
			echo "<script type=\"text/javascript\">alert(\"Libros devueltos correctamente\");</script> <br>";
			echo "<script>location.href='../../../prestamos.html'</script>";
			//$msg = "Datos ingresados correctamente";
			} else {
			echo "Error en el registro: " . $sql . "<br>" . mysqli_error($con);
			echo "<script>location.href='../../../error.html'</script>";
			//$msg = "Error en el registro";
			}

		echo "<br><br>";

		$CantidadBuscada ++;

	}

}?>