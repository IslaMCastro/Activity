<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Logica PHP </title>
</head>

<body>
    <h1>Logica PHP</h1>
    <form action="" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label for="valor1">Valor 1:</label>
            <input type="number" id="valor1" name="valor1">
        </div>
        <div>
            <label for="valor2">Valor 2:</label>
            <input type="number" id="valor2" name="valor2">
        </div>
        <div>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>

    </form>
</body>

</html>

<?php
function somar($a, $b)
{
    return $a + $b;
}

function subtrair($a, $b){
    return $a - $b;

}

function multiplicar($a, $b){
    return $a * $b;
}

function dividir($a, $b){
    if($b != 0){
        return $a / $b;
    }else{
        return 0;
    }
}


// quando usado 3 sinais de = é que eu quero que, além do valor o tipo tem que ser igual ao que está apos os ===
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $soma = somar($valor1, $valor2);
    $subtrair = subtrair($valor1, $valor2);
    $multiplicar = multiplicar($valor1, $valor2);
    $dividir = dividir($valor1, $valor2);

    echo "<h1>Meu nome é: $nome.</h1>";
    echo "<h2> os valores $valor1 e $valor2 resultam: </h2><br>";
    echo "<p>Soma: $soma . </p>";
    echo "<p>subtrair: $subtrair . </p>";
    echo "<p>multiplicar: $multiplicar . </p>";
    echo "<p>dividir: $dividir . </p>";


    // para mostrar algo na minha página uso o 'echo'


}
?>