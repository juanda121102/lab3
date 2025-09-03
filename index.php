<?php


require_once ("Autor.php");
require_once ("ImprimirAutor.php");
require_once ("Libro.php");
require_once ("Revista.php");

$autorElenaWhite = new Autor("Elena G. de White", "Americana");
$autorMarkTwain = new Autor("Mark Twain", "Ondureña");
$autorYanniRacout = new Autor("Yanni Racout", "Griega");
$autorAlyssaKracoz = new Autor("Alyssa Kracoz", "Rusa");

echo $autorElenaWhite->getInfo();
echo $autorMarkTwain->getInfo();
echo $autorYanniRacout->getInfo();
echo $autorAlyssaKracoz->getInfo()."\n";

$ImprimirAutor = new ImprimirAutor();
$ImprimirAutor->getInfo($autorElenaWhite)."\n";

$libro1 = new Libro("El camino a Cristo", 1892, $autorElenaWhite);
$libro2 = new Libro("Las aventuras de Tom Sawyer", 1876, $autorMarkTwain);

$revista1 = new Revista("National Geographic", 2023, $autorYanniRacout, "Mensual");
$revista2 = new Revista("Time", 2023, $autorAlyssaKracoz, "Semanal");

$publicables = [$libro1, $libro2, $revista1, $revista2];

foreach ($publicables as $item) {
    echo $item->getInfo()." \n";
}