<!DOCTYPE html>
<html>
<head>
    <title>Günlük Kaydi</title>
</head>
<body>

<h2>Günlük Kaydi</h2>

<form action="kaydet.php" method="post">
    <label for="gun">Tarih:</label>
    <input type="date" id="gun" name="tarih"><br><br>
    <label for="not">Günlük:</label><br>
    <textarea id="not" name="gunluk_metin" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Kaydet">
</form>

</body>
</html>
