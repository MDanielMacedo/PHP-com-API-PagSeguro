<?php

include 'configuracao.php';

$urlSand = URL_PAGSEGURO . 'sessions?email=' . EMAIL_SANDBOX . '&token=' . TOKEN_SANDBOX;
$urlProd = URL_PAGSEGURO . 'sessions?email=' . EMAIL_PROD . '&token=' . TOKEN_PROD;

if($sandbox){
    $url = $urlSand;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $retorno = curl_exec($curl);
    curl_close($curl);

    $xml = simplexml_load_string($retorno);
    echo json_encode($xml);
}else{
    $url = $urlProd;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $retorno = curl_exec($curl);
    curl_close($curl);

    $xml = simplexml_load_string($retorno);
    echo json_encode($xml);
}
