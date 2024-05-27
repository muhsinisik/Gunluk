<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gunluk";

// Veritabanına bağlanma
$bağlanti = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($bağlanti->connect_error) {
    die("Veritabanina bağlanilamadi: " . $conn->connect_error);
}
?>
