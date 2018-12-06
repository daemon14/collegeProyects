$(function() {
  // Lista de Áreas
  $.post('formularios/insertlibro/InsertarLibro2Area.php').done(function(respuesta) {
    $('#ID_Area').html(respuesta);
  });
  // lista de SubÁreas	
  $('#ID_Area').change(function() {
    var el_area = $(this).val();
    // Lista de SubÁreas
    $.post('formularios/insertlibro/InsertarLibro2SubArea.php', {
      Areas: el_area
    }).done(function(respuesta) {
      $('#ID_SubArea').html(respuesta);
    });
  });
})
