<?php

// Adattömb

$tomb = [
["id" => 1, "name" => "Kiss Pista", "birthday" => "1961.01.01"],
["id" => 2, "name" => "Nagy Máté", "birthday" => "1999.12.31"],
["id" => 3, "name" => "Varga Elenonóra", "birthday" => "2010.01.01"],
["id" => 4, "name" => "Béby Blanka", "birthday" => "2018.03.01"],
];

// Eredmény HTML előkészítése: ebben lesz a kiírandó eredmény
// alapból üres, ezt írja ki, ha nincs elküldve $_GET-be.

$eredmeny_html = "";
if (isset($_GET["id"])) {
$id = (int)$_GET["id"];

// Lineáris keresés
$i = 0;
while ($i < count($tomb) && $tomb[$i]["id"] != $id) {
$i++;
}
$talalat = ($i < count($tomb)) ? $tomb[$i] : [
"id" => -1, "name" => "Nem létező név", "birthday" => "1900.01.01"
];
$eredmeny_html = "<h3>Eredmény JSON formátumban:</h3><pre>" .
json_encode($talalat, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) .
"</pre>";
// 10 mp múlva átirányít az alap URL-re (id nélkül)
header("Refresh: 10; url=index.php");
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<title>Keresés ID alapján</title>
</head>
<body>
<!-- Eredmény kiírása az űrlap ELŐTT -->
<?php if (!empty($eredmeny_html)) echo $eredmeny_html; ?>
<h2>Személy keresése ID alapján</h2>
<!-- űrlap -->
<form method="get" action="">
<label for="id">Add meg az ID-t:</label>
<!-- állapottartás végett meghagyjuk a beírt értéket -->
<input type="number" name="id" id="id" required value="<?php echo
isset($id) ? htmlspecialchars($id) : ''; ?>">
<!-- itt a submittolás, ha megnyomod küldi ki url-be a beírt érték -->
<input type="submit" value="Keresés">
</form>
</body>
</html>