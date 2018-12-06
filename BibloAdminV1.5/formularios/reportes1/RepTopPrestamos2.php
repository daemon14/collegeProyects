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
	$PrestFecha1 = ($_POST['PrestFecha1']);
	$PrestFecha2 = ($_POST['PrestFecha2']);
	$query = "SELECT libro.ID_Libro, libro.Titulo, autor.Nombre_Autor, libro.ID_SubArea, COUNT(prestamo.ID_Libro) AS PrestTotales FROM libro, libro_autor, autor, prestamo
	WHERE libro.ID_Libro = prestamo.ID_Libro
	AND libro.ID_Libro = libro_autor.ID_Libro
	AND autor.ID_Autor = libro_autor.ID_Autor
	AND prestamo.Fecha_Prest BETWEEN '$PrestFecha1' AND '$PrestFecha2'
	GROUP BY libro.ID_Libro
	ORDER BY PrestTotales DESC, libro.Titulo";
	$prepare = $con->prepare($query);
	$prepare->execute();
	$resultSet = $prepare->get_result();
	$row_cnt = mysqli_num_rows($resultSet);
	$tiempo = date(DATE_W3C);
	while($libro[] = $resultSet->fetch_array());
	$resultSet->close();
	$prepare->close();
	$con->close();
	
	//print_r($libro);
	//die();
	
	$html = '<header class="clearfix">
      <div id="logo"> <img src="image/LogoReportes.png"> </div>
      <h1>LIBROS MÁS SOLICITADOS<br>DESDE '.($PrestFecha1).' HASTA '.($PrestFecha2).'</h1>
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
            <th style="text-align: left; width: 150px;"><b>Autor<br></b></th>
			<th style="text-align: center;"><b>SubArea<br></b></th>
			<th style="text-align: right;"><b>Préstamos<br></b></th>
          </tr>
        </thead>
        <tbody>';
		for($i = 0; $i < count($libro) - 1; $i++) {
			$libros = $libro[$i];
			if ($i % 2 == 0) {
			$html .= '<tr bgcolor="#F5F5F5">
						<td style="text-align: left;" class="service">'.$libros['ID_Libro'].'<br></td>
						<td style="text-align: left;" class="desc">'.$libros['Titulo'].'<br></td>
						<td style="text-align: left;">'.$libros['Nombre_Autor'].'<br></td>
						<td style="text-align: center;">'.sprintf("%03d", $libros['ID_SubArea']).'<br></td>
						<td style="text-align: right;">'.$libros['PrestTotales'].'<br></td>
					</tr>';
			}
			else {
			$html .= '<tr>
						<td style="text-align: left;" class="service">'.$libros['ID_Libro'].'<br></td>
						<td style="text-align: left;" class="desc">'.$libros['Titulo'].'<br></td>
						<td style="text-align: left;">'.$libros['Nombre_Autor'].'<br></td>
						<td style="text-align: center;">'.sprintf("%03d", $libros['ID_SubArea']).'<br></td>
						<td style="text-align: right;">'.$libros['PrestTotales'].'<br></td>
					</tr>';
			}
		}
		
	$html .= '
          <tr>
            <td colspan="4" class="grand total"></td>
            <td class="grand total"><br>
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
	
	$mpdf->Output('Rep_LibrosTotales.pdf', 'I');

?>