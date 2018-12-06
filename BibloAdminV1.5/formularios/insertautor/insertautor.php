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
	$Nombre_Autor = ($_POST['Nombre_Autor']);
	
	// Comprueba si el autor ya existe
	
	$sql = " SELECT Nombre_Autor FROM autor WHERE Nombre_Autor = '$Nombre_Autor' ;";
	$Aut=mysqli_query($con, $sql) or die(mysqli_error());
	if (mysqli_num_rows($Aut)>0){
	echo "<script type=\"text/javascript\">alert(\"El autor ya existe\");</script> <br>";
	//$msg = "El autor ya existe";
	echo "<script>location.href='../../error.html'</script>";
	}
	else {
	
	$sql1 = 'INSERT INTO autor (Nombre_Autor) VALUES 
	("'.mysql_real_escape_string($Nombre_Autor).'")'; 
	
	if (mysqli_query($con, $sql1)) {
    echo "<script type=\"text/javascript\">alert(\"Datos ingresados correctamente\");</script> <br>";
	//$msg = "Datos ingresados correctamente";
	echo "<script>location.href='../../libros.html'</script>";
	} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	echo "<script>location.href='../../error.html'</script>";
	//$msg = "Error en el registro";
	}
	}
//include ('Redir.php');
?>