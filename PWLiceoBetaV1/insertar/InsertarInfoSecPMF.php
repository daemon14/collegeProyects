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
	//$ID_SEC = ($_POST['ID_SEC']);
	$ID_año = ($_POST['ID_año']);
	$SECCION = ($_POST['SECCION']);
	$nomhorario=$_FILES['HORARIO'] ['name'];
	$ruta=$_FILES['HORARIO']['tmp_name'];
	$destino="image/horarios/".$nomhorario;
	copy($ruta,$destino);
	//$NOMHORARIO = ($_POST['HORARIO']);
	//echo "$destino";
	//Crea el id de la seccion
	$ID_SEC = ($ID_año . $SECCION);
	//$HORARIO = ("image/horarios/" . $NOMHORARIO);
	//echo $ID_SEC;
	
	// Comprueba si la seccion ya existe
	
	$sql = " SELECT ID_SEC FROM seccion WHERE ID_SEC = '$ID_SEC' ;";
	$sec=mysqli_query($con, $sql) or die(mysqli_error());
	if (mysqli_num_rows($sec)>0){
	echo "<script type=\"text/javascript\">alert(\"La seccion ya existe\");</script> <br>";
	}
	else {
	$sql1 = 'INSERT INTO seccion (ID_SEC, ID_año, SECCION, HORARIO) VALUES 
	("'.mysql_real_escape_string($ID_SEC).'",
	"'.mysql_real_escape_string($ID_año).'", 
	"'.mysql_real_escape_string($SECCION).'",
	"'.mysql_real_escape_string($destino).'")';
	
	//echo $ID_año . " " . $ID_SEC;
	
	$matsec1 = 'INSERT INTO materia_seccion (ID_MAT, ID_SEC) VALUES 
		("CL1", "'.mysql_real_escape_string($ID_SEC).'"),
		("IN1", "'.mysql_real_escape_string($ID_SEC).'"),
		("MA1", "'.mysql_real_escape_string($ID_SEC).'"),
		("EN1", "'.mysql_real_escape_string($ID_SEC).'"),
		("EC1", "'.mysql_real_escape_string($ID_SEC).'"),
		("GG1", "'.mysql_real_escape_string($ID_SEC).'"),
		("HV1", "'.mysql_real_escape_string($ID_SEC).'"),
		("EA1", "'.mysql_real_escape_string($ID_SEC).'"),
		("EF1", "'.mysql_real_escape_string($ID_SEC).'"),
		("ET1", "'.mysql_real_escape_string($ID_SEC).'")';
	
	$matsec2 = 'INSERT INTO materia_seccion (ID_MAT, ID_SEC) VALUES 
		("CL2", "'.mysql_real_escape_string($ID_SEC).'"),
		("IN2", "'.mysql_real_escape_string($ID_SEC).'"),
		("MA2", "'.mysql_real_escape_string($ID_SEC).'"),
		("CB2", "'.mysql_real_escape_string($ID_SEC).'"),
		("ES2", "'.mysql_real_escape_string($ID_SEC).'"),
		("HU2", "'.mysql_real_escape_string($ID_SEC).'"),
		("HV2", "'.mysql_real_escape_string($ID_SEC).'"),
		("EA2", "'.mysql_real_escape_string($ID_SEC).'"),
		("EF2", "'.mysql_real_escape_string($ID_SEC).'"),
		("ET2", "'.mysql_real_escape_string($ID_SEC).'")';
	
	$matsec3 = 'INSERT INTO materia_seccion (ID_MAT, ID_SEC) VALUES 
		("CL3", "'.mysql_real_escape_string($ID_SEC).'"),
		("IN3", "'.mysql_real_escape_string($ID_SEC).'"),
		("MA3", "'.mysql_real_escape_string($ID_SEC).'"),
		("CB3", "'.mysql_real_escape_string($ID_SEC).'"),
		("FI3", "'.mysql_real_escape_string($ID_SEC).'"),
		("QU3", "'.mysql_real_escape_string($ID_SEC).'"),
		("HV3", "'.mysql_real_escape_string($ID_SEC).'"),
		("GV3", "'.mysql_real_escape_string($ID_SEC).'"),
		("EF3", "'.mysql_real_escape_string($ID_SEC).'"),
		("ET3", "'.mysql_real_escape_string($ID_SEC).'")';
	
	$matsec4 = 'INSERT INTO materia_seccion (ID_MAT, ID_SEC) VALUES 
		("CL4", "'.mysql_real_escape_string($ID_SEC).'"),
		("IN4", "'.mysql_real_escape_string($ID_SEC).'"),
		("MA4", "'.mysql_real_escape_string($ID_SEC).'"),
		("CB4", "'.mysql_real_escape_string($ID_SEC).'"),
		("FI4", "'.mysql_real_escape_string($ID_SEC).'"),
		("QU4", "'.mysql_real_escape_string($ID_SEC).'"),
		("HV4", "'.mysql_real_escape_string($ID_SEC).'"),
		("DI4", "'.mysql_real_escape_string($ID_SEC).'"),
		("EF4", "'.mysql_real_escape_string($ID_SEC).'"),
		("IP4", "'.mysql_real_escape_string($ID_SEC).'"),
		("PS4", "'.mysql_real_escape_string($ID_SEC).'")';
	
	$matsec5 = 'INSERT INTO materia_seccion (ID_MAT, ID_SEC) VALUES 
		("CL5", "'.mysql_real_escape_string($ID_SEC).'"),
		("IN5", "'.mysql_real_escape_string($ID_SEC).'"),
		("MA5", "'.mysql_real_escape_string($ID_SEC).'"),
		("CB5", "'.mysql_real_escape_string($ID_SEC).'"),
		("FI5", "'.mysql_real_escape_string($ID_SEC).'"),
		("QU5", "'.mysql_real_escape_string($ID_SEC).'"),
		("IP5", "'.mysql_real_escape_string($ID_SEC).'"),
		("GV5", "'.mysql_real_escape_string($ID_SEC).'"),
		("EF5", "'.mysql_real_escape_string($ID_SEC).'"),
		("CT5", "'.mysql_real_escape_string($ID_SEC).'")';
	
	if (mysqli_query($con, $sql1)) {
		echo "Los datos han sido ingresados correctamente. <br><br>";
		if ($ID_año = 1) {
			if (mysqli_query($con, $matsec1)) {
				echo "La vinculación entre la sección y las materias se realizó correctamente.";
			}
			else {
				echo "Hubo un error en la vinculación sección-materia: " . $matsec1 . "<br>" . mysqli_error($con);
			}
		}
		else if ($ID_año = 2) {
			if (mysqli_query($con, $matsec2)) {
				echo "La vinculación entre la sección y las materias se realizó correctamente.";
			}
			else {
				echo "Hubo un error en la vinculación sección-materia: " . $matsec2 . "<br>" . mysqli_error($con);
			}
		}
		else if ($ID_año = 3) {
			if (mysqli_query($con, $matsec3)) {
				echo "La vinculación entre la sección y las materias se realizó correctamente.";
			}
			else {
				echo "Hubo un error en la vinculación sección-materia: " . $matsec3 . "<br>" . mysqli_error($con);
			}
		}
		else if ($ID_año = 4) {
			if (mysqli_query($con, $matsec4)) {
				echo "La vinculación entre la sección y las materias se realizó correctamente.";
			}
			else {
				echo "Hubo un error en la vinculación sección-materia: " . $matsec4 . "<br>" . mysqli_error($con);
			}
		}
		else {
			if (mysqli_query($con, $matsec5)) {
				echo "La vinculación entre la sección y las materias se realizó correctamente.";
			}
			else {
				echo "Hubo un error en la vinculación sección-materia: " . $matsec5 . "<br>" . mysqli_error($con);
			}
		}
	}
	else {
    echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
	}
	}
?>