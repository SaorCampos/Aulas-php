<?php
$altura = $_GET["altura"];
$peso = $_GET["peso"];
$imc = $peso/pow($altura, 2);
if($imc < 18.5){
    echo "Abaixo do peso";
}
if($imc >= 18.5 && $imc < 25){
    echo "Peso Ideal";
}
if($imc >= 25 && $imc < 30){
    echo "Acima do peso";
}
if($imc >= 30){
    echo "Obeso";
}