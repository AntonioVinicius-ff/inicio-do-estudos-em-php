<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
</head>
<body>
<?php
function exibirBoasVindas(){
echo'ola estou apredendo PHP! <br/>';
}
exibirBoasVindas();
function calculandoTerreno($Largura, $comprimento){
    $area = $Largura * $comprimento;
    return $area;
}
echo calculandoTerreno(5, 25);
echo '<br/>';
echo date('d/ m/ Y/ H:i');

echo'<br/>';
echo date_default_timezone_get();
date_default_timezone_set('America/Sao_Paulo');
echo'<br/>';
echo date('d/ m/ Y H:i');
?>
</body>
</html>
