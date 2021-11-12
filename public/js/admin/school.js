$(document).ready(loadTable);

function loadTable(){
    var params = [];
    
    $.ajax({
        data: params,
        url: 'admin/institutos',
        type: 'post',

        success: function (response) {
            $(".customTContent").append(response);
        },

        error: function (response) {
            alert("error en la peticion");
        }
    })
}