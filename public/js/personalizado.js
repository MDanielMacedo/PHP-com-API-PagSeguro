function pagamento(){
    // console.log('Acessou');
    var endereco = jQuery('.endereco').attr('data-endereco');
    $.ajaxt({
        url: endereco + "pagamento.php",
        type: 'POST',
        datatype: 'json',
        sucess: function(retorno){
            concole.log(retorno);
        }
    });
}
