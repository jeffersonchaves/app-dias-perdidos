<?php 

    /**
     * @author Jefferson Chaves <jefferson.chaves@ifpr.edu.br>
     */

    const DIAS_NO_ANO = 365; # número de dias em um ano
    const TEMPO_PERDIDO_CIGARRO = 11;  # tempo perdido, em minutos, para cada cigarro fumado

    if (!isset($_POST)) {
       header("location: index.php");
    }

    $cigarros = filter_var ( $_POST['campo_cigarros'], FILTER_SANITIZE_NUMBER_INT); // -> not a tag
    $anos     = filter_var ( $_POST['campo_anos'], FILTER_SANITIZE_NUMBER_INT); // -> not a tag

    if (!isset($cigarros) || !isset($anos)) {
        http_response_code(500);
    }

    /**
     * @author Dyogo Bendo <dyogoromagnabendo@gmail.com>
     * @source https://github.com/DyogoBendo/Linguagem-Web/blob/master/17-12-2021/treine-seu-cerebro.php
     */

    $cigarros_dia = $cigarros;  # número de cigarros por dia
    $numero_anos  = $anos;
    $numero_dias  = $numero_anos * DIAS_NO_ANO;    
    $total_cigarros = $cigarros_dia * $numero_dias;
    $total_tempo_perdido_minutos = TEMPO_PERDIDO_CIGARRO * $total_cigarros;

    
    $total_tempo_perdido_horas = intdiv($total_tempo_perdido_minutos, 60);
    $tempo_perdido_minutos = $total_tempo_perdido_minutos - (60 * intdiv($total_tempo_perdido_minutos, 60));

    $total_tempo_perdido_dias = intdiv($total_tempo_perdido_horas, 24);
    $tempo_perdido_horas = $total_tempo_perdido_horas - (24 * intdiv($total_tempo_perdido_horas, 24));

    $tempo_perdido_meses = intdiv($total_tempo_perdido_dias, 30);
    $tempo_perdido_dias = $total_tempo_perdido_dias - (30 * intdiv($total_tempo_perdido_dias, 30));
   
    require_once __DIR__ . '/index.php';
