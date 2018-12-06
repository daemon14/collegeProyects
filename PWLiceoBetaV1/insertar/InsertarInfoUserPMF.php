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
	$usuario = ($_POST['usuario']);
	$pass = ($_POST['pass']);
	
	// Comprueba si el adimistrador ya existe
	
	$sql = " SELECT password FROM usuarios WHERE password = '$pass' ;";
	$admin=mysqli_query($con, $sql) or die(mysqli_error());
	if (mysqli_num_rows($admin)>0){
	echo "<script type=\"text/javascript\">alert(\"El adimistrador ya existe\");</script> <br>";
	//$msg = "El adimistrador ya existe";
	}
	else {
	
	$sql1 = 'INSERT INTO usuarios (usuario, password) VALUES 
	("'.mysql_real_escape_string($usuario).'", 
	"'.mysql_real_escape_string($pass).'")'; 
	
	if (mysqli_query($con, $sql1)) {
    echo "<script type=\"text/javascript\">alert(\"Usuario ingresado correctamente\");</script> <br>";
	//$msg = "Datos ingresados correctamente";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	//$msg = "Error en el registro";
	}
	}
//include ('Redir.php');
?>