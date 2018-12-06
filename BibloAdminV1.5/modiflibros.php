<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta class="foundation-mq">
  <title>Modficar Libro - BibloAdmin</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  <!-- Estilo JS Luis-->
  <!--<link rel="stylesheet" href="formularos/modiflibros/assets/css/foundation.css">
  <link rel="stylesheet" href="formularios/modiflibros/assets/css/app.css"> -->

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

  <div style="margin-left: 18%;  margin-right: 1%; width: auto; height: auto; background-color: white; background-position: center bottom; background-repeat: no-repeat;*/ height: auto; background-image: url('img/bg-lll.png');" class="content-wrapper">
    <div style="margin-left: 10%; height: 100%; margin-top: -8%;" class="container-fluid">
      <div style="text-align: center; height: 18%">
        <div style="text-align: left; margin-left: -3%;">
          <b>
            <area>
          </b>
          <hr style="width: 100%;height: 100px; background: #2e2e2e; color: black; margin-left: -8.5%; col-md-3 col-sm-12">
          <h1>
            </h1>
          <h1>Modificar Libro</h1>
          <div style="text-align: center;">
              <center>

              <?php	$con= mysql_connect('localhost', 'root', '');
                      mysql_set_charset('utf8', $con);
                      mysql_select_db("bibliopmf", $con) or die("No se encuentra la base de datos"); ?>


                <div class="form-control" style="width: 70%">
                  <div class="medium-12 large-12 columns">
                    <h4>Modificación de libros</h4><br>
                    <p>Mofidicar los datos correspondientes a cada Libro del Sistema.</p>
                    <br>
                    <div style="text-align: center; margin-top: -38px; height: 90px;">
                      <br>
                      <h1 class="fa fa-book fa-5x "></h1>
                    </div>
                    <br>
                    <form method="POST" id="frmForm">
                      <div class="medium-12  columns">
                        <label>Libro a editar</label>
                        <select name='ID_Libro' id="ID_Libro">
                          <?php
                                        $result=mysql_query("SELECT * FROM libro");
                                        while ($row=mysql_fetch_array($result)) {
                                            ?>
                            <?php echo "<option value=" . $row ["ID_Libro"] . ">" . $row ["Titulo"] . "</option>"; ?>
                            <?php
                                        } ?>
                        </select>
                      </div>
                      <div class="medium-12  columns">
                        <input class="btn btn-warning" value="Modificar" id="btnSend" type="submit">
                      </div>
                    </form>
                  </div>
                </div>
                <div style="width:70%" class="form-control">
                  <div id="divResponse"></div>
                </div>
</center>



          </div>
        </div>

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
        <!-- Jquery-->

        <script src="formularios/modiflibros/assets/js/vendor/jquery.js"></script>
        <script src="formularios/modiflibros/assets/js/vendor/what-input.js"></script>
        <script src="formularios/modiflibros/assets/js/vendor/foundation.js"></script>
        <script src="formularios/modiflibros/assets/js/app.js"></script>
        <script>
        function init() {
          $('#btnSend').click(function(event) {
            event.preventDefault();
            var data_to_be_sent = $('#frmForm').serialize();
            $.ajax({
              url: "formularios/modiflibros/jquery/FormularioModifLibro.php",
              method: 'POST',
              data: data_to_be_sent,
              datatype: 'html',
              success: function(result) {
                console.log(result);
                $('#divResponse').html(result);
              }
            });
          });
        }
        $(init);

        </script>

        <!--<script src="vendor/jquery/jquery.js"></script>
      <script src="FuncionesLibro.js"></script>-->

        <script src="css/menu.js"></script>
        <!--<script src="vendor/jquery/jquery.min.js"></script>-->
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
