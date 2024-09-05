<!DOCTYPE html>
<html>
    <head>
        <title>
            Volume tabung
        </title>
    </head>

    <body>
        <form method="POST"> 
            <h1>Soal 1</h1>
            <div class="jari">
                <label>Hitung jari jari</label>
                <input type="number" name="jari">
            </div>
            <div class="tinggi">
                <label>Hitung tinggi</label>
                <input type="number" name="tinggi">
            </div>
            <div style="margin-bottom: 1rem;">
                <label>Pi = </label> <br>
                <input type="radio" name="Pi" value="3.14"> 3.14 <br>
                <input type="radio" name="Pi" value="22/7"> 22/7 <br>

            </div>
            <div>
                <button>hitung Volume</button>
                <button type="reset">reset</button>
            </div>

            <?php
            $jari = @$_POST['jari'];
            $tinggi = @$_POST['tinggi'];
            $pi = @$_POST ['Pi'];
            if ($pi == "3.14") {
                $hasil = 3.14 * $jari * $jari * $tinggi;
                echo "hasil volume dari jari jari ($jari) dan tinggi ($tinggi) adalah = ($hasil)";
            }
            if ($pi == "22/7") {
                $hasil = 22 * $jari / 7 * $jari * $tinggi;
                echo "hasil volume dari jari jari ($jari) dan tinggi ($tinggi) adalah = ($hasil)";
            }

            ?>
        </form>

        
    </body>
</html>