<?php
class Autor {
    public function __construct(
        public string $nombre,
        public string $app,
        public string $apm,
        public int $edad,
        public string $carrera,
        public array $cursos
    ) {}
}

$autor = new Autor(
    nombre: 'Emmanuel Garcia Roldan',
    app: 'Garcia',
    apm: 'Roldan',
    edad: 35,
    carrera: 'Ing en Sistemas',
    cursos: ['Backend PHP', 'Laravel', 'Introducción a Android']
);

class Curso {
    public function __construct(
        public string $titulo,
        public string $subtitulo,
        public string $descripcion,
        public string $costo,
        public array $etiqueta,
        public array $etiqueta2
    ) {}
}

$curso = new Curso(
    titulo: 'Aplicaciones en Android',
    subtitulo: 'Introducción al desarrollo de APK',
    descripcion: 'Inicio en Android Studio',
    costo: 'Gratis',
    etiqueta: ["PHP", "Laravel", "Javascript", "CSS", "Angular"],
    etiqueta2: ["MySQL", "SQL", "MongoDB"]
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso->titulo ?></title>
</head>
<body>
    <h2>Bienvenido a <?= $curso->titulo ?></h2>
    <h4><?= $curso->subtitulo ?></h4>
    <h4><?= $curso->descripcion ?></h4>
    <h3>Costo: <?= $curso->costo ?></h3>

    <strong>Etiquetas</strong>
    <ul>
        <?php foreach ($curso->etiqueta as $etiquetas): ?>
            <li><?= $etiquetas ?></li>
        <?php endforeach; ?>
    </ul>

    <strong>Cursos relacionados</strong>
    <ul>
        <?php foreach ($curso->etiqueta2 as $etiquetas2): ?>
            <li><?= $etiquetas2 ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Nombre del autor: <?= $autor->nombre . " " . $autor->app . " " . $autor->apm ?></h2>
    <h3>Edad: <?= $autor->edad ?></h3>
    <h3>Carrera: <?= $autor->carrera ?></h3>

    <h4>Cursos que da</h4>
    <ul>
        <?php foreach ($autor->cursos as $cursoDa): ?>
            <li><?= $cursoDa ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
