<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Calculo do IMC</p>
         <form>
            peso: <input name="peso">
            <br />
            altura: <input name= "altura">
            <br />
            <button>calcular IMC</button>
            <p>resultado</p>
</form>

    <?php
    if (isset($_GET["peso"])){
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];
    $resultado = $peso / ($altura * $altura);
    echo "<p>O resultado é $resultado</p>";
    if ($resultado <=16) {
        echo "<p>Muito abaixo do peso</p>";
    } else if ($resultado > 29)  {
        echo "<p>Está acima do peso</p>";
    } else {
        echo "<p>Esta normal</p>";
    }
}
    ?>
</body>
</html>

    
