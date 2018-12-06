<?php
	setlocale(LC_ALL,"es_VE");
	header ('Content-type: text/html; charset=utf-8');
	require_once('mpdf/mpdf.php');
	
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
	$query = "SELECT DISTINCT seccion.ID_SEC, seccion.ID_año, seccion.SECCION, año.año FROM seccion, año 
	WHERE seccion.ID_año = año.ID_año";
	$prepare = $con->prepare($query);
	$prepare->execute();
	$resultSet = $prepare->get_result();
	$row_cnt = mysqli_num_rows($resultSet);
	$tiempo = date(DATE_W3C);
	while($resultado[] = $resultSet->fetch_array());
	$resultSet->close();
	$prepare->close();
	$con->close();
	
	//print_r($profesor);
	//die();
	
	$html = '<header class="clearfix">
      <div id="logo"> <img src="image/LogoReportes.png"> </div>
      <h1>LISTADO DE SECCIONES</h1>
      <div id="company" class="clearfix">
        <div>LICEO BOLIVARIANO "PEDRO MARIA FREITES" - PUERTO LA CRUZ - '.($tiempo).'</div>
      </div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center; width: 63px;" class="service"><b>ID_SEC</b></th>
            <th style="width: 100px;"><b>NOMBRE COMPLETO DE LA SECCION<br>
              </b></th>
          </tr>
        </thead>
        <tbody>';
		for($i = 0; $i < count($resultado); $i++) {
			$seccion = $resultado[$i];
			if ($i % 2 == 0) {
			$html .= '<tr bgcolor="#F5F5F5">
						<td class="service">'.$seccion['ID_SEC'].'<br>
						</td>
						<td class="total" align="center">'.$seccion['año']." ".$seccion['SECCION'].'<br>
						</td>
					</tr>';
			}
			else {
			$html .= '<tr>
						<td class="service">'.$seccion['ID_SEC'].'<br>
						</td>
						<td class="total" align="center">'.$seccion['año']." ".$seccion['SECCION'].'<br>
						</td>
					</tr>';
			}
		}		
	$html .= '
          <tr>
            <td colspan="2" class="grand total" align="center">NUMERO TOTAL DE SECCIONES:'." ".($row_cnt).'</td>

          </tr>
        </tbody>
      </table>
      <div id="notices">. </div>
    </main>';
	
	$mpdf =new mPDF('utf-8', 'A4');
	$css = file_get_contents('Reportes/style.css');
	$mpdf->writeHTML($css, 1);
	$html = utf8_decode($html);
	$html = utf8_encode($html);
	$mpdf->writeHTML($html);
	
	$mpdf->Output('Reporte_Secciones.pdf', 'I');

?>