/*
    Una vez que cargue el codumento, se enviara una peticion para recivir todos los datos de los usuarios
*/

$(document).ready(cargarIndex);

$(".modificarUsuario").click(modificarUsuario);

function modificarUsuario()
{

}


function cargarIndex(){
    var parametros = [];

    $.ajax({

        url: "/admin/usuarios/listaUsuarios",
        type: 'get',
            
        beforeSend: function () {
        },

        success: function (response){
            //alert("Todo correcto");
            
            /*
                aqui van todos loe evento que va a ser detectados una vez manipules el DOM
            */

              $(".usersContent").append(response)
                
              //alert(response.name)

              alert(response)

            

                

        },

        error: function (response) {
            alert("error al enviar la petición");
        }
    });
}