<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BiloAdmin - Registro</title>
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
      <div class="card-header"><b>Registrar Nuevo Administrador</b></div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nombre Completo</label>
                <input class="form-control" type="text" name="realname" placeholder="Ingrese su Nombre real">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputUser">Nombre de Usuario</label>
            <input class="form-control" name="nick" type="text"  required placeholder="Ingrese su nuevo Nombre de Usuario">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Contraseña</label>
                <input class="form-control" type="password" name="pass" required placeholder="Ingresar Contraseña">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirmar Contraseña</label>
                <input class="form-control" type="password" name="rpass" placeholder="Repita la Contraseña">
              </div>
            </div>
          </div>
          <input  class="btn btn-primary" type="submit" name="submit" value="REGISTRARSE"/>
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
