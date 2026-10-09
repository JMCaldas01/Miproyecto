<?php
require "Autor.php";

$autor = new Autor(
    nombre: "Rolando",
    apellido: "Osoiro",
    fechaNacimiento: "22 de mayo",
    trabajos: ["ragosorio", "La velada", "Dominguito"]
);

$autor->agregaTrabajo("Pepino");
$autor->agregaTrabajo("");
$autor->agregaTrabajo("Hola");
$autor->agregaTrabajo("ragosorio");
$autor->agregaTrabajo("Zanahoria");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre <?= $autor->nombre ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100dvh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <?= $autor ?>
    <h3>Trabajos hechos</h3>
    <ul>
        <?php foreach ($autor->trabajos as $trabajo): ?>
            <li><?= $trabajo ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>