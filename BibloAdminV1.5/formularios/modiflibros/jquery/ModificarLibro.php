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
	$ID_Libro = ($_POST['ID_Libro']);
	$Titulo = ($_POST['Titulo']);
	$ID_Area = ($_POST['ID_Area']);
	$ID_SubArea = ($_POST['ID_SubArea']);
	$Ejemplares = ($_POST['Ejemplares']);
	$ID_Autor = ($_POST['ID_Autor']);
	
	//$sql1 = 'INSERT INTO libro (ID_Libro, Titulo, ID_Area, ID_SubArea, Ejemplares) VALUES 
	//("'.mysql_real_escape_string($ID_Libro).'", 
	//"'.mysql_real_escape_string($Titulo).'", 
	//"'.mysql_real_escape_string($ID_Area).'", 
	//"'.mysql_real_escape_string($ID_SubArea).'", 
	//"'.mysql_real_escape_string($Ejemplares).'")';
	
	$sql1 = 'UPDATE libro SET 	Titulo = "'.mysql_real_escape_string($Titulo).'", 
								ID_Area = "'.mysql_real_escape_string($ID_Area).'", 
								ID_SubArea = "'.mysql_real_escape_string($ID_SubArea).'", 
								Ejemplares = "'.mysql_real_escape_string($Ejemplares).'" 
								WHERE ID_Libro = "'.mysql_real_escape_string($ID_Libro).'"';

	$sql2 = 'UPDATE libro_autor SET ID_Autor="'.mysql_real_escape_string($ID_Autor).'" 
									WHERE ID_Libro ="'.mysql_real_escape_string($ID_Libro).'"'; 
	
	if (mysqli_query($con, $sql1)) {
	if (mysqli_query($con, $sql2)) {
    echo "<script type=\"text/javascript\">alert(\"Datos modificados correctamente\");</script> <br>";
	//$msg = "Datos ingresados correctamente";
	echo "<script>location.href='../../../libros.html'</script>";
	}} else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	//$msg = "Error en el registro";
	echo "<script>location.href='../../../error.html'</script>";
	}
	
//include ('Redir.php');
?>