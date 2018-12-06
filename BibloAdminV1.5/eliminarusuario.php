<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BiloAdmin - Eliminar Usuarios Administradores</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin2.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><b>Eliminar Usuarios Administradores</b></div>
      <div class="card-body">
        
		<form class="form form-control" id='ElimProf' ACTION='formularios/eliminaruser/eliminaruser.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

            <table class="table table-hover" align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'><b>Eliminar Usuarios Administradores del Sistema</b></td>
                </tr>

                <tr>
                    <td> Seleccione el Usuario que desea Eliminar </td>
                    <td>
                        <select style="width:40%;" name='ID_Usuario'>
                            <?php
		$result=mysql_query("SELECT * FROM usuario");
		WHILE ($row=mysql_fetch_array($result)){ ?>

                                <?php echo "<option value=" . $row ["ID_Usuario"] . ">" . $row ["email"] . "</option>"; ?>
                                    <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan='2' align='center'>
                        
                        <input class="btn btn-danger" type='submit' id='ProfElim' name='ProfElim' value='Eliminar'>
                    </td>
                </tr>
            </table>
    </form>
		
        <div class="text-center">
          <a class="btn small mt-3" href="index.html">< Regresar</a>
        </div>
      </div>
    </div>
  </div>

  <?php
        if (isset($_POST['submit'])) {
            require("registro.php");
        }
    ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
