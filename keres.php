<?php
header("Content-Type: application/json; charset=UTF-8");

$tomb = [
    ["id" => 1, "name" => "Kiss Pista", "birthday" => "1961.01.01"],
    ["id" => 2, "name" => "Nagy Máté", "birthday" => "1999.12.31"],
    ["id" => 3, "name" => "Varga Elenonóra", "birthday" => "2010.01.01"],
    ["id" => 4, "name" => "Béby Blanka", "birthday" => "2018.03.01"],
];

$id = isset($_GET["id"]) ? (int)$_GET["id"] : -1;
$i = 0;
while ($i < count($tomb) && $tomb[$i]["id"] !== $id) $i++;

echo json_encode($i < count($tomb) ? $tomb[$i] : ["id" => -1, "name" => "", "birthday" => ""], JSON_UNESCAPED_UNICODE);
?>
