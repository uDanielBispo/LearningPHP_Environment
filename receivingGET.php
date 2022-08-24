<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receiving GET from Using$GET.php</title>
</head>
<body>
<?php
  if(isset($_GET['nome']) && isset($_GET['idade'])){ 
    $nome = htmlspecialchars($_GET['nome']);
    $idade = htmlspecialchars($_GET['idade']);
    echo "<h1>Seu nome é $nome e você tem $idade anos</h1>";
  }
 
?>
</body>
</html>