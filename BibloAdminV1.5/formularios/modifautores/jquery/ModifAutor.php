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
	$ID_Autor = ($_POST['ID_Autor']);
	$Nombre_Autor = ($_POST['Nombre_Autor']);
	
	$sql1 = 'UPDATE autor SET Nombre_Autor="'.mysql_real_escape_string($Nombre_Autor).'" WHERE ID_Autor ="'.mysql_real_escape_string($ID_Autor).'"'; 
	
	if (mysqli_query($con, $sql1)) {
    echo "<script type=\"text/javascript\">alert(\"Datos modificados correctamente\");</script> <br>";
	//$msg = "Datos ingresados correctamente";
	echo "<script>location.href='../../../editarautores.html'</script>";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	//$msg = "Error en el registro";
	echo "<script>location.href='../../../error.html'</script>";
	}
	
//include ('Redir.php');
?>