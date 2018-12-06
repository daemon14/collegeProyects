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
	$query = "SELECT * FROM seccion ORDER BY ID_SEC";
	$prepare = $con->prepare($query);
	$prepare->execute();
	$resultSet = $prepare->get_result();
	$row_cnt = mysqli_num_rows($resultSet);
	$tiempo = date(DATE_W3C);
	while($resultado[] = $resultSet->fetch_array());
	$resultSet->close();
	$prepare->close();
	$con->close();
	
	//print_r($resultado);
	//die();
	
	$html = '<header class="clearfix">
      <div id="logo"> <img src="image/LogoReportes.png"> </div>
      <h1>bd_pmf:  Tabla seccion</h1>
      <div id="company" class="clearfix">
        <div>LICEO BOLIVARIANO "PEDRO MARIA FREITES" - PUERTO LA CRUZ - '.($tiempo).'</div>
      </div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center; width: 20px;" class="service"><b>ID_SEC</b></th>
            <th style="width: 20px;"><b>ID_año<br>
            <th style="text-align: center; width: 20px;" class="service"><b>SECCION</b></th>
            <th style="width: 100px;"><b>HORARIO<br>            
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
						<td class="total" align="center">'.$seccion['ID_año'].'<br></td>
                        <td class="total" align="center">'.$seccion['SECCION'].'<br></td>
                        <td class="total" align="center">'.$seccion['HORARIO'].'<br>
						</td>
					</tr>';
			}
			else {
			$html .= '<tr>
						<td class="service">'.$seccion['ID_SEC'].'<br>
						</td>
						<td class="total" align="center">'.$seccion['ID_año'].'<br></td>
                        <td class="total" align="center">'.$seccion['SECCION'].'<br></td>
                        <td class="total" align="center">'.$seccion['HORARIO'].'<br>
						</td>
					</tr>';
			}
		}		
	$html .= '
          <tr>
            <td colspan="4" class="grand total" align="center">CANTIDAD DE REGISTROS:'." ".($row_cnt).'</td>

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
	
	$mpdf->Output('TablaSeccion.pdf', 'I');

?>