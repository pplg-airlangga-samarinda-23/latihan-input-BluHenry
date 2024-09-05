<!DOCTYPE html>
<html>
    <head>
        <title>
            jarak
        </title>
    </head>

    <body>
        <form method="POST">
            <h1> Soal 2 </h1>
            <div class="jarak">
                <label>jarak</label>
                <input type="number" name="jarak">
            </div>
            <div class="hitung_konversi">
                <label>hitung konversi</label> 
                <select name="km">
                    <option value="Km_m"> km = m </option>
                    <option value="Km_cm"> km = cm</option>
                    <option value="Km_mm"> km = mm</option>
                </select>
            </div>
            <div>
                <button>hitung jarak</button>
            </div>
            <?php
            $jarak = @$_POST['jarak'];
            $km = @$_POST['km'];
            // $jarak = $km;
            $meter = 1000;
            $centimeter = 100000;
            $milimeter = 1000000;


            if ($km == "Km_m"){
                $hasil = $jarak * $meter;
                echo "hasil dari konversi km > m : ($hasil) <br>";
            }
            if ($km == "Km_cm"){
                $hasil = $jarak * $centimeter;
                echo "hasil dari konversi km > cm : ($hasil) <br>";
            }
            if ($km == "Km_mm"){
                $hasil = $jarak * $milimeter;
                echo "hasil dari konversi km > mm : ($hasil) <br>";
            }
            ?>
        </form>

        
    </body>
</html>