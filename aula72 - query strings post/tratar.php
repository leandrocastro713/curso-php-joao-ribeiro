<?php
  if(!isset($_POST['usuario'])||!isset($_POST['senha'])){
    header('location:pagina1.php');
  }
  if(trim($_POST['usuario'])==''||trim($_POST['senha']=='')){
    echo'Usuário e/ou senha em branco <br>';
    echo '<input type="button" value="OK">';
    die();
  }
  echo 'Usuário: '.$_POST['usuario'].'<br>';
  echo 'Senha: '.$_POST['senha'];
?>