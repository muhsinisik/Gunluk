<?php
require_once("baglanti.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarih = $_POST["tarih"];
    $gunluk_metin= $_POST["gunluk_metin"];
    
  $sql = "INSERT INTO gunlukler (tarih, gunluk_metin) VALUES ('$tarih', '$gunluk_metin')";

    if ($bağlanti->query($sql) === TRUE) {
        echo "Günlük başariyla kaydedildi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$bağlanti->close();
?>
