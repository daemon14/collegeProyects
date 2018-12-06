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
	
	//echo $ID_PROF . " " . $ID_MAT;
	
	$sql1 = 'INSERT INTO profesor_materia (ID_PROF, ID_MAT) VALUES 
	("'.mysql_real_escape_string($ID_PROF).'", 
	"'.mysql_real_escape_string($ID_MAT).'")'; 
	
	if (mysqli_query($con, $sql1)) {
    echo "Los datos han sido ingresados correctamente. <br>";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	}
	
?>