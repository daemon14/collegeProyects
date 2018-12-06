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
	$ID_Benef = ($_POST['ID_Benef']);
	$Apellido_Benef = ($_POST['Apellido_Benef']);
	$Nombre_Benef = ($_POST['Nombre_Benef']);
	$Sexo = ($_POST['Sexo']);
	$Tipo = ($_POST['Tipo']);
	
	// Comprueba si el beneficiario ya existe
	
	$sql = " SELECT ID_Benef FROM beneficiario WHERE ID_Benef = '$ID_Benef' ;";
	$Benefic=mysqli_query($con, $sql) or die(mysqli_error());
	if (mysqli_num_rows($Benefic)>0){
	echo "<script type=\"text/javascript\">alert(\"El beneficiario ya existe\");</script> <br>";
	//$msg = "El beneficiario ya existe";
	echo "<script>location.href='../../error.html'</script>";
	}
	else {
	
	$sql1 = 'INSERT INTO beneficiario (ID_Benef, Apellido_Benef, Nombre_Benef, Sexo, Tipo) VALUES 
	("'.mysql_real_escape_string($ID_Benef).'", 
	"'.mysql_real_escape_string($Apellido_Benef).'", 
	"'.mysql_real_escape_string($Nombre_Benef).'", 
	"'.mysql_real_escape_string($Sexo).'", 
	"'.mysql_real_escape_string($Tipo).'")'; 
	
	if (mysqli_query($con, $sql1)) {
    echo "<script type=\"text/javascript\">alert(\"Datos ingresados correctamente\");</script> <br>";
	//$msg = "Datos ingresados correctamente";
	echo "<script>location.href='../../beneficiarios.html'</script>";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	//$msg = "Error en el registro";
	echo "<script>location.href='../../error.html'</script>";
	}
	}
//include ('Redir.php');
?>