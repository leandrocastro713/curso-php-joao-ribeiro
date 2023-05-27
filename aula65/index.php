<?php

setcookie('leu_as_condicoes', true, time() + 10, "/");
echo 'criou o cookie e ...';
if(isset($_COOKIE['leu_as_condicoes'])){
  setcookie('leu_as_condicoes', '', -1, "/");
  echo '... Cookie eliminado!';
}

