<?php
  if(!isset($_GET['nome'])){
    header('location:pagina1.php');
  }
?>

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
    $n = htmlspecialchars($_GET['nome']);
    $s = htmlspecialchars($_GET['sobrenome']);
  ?>
  
  <h3>Pagina 2</h3>
  <h3>Nome vindo da pagina 1 = <?=$n?></h3>
  <h3>Sobrenome vindo da pagina 1= <?=$s?></h3> <br>
  <a href="pagina1.php">Ir para pagina 1</a>

</body>
</html>