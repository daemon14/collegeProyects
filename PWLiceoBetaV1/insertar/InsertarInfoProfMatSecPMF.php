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
	$ID_PROF = ($_POST['ID_PROF']);
	$ID_MAT = ($_POST['ID_MAT']);
	$ID_SEC = ($_POST['ID_SEC']);

	//echo $ID_PROF . " " . $ID_MAT . " " . $ID_SEC;
	
	$sql1 = 'INSERT INTO prof_mat_sec (ID_PROF, ID_MAT, ID_SEC) VALUES 
	("'.mysql_real_escape_string($ID_PROF).'",
	"'.mysql_real_escape_string($ID_MAT).'", 
	"'.mysql_real_escape_string($ID_SEC).'")'; 
	
	if (mysqli_query($con, $sql1)) {
    echo "Los datos han sido ingresados correctamente. <br>";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	}
	
?>