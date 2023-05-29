<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 2</title>
</head>
<body>
  <h3>Pagina 2</h3>
  <?php
    $nome = isset($_GET['a']) ? $_GET['a'] : 'Leandro Castro da pagina 2'
  ?>
  <h3>
    <?=$nome?>
    <a href="pagina1.php?a=<?=$nome?>">Ir para pagina 1</a>
  </h3>

</body>
</html>