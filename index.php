<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>ID keresés AJAX-szal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>ID keresés aszinkron módon</h2>
    <form>
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <label for="name">Név:</label>
        <input type="text" id="name" name="name" readonly>
        <label for="birthday">Születési dátum:</label>
        <input type="text" id="birthday" name="birthday" readonly>
    </form>
    <script src="ajax.js"></script>
</body>
</html>
