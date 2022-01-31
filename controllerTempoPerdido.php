<?php 

    if (!isset($_POST)) {
       header("location: index.php");
    }

    $cigarros = filter_var ( $_POST['campo_cigarros'], FILTER_SANITIZE_NUMBER_INT); // -> not a tag
    $anos     = filter_var ( $_POST['campo_anos'], FILTER_SANITIZE_NUMBER_INT); // -> not a tag

    if (!isset($cigarros) || !isset($anos)) {
        http_response_code(500);
    }

    $cigarroPorDia = $cigarros;
    $periodoDeFumo = $anos; //anos
    $cigarros = $periodoDeFumo * 365 * $cigarroPorDia;
    $diasContados = floor(($cigarros * 11) / 60    / 24);
   
    require_once __DIR__ . '/index.php';
