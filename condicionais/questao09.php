<?php
$sexo = $_GET["sexo"];
$altura = $_GET["altura"];
if($sexo == "m"){
    $pesoIdeal = (72.7*$altura)-58;
    echo "Peso Ideal: ".number_format($pesoIdeal, 2)."kg";
}
if($sexo == "f"){
    $pesoIdeal = (62.1*$altura)-44.7;
    echo "Peso Ideal: ".number_format($pesoIdeal, 2)."kg";
}
if($sexo != "m" && $sexo !="f"){
    echo "Sexo não identificado";
}