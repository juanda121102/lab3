<?php

class ImprimirAutor {
    public function getInfo(Autor $autor): void {
        echo "Autor: " . $autor->getNombre() . "\n";
        echo "Nacionalidad: " . $autor->getNacionalidad()."\n";
    }
}