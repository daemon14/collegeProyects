<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Nuevo Beneficiario - BibloAdmin</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  <!-- CSS de Bootstrap-->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Fuentes Personalizadas-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Nivelado de Páginas CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Estilos Personalizados-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" style="height: 100%;">
  <br>
  <br>
  <!-- Título-->
  </h1>
  <h1 style="width: auto; margin-top: -3%; margin-left:1%;margin-right:1%; height: 6%;"><b><i style="color: white">Biblo</i><span>Admin</span></b>
      <a style="width: 10%;margin-left: 65%;margin-top: auto;height: -8%;" class="btn btn-danger col-xm-12 col-sm-12" data-toggle="modal" data-target="#exampleModal">
		<span class="d-lg-none">
			<span class="badge badge-pill badge-primary col-sm-12 col-xm-12">
			</span>
		</span> Cerrar Sesión</a> </h1>

  <!-- Navegación-->
  <div style="height:auto; width:auto" class="row">
    <nav style="right: 100%;height:91.5%;width: 17%;" class="navbar col-sm-3 col-md-12" id="sidebar-wrapper" role="navigation">
      <ul style="top: -2%; height: auto;" class="nav sidebar-nav">
        <li class="btn" style="height: 100%; margin-top: 10%; width: 100%; margin-left: 2%;">
          <img alt="" src="img/Logologo.png"> </li>
        <li>
          <i></i>
          <a class="fa fa-home fa-2x" href="index2.html"> Inicio</a>
        </li>
        <li>
          <a class="fa fa-book fa-2x" href="libros.html"> Libros</a>
        </li>
        <li>
          <a class="fa fa-handshake-o fa-2x" href="prestamos.html"> Préstamo</a>
        </li>
        <li>
          <a class="fa fa-user-circle fa-2x" href="beneficiarios.html">
            Personas</a>
        </li>
        <li>
          <a class="fa fa-question-circle fa-2x" href="ayuda.html"> Ayuda</a>
        </li>
        <li>
          <a class="fa fa-info fa-2x" href="contacto.html"> Acerca De</a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- Cuerpo-->

  <div style="margin-left: 18%;  margin-right: 1%; width: auto; height: 100%; background-color: white; background-position: center bottom; background-repeat: no-repeat;*/ height: auto; background-image: url('img/bg-ben.png');" class="content-wrapper">
    <div style="margin-left: 10%; height: 80%; margin-top: -8%;" class="container-fluid">
      <div style="text-align: center; height: 18%">
        <div style="text-align: left; margin-left: -3%;">
          <b>
            <area>
          </b>
          <hr style="width: 100%;height: 100px; background: #2e2e2e; color: black; margin-left: -8.5%; col-md-3 col-sm-12">
          <h1>
            </h1>
          <h1>Nuevo Beneficiario</h1>
          <br>
          <div style="text-align: center; margin-top: -38px; height: 90px;">
            <br>
            <h1 class="fa fa-user-circle fa-5x "></h1>
          </div>
          <br>
          <div style="text-align: center;"><b>Ingrese los Datos de la Persona que desea registrar en el sistema.</b>
            <br>
            <br>
            <center>
            <div class="alert alert-info" style="width:40%;"><strong>¡Atención!</strong> Verifique los Datos antes de guardar.</div>
          </center>
          </div>


          <form ACTION='formularios/insertbeneficiario/insertbeneficiario.php' METHOD='post'>
            <table align='center' border='2'>

              <tr>
                <td colspan='2' align='center'><b>Registro de Beneficiario</b></td>
              </tr>

              <tr>
                <td><b> C.I. </b></td>
                <td>
                  <input title='Sólo números' type='text' placeholder="Cédula de Identidad" name='ID_Benef' pattern='[0-9]+' required/>
                </td>
              </tr>

              <tr>
                <td><b> Apellido </b></td>
                <td>
                  <input title='Sólo caracteres alfabéticos' placeholder="Apellido del Beneficiario" type='text' name='Apellido_Benef' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'>
                </td>
              </tr>

              <tr>
                <td><b> Nombre </b></td>
                <td>
                  <input title='Sólo caracteres alfabéticos' placeholder="Nombre del Beneficiario" type='text' name='Nombre_Benef' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'>
                </td>
              </tr>

              <tr>
                <td><b> Sexo </b></td>
                <td>
                  <select name="Sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><b> Tipo </b></td>
                <td>
                  <select name="Tipo">
                    <option value="Estudiante">Estudiante</option>
                    <option value="Docente">Docente</option>
                    <option value="Obrero">Obrero</option>
                    <option value="Administrativo">Administrativo</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td colspan='2' align='center'>
                  <input class="btn btn-success" type='submit' value='Guardar'>
                </td>
              </tr>
            </table>
          </form>

        </div>
      </div>
      <br>
      <br>
      <br>
      <a class="scroll-to-top rounded" href="#page-top"> </a>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">¿Está seguro de que desea salir del sistema?</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-primary" href="index.html">Cerrar Sesión</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Javascript-->

      <script src="css/menu.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="vendor/chart.js/Chart.js"></script>
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
      <script src="js/sb-admin.min.js"></script>
      <script src="js/sb-admin-datatables.min.js"></script>
      <script src="js/sb-admin-charts.min.js"></script>

    </div>
</body>

</html>
