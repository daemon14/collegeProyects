$(function(){

	// Lista de Áreas
	$.post( 'formularios/modiflibros/jquery/ModificarLibroArea.php' ).done( function(respuesta)
	{
		$( '#ID_Area' ).html( respuesta );
	});

	// lista de SubÁreas	
	$('#ID_Area').change(function()
	{
		var el_area = $(this).val();
		
		// Lista de SubÁreas
		$.post( 'formularios/modiflibros/jquery/ModificarLibroSubArea.php', { Areas: el_area} ).done( function( respuesta )
		{
			$( '#ID_SubArea' ).html( respuesta );
		});
	});
	
})