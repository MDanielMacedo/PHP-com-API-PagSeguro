<?php
define('URL','https://api-pagseguro.herokuapp.com/');

$sandbox = true;
if($sandbox){
    define('EMAIL_PAGSEGURO', 'mdanielmacedo78@gmail.com');
    define('TOKEN_PAGSEGURO', '417A87DA41264FE98239783A56C973C1');
    define('URL_PAGSEGURO', 'https://ws.sandbox.pagseguro.uol.com.br/v2/');
    define('SCRIPT_PAGSEGURO', 'https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js');
}else{
    define('EMAIL_PAGSEGURO', 'mdanielmacedo78@gmail.com');
    define('TOKEN_PAGSEGURO', '5c7e618d-0782-455c-9379-8f5d18f9671f8df194ae4d7ba1a969bf220daa52721a73fd-0926-49d1-8ad4-787d252a3b17');
    define('URL_PAGSEGURO', 'https://ws.pagseguro.uol.com.br/v2/');
    define('SCRIPT_PAGSEGURO', 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js');
}

?>
