<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 1</title>
</head>
<body>
  <?php $a = "João Joaquim"; ?>
  <h1>Pagina 1</h1> 
  <h3>Valor da Variável: <b><i> <?= $a ?> </i></b> </h3> 
  <a href="pagina2.php?nome=<?= $a ?>">Página 2</a>
  
    
</body>
</html>