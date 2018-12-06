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
	
	//$sql1 = 'INSERT INTO beneficiario (ID_Benef, Apellido_Benef, Nombre_Benef, Sexo, Tipo) VALUES 
	//("'.mysql_real_escape_string($ID_Benef).'", 
	//"'.mysql_real_escape_string($Apellido_Benef).'", 
	//"'.mysql_real_escape_string($Nombre_Benef).'", 
	//"'.mysql_real_escape_string($Sexo).'", 
	//"'.mysql_real_escape_string($Tipo).'")'; 
	
	$sql1 = 'UPDATE beneficiario SET 
	Apellido_benef = "'.mysql_real_escape_string($Apellido_Benef).'", 
	Nombre_Benef = "'.mysql_real_escape_string($Nombre_Benef).'", 
	Sexo = "'.mysql_real_escape_string($Sexo).'", 
	Tipo = "'.mysql_real_escape_string($Tipo).'" 
	WHERE ID_Benef = "'.mysql_real_escape_string($ID_Benef).'"';

	if (mysqli_query($con, $sql1)) {
    echo "<script type=\"text/javascript\">alert(\"Datos Modificados correctamente\");</script> <br>";
	//$msg = "Datos ingresados correctamente";
	echo "<script>location.href='../../../beneficiarios.html'</script>";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	//$msg = "Error en el registro";
	echo "<script>location.href='../../../error.html'</script>";
	}
//include ('Redir.php');
?>