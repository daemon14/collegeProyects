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
	$query = "SELECT libro.ID_Libro, libro.Titulo, beneficiario.ID_Benef, beneficiario.Nombre_Benef, beneficiario.Apellido_Benef, prestamo.Fecha_Prest 
	FROM libro, prestamo, beneficiario
	WHERE libro.ID_Libro = prestamo.ID_Libro
	AND beneficiario.ID_Benef = prestamo.ID_Benef
	ORDER BY prestamo.ID_Prestamo, prestamo.Fecha_Prest DESC";
	$prepare = $con->prepare($query);
	$prepare->execute();
	$resultSet = $prepare->get_result();
	$row_cnt = mysqli_num_rows($resultSet);
	$tiempo = date(DATE_W3C);
	while($prestamo[] = $resultSet->fetch_array());
	$resultSet->close();
	$prepare->close();
	$con->close();
	
	//print_r($prestamo);
	//die();
	
	$html = '<header class="clearfix">
      <div id="logo"> <img src="image/LogoReportes.png"> </div>
      <h1>LISTADO GENERAL DE PRÉSTAMOS</h1>
      <div id="company" class="clearfix">
        <div>LICEO BOLIVARIANO "PEDRO MARIA FREITES" - PUERTO LA CRUZ - '.($tiempo).'</div>
      </div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: left; width: 163px;" class="service"><b>ISBN</b></th>
            <th style="text-align: left; width: 200px;" class="desc"><b>Titulo<br></b></th>
            <th style="text-align: left; width: 100px;"><b>Cédula<br></b></th>
			<th style="text-align: left;"><b>Beneficiario<br></b></th>
			<th style="text-align: right;"><b>Fecha<br></b></th>
          </tr>
        </thead>
        <tbody>';
		for($i = 0; $i < count($prestamo) - 1; $i++) {
			$prestamos = $prestamo[$i];
			if ($i % 2 == 0) {
			$html .= '<tr bgcolor="#F5F5F5">
						<td style="text-align: left;" class="service">'.$prestamos['ID_Libro'].'<br></td>
						<td style="text-align: left;" class="desc">'.$prestamos['Titulo'].'<br></td>
						<td style="text-align: left;">'.$prestamos['ID_Benef'].'<br></td>
						<td style="text-align: left;">'.$prestamos['Nombre_Benef'].", ".$prestamos['Apellido_Benef'].'<br></td>
						<td style="text-align: right;">'.$prestamos['Fecha_Prest'].'<br></td>
					</tr>';
			}
			else {
			$html .= '<tr>
						<td style="text-align: left;" class="service">'.$prestamos['ID_Libro'].'<br></td>
						<td style="text-align: left;" class="desc">'.$prestamos['Titulo'].'<br></td>
						<td style="text-align: left;">'.$prestamos['ID_Benef'].'<br></td>
						<td style="text-align: left;">'.$prestamos['Nombre_Benef'].", ".$prestamos['Apellido_Benef'].'<br></td>
						<td style="text-align: right;">'.$prestamos['Fecha_Prest'].'<br></td>
					</tr>';
			}
		}
		
	$html .= '
          <tr>
            <td colspan="4" class="grand total">CANTIDAD DE PRÉSTAMOS REALIZADOS:</td>
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
	
	$mpdf->Output('Rep_PrestTotales.pdf', 'I');

?>