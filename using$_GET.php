<?php
  isset($_GET['nome']) ? $nome = htmlspecialchars($_GET['nome']) : $nome = "Mundo!";
  isset($_GET['idade']) ? $idade = htmlspecialchars($_GET['idade']) : $idade = " ";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Using $_GET</title>
  <style>body{ background: gray; color: white;}</style>
</head>
<body>
  <h1><?php echo 'Olá ' . $nome; ?></h1>
  <a href="Using$_GET.php?nome=Pedro">Ir para Pedro</a><br>
  <a href="Using$_GET.php?nome=Daniel">Ir para Daniel</a><br>
  <a href="Using$_GET.php?nome=Kedny">Ir para Kedny</a>
  <hr>
  <form method="get" action="receivingGET.php">
    <input type="text" placeholder="Digite seu nome" name="nome"><br><br>
    <input type="number" placeholder="Digite sua idade" name="idade"><br><br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>