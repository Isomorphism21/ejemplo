<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="factura.php" method="post">
        <label>Criptomoneda</label>
        <select name="cripto" id="cripto">
            <option value="">Seleccionar</option>
            <option value="btc">BTC</option>
            <option value="eth">ETH</option>
            <option value="sol">SOL</option>
        </select>
        <input type="number" name="numero">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php

    $btc = 100;
    $eth = 50;
    $sol = 20;

    if($_POST){
        $valor = $_POST["cripto"];
        $numero = "{$_POST["numero"]} <br>";

        if ($valor == 'btc'){
            $total = $btc * $numero;
            echo $total;
        }
        else if ($valor == 'eth'){
            $total = $eth * $numero;
            echo $total;
        }
        else if ($valor == 'sol'){
            $total = $sol * $numero;
            echo $total;
        }
        
    }

?>