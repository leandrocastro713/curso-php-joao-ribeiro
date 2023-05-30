<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 2</title>
</head>
<body>
  <?php
    $n = isset($_GET['nome']) ? $_GET['nome'] : '<NoN>';
    $s = isset($_GET['sobrenome']) ? $_GET['sobrenome'] : '';
    if(trim($n) == '') {$n = 'NON';}
    if(trim($s) == '') {$s = 'NoSn';}
    if(!isset($_COOKIE['nome_e_sobrenome'])){
      setcookie('nome_e_sobrenome', 'estava vazio', time() + 60*60*24*30*12*365);
    }else{
      setcookie('nome_e_sobrenome', $n.' '.$s, time() + 60*60*24*30*12*365); //S M H D M A
    }
  ?>
  <h3>
    Nome vindo da pagina 1: <?=$n?> <br>
    Sobrenome vindo da pagina 1: <?=$s?> <br>
    Total do saldo: <?=$n.' '.$s?>
  </h3>

</body>
</html>