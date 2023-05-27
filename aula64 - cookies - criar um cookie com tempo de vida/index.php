<?php

//COOKIES - CRIAR UM COOKIE COM TEMPO DE VIDA

if (!isset($_COOKIE['visitou_o_site'])){

    setcookie('visitou_o_site', true, time() + (24 * 60 * 60));
    echo 'Esta é a sua primeira visita ao site. Bem vindo!';
} else {
    echo 'Você já visitou esse site hoje! ';
}