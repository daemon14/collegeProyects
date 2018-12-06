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
	$NOMBRE = ($_POST['NOMBRE']);
	$CI = ($_POST['CI']);
	
	// Comprueba si el profesor ya existe
	
	$sql = " SELECT CI FROM profesor WHERE CI = '$CI' ;";
	$profe=mysqli_query($con, $sql) or die(mysqli_error());
	if (mysqli_num_rows($profe)>0){
	echo "<script type=\"text/javascript\">alert(\"El profesor ya existe\");</script> <br>";
	//$msg = "El profesor ya existe";
	}
	else {
	
	$sql1 = 'INSERT INTO profesor (NOMBRE, CI) VALUES 
	("'.mysql_real_escape_string($NOMBRE).'", 
	"'.mysql_real_escape_string($CI).'")'; 
	
	if (mysqli_query($con, $sql1)) {
    echo "<script type=\"text/javascript\">alert(\"Datos ingresados correctamente\");</script> <br>";
	//$msg = "Datos ingresados correctamente";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	//$msg = "Error en el registro";
	}
	}
//include ('Redir.php');
?>