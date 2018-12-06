<?php
	setlocale(LC_ALL,"es_VE");
	header ('Content-type: text/html; charset=utf-8');
	require_once('mpdf/mpdf.php');
	
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
	$query = "SELECT * FROM beneficiario
	ORDER BY ID_Benef";
	$prepare = $con->prepare($query);
	$prepare->execute();
	$resultSet = $prepare->get_result();
	$row_cnt = mysqli_num_rows($resultSet);
	$tiempo = date(DATE_W3C);
	while($beneficiario[] = $resultSet->fetch_array());
	$resultSet->close();
	$prepare->close();
	$con->close();
	
	//print_r($beneficiario);
	//die();
	
	$html = '<header class="clearfix">
      <div id="logo"> <img src="image/LogoReportes.png"> </div>
      <h1>LISTADO GENERAL DE BENEFICIARIOS</h1>
      <div id="company" class="clearfix">
        <div>LICEO BOLIVARIANO "PEDRO MARIA FREITES" - PUERTO LA CRUZ - '.($tiempo).'</div>
      </div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: left; width: 163px;" class="service"><b>Cédula</b></th>
            <th style="text-align: left; width: 180px;" class="desc"><b>Apellido<br></b></th>
            <th style="text-align: left; width: 180px;"><b>Nombre<br></b></th>
			<th style="text-align: center;"><b>Sexo<br></b></th>
			<th style="text-align: right;"><b>Tipo<br></b></th>
          </tr>
        </thead>
        <tbody>';
		for($i = 0; $i < count($beneficiario) - 1; $i++) {
			$beneficiarios = $beneficiario[$i];
			if ($i % 2 == 0) {
			$html .= '<tr bgcolor="#F5F5F5">
						<td style="text-align: left;" class="service">'.$beneficiarios['ID_Benef'].'<br></td>
						<td style="text-align: left;" class="desc">'.$beneficiarios['Apellido_Benef'].'<br></td>
						<td style="text-align: left;">'.$beneficiarios['Nombre_Benef'].'<br></td>
						<td style="text-align: center;">'.$beneficiarios['Sexo'].'<br></td>
						<td style="text-align: right;">'.$beneficiarios['Tipo'].'<br></td>
					</tr>';
			}
			else {
			$html .= '<tr>
						<td style="text-align: left;" class="service">'.$beneficiarios['ID_Benef'].'<br></td>
						<td style="text-align: left;" class="desc">'.$beneficiarios['Apellido_Benef'].'<br></td>
						<td style="text-align: left;">'.$beneficiarios['Nombre_Benef'].'<br></td>
						<td style="text-align: center;">'.$beneficiarios['Sexo'].'<br></td>
						<td style="text-align: right;">'.$beneficiarios['Tipo'].'<br></td>
					</tr>';
			}
		}
		
	$html .= '
          <tr>
            <td colspan="4" class="grand total">CANTIDAD DE BENEFICIARIOS REGISTRADOS:</td>
            <td class="grand total">'.($row_cnt).'<br>
            </td>
          </tr>
        </tbody>
      </table>
      <div id="notices"> </div>
    </main>';
	
	$mpdf =new mPDF('utf-8', 'A4');
	$css = file_get_contents('Reportes/style.css');
	$mpdf->writeHTML($css, 1);
	$html = utf8_decode($html);
	$html = utf8_encode($html);
	$mpdf->writeHTML($html);
	
	$mpdf->Output('Rep_BenefTotales.pdf', 'I');

?>