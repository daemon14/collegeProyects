<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Modificación de autores</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="../assets/css/foundation.css">
            <link rel="stylesheet" href="../assets/css/app.css">
    <meta class="foundation-mq"></head>
    <body>

      <?php	$con= mysql_connect('localhost','root','');
		  mysql_set_charset('utf8', $con);
		  mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

    <br>
    
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Modificación de autores</h4>
        <form method="POST" id="frmForm">
          <div class="medium-12  columns">
            <label>Autor a editar</label>
            <select name='ID_Autor' id="ID_Autor">
              <?php
						  $result=mysql_query("SELECT * FROM autor");
						  WHILE ($row=mysql_fetch_array($result)){ ?>
              <?php echo "<option value=" . $row ["ID_Autor"] . ">" . $row ["Nombre_Autor"] . "</option>"; ?>
              <?php } ?>
            </select>
          </div>
          <div class="medium-12  columns">
            <input value="Modificar" id="btnSend" type="submit">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div id="divResponse"></div>
    </div>

        <script src="../assets/js/vendor/jquery.js"></script>
        <script src="../assets/js/vendor/what-input.js"></script>
        <script src="../assets/js/vendor/foundation.js"></script>
        <script src="../assets/js/app.js"></script>
        <script>
        function init()
        {
            $('#btnSend').click( function( event )
            {
              event.preventDefault();
              var data_to_be_sent = $('#frmForm').serialize();

              $.ajax({
                url: "./FormularioModifAutor.php",
                method: 'POST',
                data: data_to_be_sent,
                datatype: 'html',
                success: function( result ) {
                  console.log(result);
                  $('#divResponse').html( result );
                }
              });

            } 
            );
            
        }
        
        

        $( init );
        </script>

    </body>
</html>