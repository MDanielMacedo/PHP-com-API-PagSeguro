function pagamento(){
    console.log('Acessou');
    var endereco = jQuery('.endereco').attr('data-endereco');
    $.ajax({
        url: endereco + "./pagamento.php",
        type: 'POST',
        datatype: 'json',
        success: function(retorno){
            console.log(retorno);
            PagSeguroDirectPayment.setSessionId(retorno.id);
        },
        complete: function(retorno) {
            // Callback para todas chamadas.
            listarMeiosPag();
        }
    });
}

function listarMeiosPag(){
    PagSeguroDirectPayment.getPaymentMethods({
        amount: 500.00,
        success: function(retorno) {
            // Retorna os meios de pagamento disponíveis.
            console.log(retorno);
        },
        error: function(retorno) {
            // Callback para chamadas que falharam.
        },
        complete: function(retorno) {
            // Callback para todas chamadas.
        }
    });

}
