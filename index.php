<?php

$result = "";
$operation ='addition'; 

if (!empty($_GET['nombre1'])) {
    $nombre1 = $_GET['nombre1'];
}

if (!empty($_GET['nombre2'])) {
    $nombre2 = $_GET['nombre2'];
}

if (!empty($_GET['operation'])) {
    $operation = $_GET['operation'];
}

if ($operation == 'addition') 
{
    $result = $nombre1 + $nombre2;
} 
    elseif ($operation =='soustraction') 
    {
        $result = $nombre1 - $nombre2;
    } 
    elseif ($operation =='multiplication') 
    {
        $result = $nombre1 * $nombre2;
    } 
    elseif ($operation =='division') 
    {
        if ($nombre2 != 0) 
        {
            $result = $nombre1 / $nombre2;
        } else {
            echo 'il y a une erreur';
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <form method="GET">
        <input type="number" name="nombre1" placeholder="Entrer un nombre">
        <select name="operation" required>
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="number" name="nombre2" placeholder="Entrer un nombre">
        <button type="submit">=</button>
    </form>
    <?php if (!empty($nombre1) || !empty($nombre2)) : ?>
        <p>Le résultat de <?= $nombre1 ?> <?= $operation ?> <?= $nombre2 ?? ''  ?> et de : <?= $result ?></p>
    <?php endif; ?>
</body>

</html>