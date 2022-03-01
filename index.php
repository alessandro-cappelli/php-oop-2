<?php
require_once __DIR__. '/classes/Sala1.php';
require_once __DIR__. '/classes/Sala2.php';
require_once __DIR__. '/classes/Movies.php';

$sale = [
    new Sala1(1, 150),
    new Sala1(2, 100),
    new Sala1(3, 230),
    new Sala1(4, 250),
    new Sala2(5, 200, ["schizzi", "vibrazione"]),
];
$movie = [
    new Movies("Luigi Proietti detto Gigi", "Documentario", "1:00"),
    new Movies("The Batman", "Fantasy", "2:30"),
    new Movies("Avatar", "Fantasy", "3:00"),
    new Movies("Sul sentiero blu", "Documentario", "1:30"),

];
// $programmazione = [
//     new programmazione($movie[0], "03-03-2022", "17:30", $sale[0]),
//     new programmazione($movie[1], "03-03-2022", "18:00", $sale[1]),
//     new programmazione($movie[2], "03-03-2022", "20:30", $sale[1]),
//     new programmazione($movie[3], "03-03-2022", "18:30", $sale[0]),
// ];

var_dump($movie);

// 1)
var_dump($sale);

