<?php
// cookies alteral um cookie
if(isset($_COOKIE["tempo_de_vida"])){
  setcookie("tempo_de_vida",1000);
  echo 'Cookie alterado!';
}else{
  setcookie("tempo_de_vida",10);
  echo 'Cookie inexistente!';
}