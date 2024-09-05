<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Hitung Umur Anda</h1>
    <form method="post">
        <input type="date" name="tanggal_lahir">
        <button type="submit">Hitung Umur</button>
    </form>
    <?php
    $tanggal_lahir = new DateTime(@$_POST['tanggal_lahir']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $thn = "0";
    }
    $thn = $sekarang->diff($tanggal_lahir)->y;
    echo "Umur anda adalah : $thn";
    ?>
</body>
</html>