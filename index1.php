<?php
//Adattömb: indexelt tömb(0..1..2..3) és benne belső asszociatív

//tömbökkel(kulcs=>érték)

$tomb = [
array("id"=> 1, "name" => "Kiss Pista", "birthday" => "1961.01.01"),
array("id"=> 2, "name" => "Nagy Máté", "birthday" => "1999.12.31"),
array("id"=> 3, "name" => "Varga Elenonóra", "birthday" => "2010.01.01"),
array("id"=> 4, "name" => "Béby Blanka", "birthday" => "2018.03.01"),
        ];

//ismétlés: get methódus
//meghívás: index.php <- ekkor nincs paraméter, $_GET["id"]=-1
//meghívás értékkel: index.php?id=2, $_GET["id"]=2
//megjegyzés: index.php?id=5 ekkor $_GET["id"]=5
//tehát: ha van beállítva, akkor

$id = isset($_GET["id"])? (int)$_GET["id"] : -1;

//Lineáris keresés <- ezt már ismerjük. Addig megyünk míg meg nem találjuk
//és végére nem jutottunk a tömbnek

$i = 0;
while( $i<count($tomb) && $tomb[$i]["id"] != $id )
{
$i++;
}
//ha megtaláltuk
if($i< count($tomb) )
{
//kiírjuk json-ben az id alapján megtalált indexhez tartozó asszociatív tömböt
$json = json_encode( $tomb[$i], JSON_UNESCAPED_UNICODE );
}
else //végére jutottunk a tömbnek
{
//json-ben kiírjuk a json_encode() hasában lévő asszociatív tömböt
$json = json_encode( array("id" => -1, "name" => "Nem létezõ név",
"birthday" => "1900.01.01" ), JSON_UNESCAPED_UNICODE);
}

//fejléc beállítása json-ben
header("content-type: text/json");
//kiírás
echo $json;
?>