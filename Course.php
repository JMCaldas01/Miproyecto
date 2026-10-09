<?php

class Curso 
{
    public function __construct(
        protected string $titulo,
        protected string $subtitulo,
        protected string $descripcion,
        protected array $etiquetas,
    )
    {
        //
    }

    public function getTitulo(): string 
    {
        return $this->titulo;
    }

    public function getSubtitulo(): string
    {
        return $this->subtitulo;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function getEtiquetas(): array
    {
        return $this->etiquetas;
    }

    public function setEtiquetas(string $etiqueta): void
    {
        if (in_array($etiqueta, $this->etiquetas)){//si dentro de mi arreglo ya existe la palabra que estoy pasando entonces no retornes nada
            return;
        }
        if (empty($etiqueta)) {
            return;
        }

        $this->etiquetas[] = $etiqueta;

    }
}