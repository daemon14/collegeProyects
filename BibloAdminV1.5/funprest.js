$(function() {

	// Lista de Áreas
	$.post( 'formularios/insertprestamo/CantidadLibroArea.php' ).done( function(respuesta)
	{
		$( '#ID_Area' ).html( respuesta );
	});

	// lista de SubÁreas
	$('#ID_Area').change(function()
	{
		var el_area = $(this).val();

		// Lista de SubÁreas
		$.post( 'formularios/insertprestamo/CantidadLibroSubArea.php', { Areas: el_area} ).done( function( respuesta )
		{
			$( '#ID_SubArea' ).html( respuesta );
		});
	});

	// lista de Libros
	$('#ID_SubArea').change(function()
	{
		var el_subarea = $(this).val();

		// Lista de Libros
		$.post( 'formularios/insertprestamo/CantidadLibroLibro.php', { SubAreas: el_subarea} ).done( function( respuesta )
		{
			$( '#ID_Libro' ).html( respuesta );
		});
	});

	// lista de Libros disponibles
	$('#ID_Libro').change(function()
	{
		var el_libro = $(this).val();

		// Lista de Libros disponibles
		$.post( 'formularios/insertprestamo/CantidadLibroDisp.php', { Libros: el_libro} ).done( function( respuesta )
		{
			$( '#CantDisponibles' ).html( respuesta );
		});
	});

	// Lista de Beneficiarios
	$.post( 'formularios/insertprestamo/BeneficiarioID.php' ).done( function(respuesta)
	{
		$( '#ID_Benef' ).html( respuesta );
	});

	// lista de Tipos
	$('#ID_Benef').change(function()
	{
		var el_benef = $(this).val();

		// Lista de Tipos
		$.post( 'formularios/insertprestamo/BeneficiarioTipo.php', { Benef: el_benef} ).done( function( respuesta )
		{
			$( '#Tipo' ).html( respuesta );
		});
	});

})
