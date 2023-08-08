<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Membuat Kalkulator Sederhana Dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST['hitung'])) {
        $bil1 =$_POST['bil1'];
        $bil2 =$_POST['bil2'];
        $operasi =$_POST['operasi'];
        switch ($operasi) {
        case 'tambah':
        $hasil =$bil1+$bil2;
        break;
        case 'kurang':
        $hasil =$bil1-$bil2;
        break;
        case 'kali':
        $hasil =$bil1*$bil2;
        break;
        case 'bagi':
        $hasil =$bil1/$bil2;
        break;
        }
    }
?>
<div class="kalkulator">
    <h2 class="judul">KALKULATOR</h2>
    <a class="brand" href="http://smkn2mgl.sch.id/">
        http://smkn2mgl.sch.id/</a>
        <form method="post" action="index.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukan Bilangan Kedua">
            <select class ="opt" name="operasi">
                <option value='tambah'>+</option>
                <option value='kurang'>-</option>
                <option value='kali'>x</option>
                <option value='bagi'>/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])) { ?>
            <input type="submit" value="<?php echo $hasil; ?>" class="bil">
        <?php } else { ?>
            <input type="text" value="0" class="bil">
        <?php } ?>
        <button type="submit" onclick="location.href = ''" class="tombol">Clear</button>
        <h2 class="brand">XICRTH</h2>
        
</div>
</body>
</html>