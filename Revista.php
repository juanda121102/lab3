<?php

require_once ("Autor.php");
require_once ("IPublicable.php");

class Revista implements IPublicable {
    private string $titulo;
    private int $año;
    private Autor $autor;
    private string $periodicidad;   

    public function __construct(string $titulo, int $año, Autor $autor, string $periodicidad) {
        $this->titulo = $titulo;
        $this->año = $año;
        $this->autor = $autor;
        $this->periodicidad = $periodicidad;
    }

    public function getInfo(): string {
    return "Revista: {$this->periodicidad} - {$this->titulo} ({$this->año})  \n" . $this->autor->getInfo();
    }
}