
$(document).ready(function() {
    $("#btnCrear").click(function () {
        var texto = $('#question').val();
       
        if(texto == ''){
            swal('Advertencia', 'Debe ingresar una pregunta', "error");
             return false;
        }
        var frm = $('#form-question');
        var formData = new FormData(frm[0]);

        $.ajax({
            type: "POST",
            url: 'agregar',
            data: formData, 
            processData: false,
            contentType: false,
            success: function (data)
            {   
              if (data != 0) { 
                swal("Correcto", 'Se ha creado la pregunta correctamente', "success");
                 setTimeout(function () {
                    window.location= 'option?idByUrl='+data;
                    }, 2000);
              }
              else {
                  swal("Error",'No se creó la pregunta', "error");
              } 
            } 
        });
        return false; // Evitar ejecutar el submit del formulario.
        
    }); 

    $("#btnEditar").click(function () {
        var texto = $('#question').val();
       
        if(texto == ''){
            swal('Advertencia', 'Debe ingresar una pregunta', "error");
             return false;
        }

        var frm = $('#form-question');
        var formData = new FormData(frm[0]);

        $.ajax({
            type: "POST",
            url: 'editar',
            data: formData, 
            processData: false,
            contentType: false,
            success: function (data)
            {   
              if (data != 0) { 
                swal("Correcto", 'Se ha editado el registro correctamente', "success");
                 setTimeout(function () {
                    window.location= 'general';
                    }, 2000);
              }
              else {
                  swal("Error",'No se editó el registro', "error");
              } 
            } 
        });
        return false; // Evitar ejecutar el submit del formulario.
        
    }); 
});

function eliminar(id){
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
                url: 'eliminar',
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