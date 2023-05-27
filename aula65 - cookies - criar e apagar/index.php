<?php

setcookie('leu_as_condicoes', 'teste1',time() + 10, "/");
echo 'criou o cookie e ...';
if(isset($_COOKIE['leu_as_condicoes'])){
  setcookie('leu_as_condicoes', '', -1, "/");
  echo '... Cookie eliminado!';
}

