
$(document).ready(function() {
    $("#btnGuardar").click(function () {
        var idPregunta = $('#idPregunta').val();
        var idOpcion = document.querySelector('input[name="radio"]:checked').id;
       
        if(idOpcion == null){
            swal('Advertencia', 'Debe seleccionar una opción', "error");
             return false;
        }
    
        $.ajax({
            type: "POST",
            url: 'agregar',
            data: {
                    pregunta: idPregunta, 
                    opcion: idOpcion
                },
            success: function (data)
            {   
              if (data != 0) { 
                swal("Correcto", 'Se ha guardado la respuesta', "success");
                 setTimeout(function () {
                    window.location= '../votacion';
                    }, 2000);
              }
              else {
                  swal("Error",'No se guardó la respuesta', "error");
              } 
            } 
        });
        return false; 
        
    }); 
});
