<?php
$course = [
    'title' => 'Curso profesional de PHP y Laravel',
    'subtitle' => 'Aprende PHP y Laravel desde cero',
    'description' => 'lorem ipsum dolor',
    'tags' => [
        'PHP',
        'Laravel',
        'JavaScript',
        'HTML',
        'CSS',
        'MySQL',
    ],
    'lecciones' => [
        'Funda,entos de PHP',
        'Introduccion a Laravel',
        'Bases de datos con MySQL',
        'Diseño empresarial con CSS'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $course['title']?></title>
</head>
<body>
    <h1>Bienvenido al <?=  $course['title']?> </h1>
    <h2><?= $course['subtitle'] ?></h2>

    <p><?= $course['description'] ?></p>

    <p>
       <strong> Etiquetas </strong>
        <ul>
        
           <?php foreach ($course['tags'] as $tag):?>
                <li><?=$tag ?></li>
           <?php endforeach;?>               
        </ul>             
    </p>

    <p>
   <strong> Lecciones </strong>
    <ul>
    
       <?php foreach ($course['lecciones'] as $leccion):?>
            <li><?=$leccion ?></li>
       <?php endforeach;?>               
    </ul>             
</p>

    </body>
</html>