$(document).ready(function(){
    $("#frmPaciente").dialog({
        autoOpen: false,
        height: 310,
        width: 400,
        modal: true,
        buttons: {
            "Insertar":insertarPaciente,
            "Cancelar":cancelar
        }
    });
});
function consultarPaciente(){
    var url = "index.php?accion=consultarPaciente&documento=" +
$("#asignarDocumento").val();
    $("#paciente").load(url,function(){
    });
}
function mostrarFormulario(){
    documento = "" + $("#asignarDocumento").val();
    $("#PacDocumento").attr("value",documento);
    $("#frmPaciente").dialog('open');
}

function insertarPaciente(){
    queryString = $("#agregarPaciente").serialize();
    url = "index.php?accion=ingresarPaciente&" + queryString ;
    $("#paciente").load(url);
    $("#frmPaciente").dialog('close');
    }

function cancelar(){
    $(this).dialog('close');
} 