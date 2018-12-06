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
	$ID_PROF = ($_POST['NOMBRE']);
	$ID_MAT = ($_POST['MATERIA']);
	
	$sql1 = 'DELETE FROM `bd_pmf`.`profesor_materia` 
	WHERE `profesor_materia`.`ID_PROF` = '.mysql_real_escape_string($ID_PROF).' 
	AND `profesor_materia`.`ID_MAT` = "'.mysql_real_escape_string($ID_MAT).'"';
	
	//echo $sql1;
	
	if (mysqli_query($con, $sql1)) {
    echo "Los datos han sido eliminados correctamente. <br>";
	} else {
    echo "Error en la operación: " . $sql1 . "<br>" . mysqli_error($con);
	}
	
?>