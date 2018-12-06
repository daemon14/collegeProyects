<?php
    mysql_connect("localhost", "root", "") or die("Error al conectar con la Base de Datos: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("bibliopmf") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT libro.Titulo, autor.Nombre_Autor, libro.ID_SubArea, libro.Ejemplares, COALESCE(prestamo.CantPrestados, 0) AS CantPrestados, libro.Ejemplares-COALESCE(prestamo.CantPrestados, 0) CantDisponibles FROM autor, libro_autor, subarea, libro LEFT JOIN (SELECT prestamo.ID_Libro, COUNT(*) CantPrestados FROM prestamo WHERE estado='Ocupado' GROUP BY ID_Libro) prestamo ON libro.ID_Libro = prestamo.ID_Libro WHERE libro.ID_Libro = libro_autor.ID_Libro 
		AND autor.ID_Autor = libro_autor.ID_Autor 
		AND libro.ID_SubArea = subarea.ID_SubArea 
		AND ((libro.Titulo LIKE '%$query%') OR (autor.Nombre_Autor LIKE '%$query%'))") or die(mysql_error());
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) >= 1){ // if one or more rows are returned do following
            
			echo "<table align='center' border = '4'>";
			echo "<tr><td colspan= '5' align='center'><b>Resultado de la búsqueda</b></td></tr>";
			echo "<tr><td><b>Título del libro</b></td><td><b>Nombre del autor</b></td><td><b>Área</b></td><td><b>Ejemplares Totales</b></td><td><b>Ejemplares Disponibles</b></td></tr>";
			
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<tr><td>".$results['Titulo']."</td><td>".$results['Nombre_Autor']."</td><td><center>".$results['ID_SubArea']."</center></td><td><center>".$results['Ejemplares']."</center></td><td><center>".$results['CantDisponibles']."</center></td></tr>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "<b>Sin Resultados</b>";
        }
         
    }
    else{ // if query length is less than minimum
        echo "El tamaño mínimo es: ".$min_length;
    }
?>
