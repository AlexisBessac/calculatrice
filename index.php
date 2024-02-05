<?php

//Initialisation des variables
$result = "";
$operation = 'addition';
$nombre1 = "";
$nombre2 = "";

// Traitement du formulaire OU des paramètres de l'URL
if (!empty($_GET['nombre1'])) {
    $nombre1 = $_GET['nombre1'];
}

if (!empty($_GET['nombre2'])) {
    $nombre2 = $_GET['nombre2'];
}

if (!empty($_GET['operation'])) {
    $operation = $_GET['operation'];
}


//Si les valeurs sont des chiffres on fait les calculs demandés
if (is_numeric($nombre1) && is_numeric($nombre2)) {
    switch ($operation) {
        case 'addition':
            $result = $nombre1 + $nombre2;
            break;
        case 'soustraction':
            $result = $nombre1 - $nombre2;
            break;
        case 'multiplication':
            $result = $nombre1 * $nombre2;
            break;
        case 'division':
            if ($nombre2 != 0) {
                $result = $nombre1 / $nombre2;
            } else {
                echo "Diviser un nombre par zéro n'est pas possible";
            }
            break;
        default:
            echo "Opération non valide";
            break;
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
    <section>
    <form method="GET">
        <input type="text" name="nombre1" placeholder="Entrer un nombre" required>
        <select name="operation" required>
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="nombre2" placeholder="Entrer un nombre" required>
        <button type="submit">=</button>
    </form>
    </section>
    <?php if (!empty($nombre1) || !empty($nombre2)) : ?>
        <p>Le résultat est de : <?= $result ?></p>
    <?php endif; ?>
</body>

</html>