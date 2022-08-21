<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conhecendo o PHP</title>
</head>
<body>

  <?php
    class classVeiculo{
      public $tipo;
      public $cor;
      public function __construct($tipo, $cor){
        $this->tipo = $tipo;
        $this->cor = $cor;
        
      }
      public function msg(){
        return "$this->tipo $this->cor";
      }
    }

    $veiculos = [
    new classVeiculo("Bicicleta", "Rosa"),
    new classVeiculo("Carro", "Azul"),
    new classVeiculo("Moto", "Cinza"),
    new classVeiculo("Triciculo", "Purpura")
  ];

    for ($i=0; $i < count($veiculos); $i++) 
      echo $veiculos[$i]->msg().'<br>';
    
    foreach($_SERVER as $chave => $valor)
      echo "<strong>$chave</strong> | $valor <br>";
    
  ?>

</body>
</html>