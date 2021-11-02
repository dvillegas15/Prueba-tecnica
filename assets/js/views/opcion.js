
$(document).ready(function() {

        $("#btnCrearOpcion").click(function () {
        var texto = $('#option').val();
        var idQ = $('#idQ').val();
       
        if(texto == ''){
            swal('Advertencia', 'Debe ingresar una opción', "error");
             return false;
        }

        var frm = $('#form-option');
        var formData = new FormData(frm[0]);

        $.ajax({
            type: "POST",
            url: 'agregarOpcion', 
            data: formData, 
            processData: false,
            contentType: false,
            success: function (data)
            {
              if (data != 0) { 
                swal({
                    title: "Hecho, Opción registrada",
                    text: "¿Desea agregar otra opción de respuesta?",
                    icon: "success",
                    buttons: true,
                })
                .then((next) => {
                    if (next) {
                        window.location= 'option?idByUrl='+idQ;                      
                    }else {
                        window.location= 'listOpcion?idByUrl='+idQ;    
                    }
                 }); 
                }
              else {
                  swal("Error",'No se creó la pregunta', "error");
              } 
            } 
        });
        return false; 
    }); 

    $("#btnEditarOpcion").click(function () {
        var texto = $('#option').val();
       
        if(texto == ''){
            swal('Advertencia', 'Debe ingresar una opción', "error");
             return false;
        }

        var frm = $('#form-option');
        var formData = new FormData(frm[0]);

        $.ajax({
            type: "POST",
            url: 'editarOpcion',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data)
            {   
              if (data != 0) { 
                swal("Correcto", '¡Se ha editado el registro correctamente!', "success");
                 setTimeout(function () {
                    window.location= 'general';
                    }, 2000);
              }
              else {
                  swal("Error",'No se editó el registro', "error");
              } 
            } 
        });
        return false; 
    }); 
});

function eliminarOpcion(id){
    swal({
        title: "¿Seguro que desea eliminar este registro?",
        text: "Una vez eliminado, no podrá recuperarlo!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                type: "POST",
                url: 'eliminarOpcion',
                data: {
                    id: id, 
                },
                success: function (data)
                {   
                    var respuesta = JSON.parse(data);
                    var estado = respuesta["estado"];
                    var mensaje = respuesta["mensaje"];
                    var redirect = respuesta["redirect"];
                    if(estado == "exito") {
                        swal("¡Hecho!", mensaje, "success");
                        setTimeout(function () {
                            window.location= redirect;
                        }, 2000);
                    }
                    else {
                        swal("Error", mensaje, "error");
                    }
                }
            });
        }
    });
}