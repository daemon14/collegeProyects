<?php header('Content-type: text/html; charset=utf-8');
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
    
    // Comprueba si el libro ya existe
    
    $sql = " SELECT ID_Libro FROM libro WHERE ID_Libro = '$ID_Libro' ;";
    $Lib=mysqli_query($con, $sql) or die(mysqli_error());
    if (mysqli_num_rows($Lib)>0) {
        echo "<script type=\"text/javascript\">alert(\"El libro ya existe\");</script> <br>";
    //$msg = "El libro ya existe";
		echo "<script>location.href='../../error.html'</script>";
    } else {
        $sql1 = 'INSERT INTO libro (ID_Libro, Titulo, ID_Area, ID_SubArea, Ejemplares) VALUES 
	("'.mysql_real_escape_string($ID_Libro).'", 
	"'.mysql_real_escape_string($Titulo).'", 
	"'.mysql_real_escape_string($ID_Area).'", 
	"'.mysql_real_escape_string($ID_SubArea).'", 
	"'.mysql_real_escape_string($Ejemplares).'")';
    
        $sql2 = 'INSERT INTO libro_autor (ID_Libro, ID_Autor) VALUES 
	("'.mysql_real_escape_string($ID_Libro).'", 
	"'.mysql_real_escape_string($ID_Autor).'")';
    
        if (mysqli_query($con, $sql1)) {
            if (mysqli_query($con, $sql2)) {
                echo "<script type=\"text/javascript\">alert(\"Datos ingresados correctamente\");</script> <br>";
				echo "<script>location.href='../../libros.html'</script>";
                //$msg = "Datos ingresados correctamente";
            }
        } else {
            echo "Error en el registro: " . $sql1 . "<br>" . mysqli_error($con);
			echo "<script>location.href='../../error.html'</script>";
            //$msg = "Error en el registro";
        }
    }
//include ('Redir.php');
