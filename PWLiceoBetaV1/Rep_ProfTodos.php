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
	$query = "SELECT ID_PROF, NOMBRE, CI FROM profesor ORDER BY ID_PROF";
	$prepare = $con->prepare($query);
	$prepare->execute();
	$resultSet = $prepare->get_result();
	$row_cnt = mysqli_num_rows($resultSet);
	$tiempo = date(DATE_W3C);
	while($profesor[] = $resultSet->fetch_array());
	$resultSet->close();
	$prepare->close();
	$con->close();
	
	//print_r($profesor);
	//die();
	
	$html = '<header class="clearfix">
      <div id="logo"> <img src="image/LogoReportes.png"> </div>
      <h1>LISTADO GENERAL DE PROFESORES</h1>
      <div id="company" class="clearfix">
        <div>LICEO BOLIVARIANO "PEDRO MARIA FREITES" - PUERTO LA CRUZ - '.($tiempo).'</div>
      </div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center; width: 163px;" class="service"><b>ID_PROF</b></th>
            <th style="text-align: center; width: 399px;" class="desc"><b>NOMBRE
                DEL PROFESOR<br>
              </b></th>
            <th style="width: 213px;"><b>C.I.<br>
              </b></th>
          </tr>
        </thead>
        <tbody>';
		for($i = 0; $i < count($profesor); $i++) {
			$profe = $profesor[$i];
//		foreach ($profesor as $profe) {
			if ($i % 2 == 0) {
			$html .= '<tr bgcolor="#F5F5F5">
						<td class="service">'.$profe['ID_PROF'].'<br>
						</td>
						<td style="margin-left: 19px;" class="desc">'.$profe['NOMBRE'].'<br>
						</td>
						<td class="total">'.$profe['CI'].'<br>
						</td>
					</tr>';
			}
			else {
			$html .= '<tr>
						<td class="service">'.$profe['ID_PROF'].'<br>
						</td>
						<td style="margin-left: 19px;" class="desc">'.$profe['NOMBRE'].'<br>
						</td>
						<td class="total">'.$profe['CI'].'<br>
						</td>
					</tr>';
			}
		}
		
	$html .= '
          <tr>
            <td colspan="2" class="grand total">CANTIDAD DE PROFESORES EN
              MATRICULA:</td>
            <td class="grand total">'.($row_cnt).'<br>
            </td>
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
	
	$mpdf->Output('Rep_ProfTotales.pdf', 'I');

?>