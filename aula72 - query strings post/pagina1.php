<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 1</title>
  <style>
    body{
      display:flex;
      justify-content: center;
      align-items: center;
      height:100vh;
      font-family: Arial, Helvetica, sans-serif;
    }
    .container{
      display:flex;
      justify-content: center;
      align-items: center;
      width:350px;
      height: 250px;
      padding: 1.3rem 0 1.4rem;
      background-color: silver;
      border-radius: 3px;
      border: 1px solid gray;
    }
    #btn-login{
      position:relative;
      width:100%;
      height: 2rem;
      margin:0 auto;
    }
    form{
      display:flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }
    #usuario, #senha {
      font-size: 1.2rem;
      font-weight: 400;
      width: 200px;
    }
    #title{
      font-size: 1.4rem;
      letter-spacing: 2px;
      color:blue;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action='tratar.php' method='POST'>
      <h3 id='title'>Entre com seu login</h3>
      <p>Usuario: <input type="text" name="usuario" id="usuario"></p>
      <p>Senha: <input type="password" name="senha" id="senha"></p>
      <p><input id='btn-login' type="submit" value="Login"></p>

    </form>
  </div>
</body>

</html>