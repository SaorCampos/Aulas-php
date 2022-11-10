<?php
$mes = 10;
const SENHA = 'qwert1233';
echo match($mes){
    1=> 'Janeiro',
    2=> 'Fevereiro',
    3=> 'Março',
    4=> 'Abril',
    5=> 'Maio',
    6=> 'Junho',
    7=> 'Jullho',
    8=> 'Agosto',
    9=> 'Setembro',
    10=> 'Outubro',
    11=> 'Novembro',
    12=> 'Dezembro',
    default => 'Mes invalido',
};