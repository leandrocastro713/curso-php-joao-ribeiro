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
    $nome = $_GET['nome'];
  ?>
  <h1>Pagina 2</h1> 
  <h3>Valor da Variável: <b><i> <?= $nome ?> </i></b> </h3> 
  <a href="pagina1.php?nome=<?= $nome ?>">Página 1</a>
  
    
</body>
</html>