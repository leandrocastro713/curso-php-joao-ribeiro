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
    // $n = ($_GET['nome']);

  ?>
  
  <h3>Pagina 1</h3>
  <h3>Nome = <?=$n?></h3>
  <h3>Sobrenome = <?=$s?></h3> <br>
  <a href="pagina1.php?nome=<?=$n?>&sobrenome=<?=$s?>">Ir para pagina 1</a>

</body>
</html>