<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documenfdfdfdt</title>
</head>
<body>
  
</body>
</html>

<?php
if(isset($_COOKIE["meu_cookie"])){
  echo $_COOKIE["meu_cookie"];
} else {
  setcookie('meu_cookie', date('H:i:s'));
}
echo '<p>Ter mi na do<p>';
