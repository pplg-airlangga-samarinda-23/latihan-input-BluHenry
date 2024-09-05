<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5</title>
</head>
<body>
    <h1>Soal 5</h1>
    <form method="POST">
        <label>Siapa Namamu ? </label> <br>
        <input type="text" name="nama" placeholder="masukkan nama">
        <div>
            <label> masukkan bilangan</label>
            <input type="number" name="input" placeholder="masukkan bilangan">
        </div>
        <div>
            <label> pilih tipe bilangan </label> <br>
            <select name="type">
                <option value="ganjil">Ganjil</option> <br>
                <option name="genap">Genap</option> <br>
            </select> <br>
        </div>
        <button type="submit">hitung bilangan</button>
    </form>

    <?php
       $number = @$_POST["input"];
       $type = @$_POST["type"];
       $nama = @$_POST['nama'];

       for ($i = 1; $i <= $number; $i++) {
        
           if ($type == "ganjil" && $i % 2 != 0) {
               echo "$i ($nama) <br>";
           } elseif ($type == "genap" && $i % 2 == 0) {
               echo "$i ($nama) <br>";
           }
        }
       
    ?>
</body>
</html>