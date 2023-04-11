var n1 = 0;
var n2 = 0;
var total = 0;
var resultado = $('#resultado');
function pegarvalor(){
    n1 = parseFloat($('#txtN1').val());
   n2 = parseFloat($('#txtN2').val());
}

$('#btoShow').click(function () {
    resultado.show();
})
    $('#btoHide').click(function () {
        resultado.Hide();
    })
        $('#btoToggle').click(function () {
            resultado.Toggle();
        })
