<?php
$favcolor = $_POST["favcolor"];
// Utilizando o switch case para determinar a cor favorita

switch ($favcolor) {
    case "vermelho":
        $resultado = "Sua cor favorita é vermelho!";
        break;
    case "azul":
        $resultado = "Sua cor favorita é azul!";
        break;
    case "verde":
        $resultado = "Sua cor favorita é verde!";
        break;
    default:
        $resultado = "Sua cor favorita não é vermelho, azul ou verde!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Feito por: Gustavo Felix Ferreira da Silva & Nayara Aparecida Silva Fioraneli — 2MD2 -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cor favorita</title>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<a href="index.html"></a>
<label><?php echo $resultado ?></label>
</body>

</html>