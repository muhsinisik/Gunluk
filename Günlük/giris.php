<html>

<form action="giris.php" method="POST"  >
Adi Soyadi: <input  type="text" name="kullanici_adi"> <br>
 Sifre : <input type="password" name="sifre"><br>
 <input type="submit" value="Giriş ">

</form>

</html>

<?php
 if (isset($_POST['kullanici_adi']) && isset($_POST['sifre'])) {
    $kullaniciAdi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];


    if ($kullaniciAdi == "muhsin" && $sifre == "7989") {
  
        echo "Hoş geldiniz "  .header("Location: index.php");  
    }
    else {
        echo "Yanlis Giris";
    }
 }


?>
