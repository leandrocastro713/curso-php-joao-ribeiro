<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 1</title>
</head>
<body>
  
  <?php
    $n = 'Chico';
    $s = 'Xavier';
  ?>
  
  <h3>Pagina 1</h3>
  <h3>Nome = <?=$n?></h3>
  <h3>Sobrenome = <?=$s?></h3> <br>
  <a href="pagina2.php?nome=<?=$n?>&sobrenome=<?=$s?>">Ir para pagina 2</a>

</body>
</html>
