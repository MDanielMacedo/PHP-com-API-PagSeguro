function pagamento(){
    console.log('Acessou');
    var endereco = jQuery('.endereco').attr('data-endereco');
    $.ajax({
        url: endereco + "pagamento.php",
        type: 'POST',
        datatype: 'json',
        success: function(retorno){
            concole.log(retorno);
        }
    });
}
