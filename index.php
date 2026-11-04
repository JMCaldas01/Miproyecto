<?php 

require __DIR__ . '/vendor/autoload.php';

use App\Course;
use App\CourseType;

$course = new Course(
    title: 'Curso profesional de PHP y LARAVEL',
    subtitle: 'Aprende desde cero y crea aplicaciones completas con PHP y LARAVEL',
    description: 'En este curso aprenderás a desarrollar aplicaciones web utilizando PHP y el framework LARAVEL. Desde los conceptos básicos hasta técnicas avanzadas, te guiaremos paso a paso para que puedas crear proyectos profesionales.',
    tags: ['PHP', 'LARAVEL', 'Desarrollo web'],
    type: CourseType::PAID

);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>
<body>
    <?= $course ?>
</body>
</html>