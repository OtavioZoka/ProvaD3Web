<?php
include_once './SuperHeroi.php';
$Herois = array(
    new SuperHeroi(01, "Goku", "Protagonismo", 99999999999, 99999999, "Planeta Vegeta"),
    new SuperHeroi(02, "Voldemort", "Avada Kedavra", 1000, 1, "Terra"),
    new SuperHeroi(03, "Deku", "One For All", 50000, 50000, "Academia UA"),
    new SuperHeroi(04, "Saitama", "Protagonismo", 999999, 999999, "Heroi Classe B"),
);
for ($i = 0; $i < count($Herois); $i++) {
    echo "Id: " . $Herois[$i]->getId() . "<br>";     //Professor é so pra organizar a impressão
    echo "Nome: " . $Herois[$i]->getNome() . "<br>";
    echo "Poder Especial: " . $Herois[$i]->getPoderEspecial() . "<br>";
    echo "Energia: " . $Herois[$i]->getEnergia() . "<br>";
    echo "Forca: " . $Herois[$i]->getForca() . "<br>";
    echo "Origem: " . $Herois[$i]->getOrigem() . "<br>";
    echo "Poder Médio: " . $Herois[$i]->calcularPoderMedio() . "<br>";
    echo "Energia Aumentada: " . $Herois[$i]->aumentarEnergia() . "<br>";
    echo " ";
}
