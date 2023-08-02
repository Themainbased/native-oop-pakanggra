<?php
require "../Class/class.perhitungan.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas</title>
</head>
<body>
    <form method="post">
        <label for="sisi">Sisi Persegi</label>
        <input type="number" name="sisi" id="sisi" required>

        <label for="panjang">Persegi panjang </label>
        <input type="number" name="panjang" id="panjang" required>
        
        <label for="lebar">Lebar Persegi Panjang </label>
        <input type="number" name="lebar" id="lebar" required>

        <label for="alas">Alas Segitiga</label>
        <input type="number" name="alas" id="alas" required>

        <label for="tinggi">Tinggi Segitiga</label>
        <input type="number" name="tinggi" id="tinggi" required>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
        if (isset($_POST['calculate'])) {
            $aritmatika= new aritmatika ();
            
            $sisi = $_POST['sisi'];
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            $persegi= $aritmatika->persegi($sisi);
            $persegipanjang = $aritmatika->persegipanjang($panjang, $lebar);
            $luasegitiga = $aritmatika->luas_segitiga($alas,$tinggi);

            echo $persegi;
            echo $persegipanjang;
            echo $luasegitiga;
        }

    ?>
</body>
</html>