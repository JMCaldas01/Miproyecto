<?php
class Autor
{
    public function __construct(protected string $nombre, protected string $apellido, protected string $fechaNacimiento, protected array $trabajos) {}
    
    public function __get($buscar){
        if (property_exists($this, $buscar)) {
            return $this->$buscar;
        };

        return null;
    }

    public function __toString(){
        $html = "<h1>Hola, $this->nombre $this->apellido</h1>";
        $html .= "<h2>naciste en $this->fechaNacimiento</h2>";
        $html .= "<h3>Trabajos hechos</h3>";
        $html .= "<ul>";
        foreach ($this->trabajos as $trabajo) {
            $html .= "<li>$trabajo</li>";
        }
        $html .= "</ul>";
        return $html;
    }

    public function agregaTrabajo($trabajo):void {

        if(in_array($trabajo, $this->trabajos)) return;
        if(empty($trabajo)) return;

        $this->trabajos[] = $trabajo;
    }
}