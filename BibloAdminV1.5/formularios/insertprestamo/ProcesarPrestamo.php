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
	//$Fecha_Prest = date ("Y, m, d");
	
	$ID_Benef = ($_POST['ID_Benef']);
	$Grado = ($_POST['Grado']);
	$Seccion = ($_POST['Seccion']);
	$ID_Libro = ($_POST['ID_Libro']);
	
	$Fecha_Prest = (date('Y-m-d'));
	$Fecha_Dev = ($_POST['Fecha_Dev']);

	$Observacion = ($_POST['Observacion']);
	
	$Dispo = $con->query("select a.ID_Libro, a.Titulo, a.Ejemplares, COALESCE(b.CantPrestados, 0) as CantPrestados, a.Ejemplares-COALESCE(b.CantPrestados, 0) CantDisponibles from libro a left join (select ID_Libro, count(*) CantPrestados from prestamo where estado='Ocupado' group by ID_Libro) b on a.ID_Libro=b.ID_Libro where a.ID_Libro = '$ID_Libro'");
	
	$row=mysqli_fetch_array($Dispo);
    $CantDisponibles = $row ['CantDisponibles'];
	
	//die($CantDisponibles);
	
	if ($CantDisponibles <=0){
	echo "<script type=\"text/javascript\">alert(\"No hay ejemplares disponibles\");</script> <br>";
	echo "<script>location.href='../../prestamos.html'</script>";}
	else{
	
		$sql1 = 'INSERT INTO prestamo (ID_Benef, Grado, Seccion, ID_Libro, Fecha_Prest, Fecha_Dev, Observacion) VALUES 
		("'.mysql_real_escape_string($ID_Benef).'", 
		"'.mysql_real_escape_string($Grado).'", 
		"'.mysql_real_escape_string($Seccion).'", 
		"'.mysql_real_escape_string($ID_Libro).'", 
		"'.mysql_real_escape_string($Fecha_Prest).'",
		"'.mysql_real_escape_string($Fecha_Dev).'",
		"'.mysql_real_escape_string($Observacion).'")';
		
		if (mysqli_query($con, $sql1)) {
		echo "<script type=\"text/javascript\">alert(\"Datos ingresados correctamente\");</script> <br>";
		//$msg = "Datos ingresados correctamente";
		echo "<script>location.href='../../prestamos.html'</script>";
		
		} else {
		echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
		echo "<script>location.href='../../error.html'</script>";
		
		//$msg = "Error en el registro";
		}
	
	}
//include ('Redir.php');
?>