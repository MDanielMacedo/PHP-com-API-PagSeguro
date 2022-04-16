<?php
include 'configuracao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api - PagSeguro</title>
</head>
<body>

    <button onclick="pagamento()">Pagar</button>
    <span class="endereco" data-endereco="<?php echo URL; ?>"></span>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
    <script src="./js/personalizado.js"></script>
</body>
</html>
