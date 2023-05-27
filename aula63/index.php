<?php

//DURAÇÃO DOS COOKIES

if(!isset($_COOKIE["visitou_o_site"])){

  //primeira visita ao site
  setcookie('visitou_o_site', true, time()+3600);
  echo 'É a primeira visita ao site. Bem vindo!';

} else {
  //não é a primeira visita
  echo 'Você já esteve nesse site na ultima hora.';
}
