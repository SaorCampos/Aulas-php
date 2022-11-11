<?php
$nome = "Sandra";
$sexo = "f";
$estadoCivil = "casada";

if($sexo == "f" && $estadoCivil == "casada"){
    echo "<script>let tempo = prompt('Quantos anos de casada?');document.write(tempo < 2 ? 'Esperar mais' : 'Ok')</script>";
}