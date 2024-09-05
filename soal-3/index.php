<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3</h1>
    <form method="POST">
        <h2>Kalkulator</h2>
    <div>
        <label></label>
        <input type="number" name="bilangan_pertama"><br>
        <input type="radio" name="kalkul" value="tambah"> + <br>
        <input type="radio" name="kalkul" value="kurang"> - <br>
        <input type="radio" name="kalkul" value="kali"> * <br>
        <input type="radio" name="kalkul" value="bagi"> / <br>
        <input type="number" name="bilangan_kedua"><br>
        <button> submit </button>
        


    </div>
    </form>

    <?php
    $pertama = @$_POST ['bilangan_pertama'];
    $kedua = @$_POST ['bilangan_kedua'];
    $kalkulator = @$_POST ['kalkul'];

    if ($kalkulator == "tambah") {
        $hasil = $pertama + $kedua ;
        echo $hasil;
    }
    if ($kalkulator == "kurang") {
        $hasil = $pertama - $kedua ;
        echo $hasil;
    }
    if ($kalkulator == "kali") {
        $hasil = $pertama * $kedua ;
        echo $hasil;
    }
    if ($kalkulator == "bagi") {
        $hasil = $pertama / $kedua ;
        echo $hasil;
    }
        
    ?>
</body>
</html>