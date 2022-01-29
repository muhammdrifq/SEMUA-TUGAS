<!DOCTYPE html>

<html>

<head>
   <title>Do While</title>
</head>
<body style="margin-top:70px; margin-lefT:100px">
      <h3>Soal 1 - Perulangan - Do While</h3>
      <form action="" method="POST">
      </style>
      <table cellpadding="3">
         <tr>
            <td>Pilih Program</td>
            <td>:&nbsp;
                <Select name="pilih">
                    <option value="">-- Pilih --</option>
                    <option value="Segitiga Siku-siku">1. Segitiga Siku-siku</option>
                    <option value="Piramida Terbalik">2. Piramida Terbalik</option>
                    <option value="Bintang Segitiga Siku-siku ">3. Bintang Segitiga Siku-siku </option>
                </Select>
            </td>
         </tr>
         <tr>
            <td>Masukkan Angka</td>
            <td>: &nbsp;<input type="number" name="angka"></td>
         </tr>
         <tr>
            <td></td>
            <td>&nbsp; &nbsp;<input type="submit" name="proses" value="Proses" style="margin-bottom:10px"></td>
         </tr>
      </table>
      </form>
</body>
</html>


<?php

if (isset($_POST['proses'])) {
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];
    
    if ($pilih == "Segitiga Siku-siku"){
        
        echo "<h3>Segitiga Siku-siku</h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";
        
        $i = 1;
	    do {
            $a = 1;
            do {
                echo $a;
                $a++;
            }
            while ($a <= $i) ;
                echo "<br>";
                $i++;
        } while ($i <= $angka);
    } 
    elseif($pilih== "Piramida Terbalik"){
        echo "<h3>Piramida Terbalik</h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";
        
        $i = 1;
	    do {
            $s = 1;
            do {
                echo "&nbsp";
                $s++;
            } while ($s <= $i) ;
                $a=$angka;
                do {
                    echo $angka-$a+1;
                    $a--;
                } while ($a >= $i);
                echo "<br>";
                $i++;
        } while ($i <= $angka);
    }
    elseif ($pilih == "Bintang Segitiga Siku-siku "){
        echo "<h3>Bintang Segitiga Siku-siku </h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";

        $i = 1;
	    do {
            $a = 1;
            do {
                echo "*";
                $a++;
            } while ($a <= $i) ;
                echo "<br>";
                $i++;
        } while ($i <= $angka);
    }
}

?>