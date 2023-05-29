<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 1</title>
</head>
<body>
  <h3>Pagina 1</h3>
  <?php
    $a = "leandro castro da pagina 1"
  ?>
  <h3>
    Valor da variável $a: <?=$a?> <br>
    <a href="pagina2.php?a=<?=$a?>">Ir para pagina 2</a>
    <!-- <a href="pagina2.php">Ir para pagina 2</a> -->
  </h3>

</body>
</html>