<!DOCTYPE html>

<html>

<head>
   <title>Perulangan</title>
</head>
<body style="margin-top:70px; margin-lefT:100px">
      <h3>Soal No 2 - Perulangan</h3>
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
                    <option value="Kebalikan Point Satu">3. Kebalikan Point Satu</option>
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
	    while ($i <= $angka ) {
            $j = 1;
            while ($j <= $i) {
                $j++;
                echo $j-1;
            }
            $i++;
            echo "<br>";
        }
    } elseif($pilih== "Piramida Terbalik"){
        echo "<h3>Piramida Terbalik</h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";
        
        $a = $angka;
        while ($a >= 1) {
            $b = $a;
	        while($b < $angka){
                $b++;
		        echo "&nbsp";
	        }
            $c = 1;
	        while($c <= $a){
                $c++;
		        echo $c-1;
	        }
            $a--;
	        echo '<br>';
        }
    }
    elseif ($pilih == "Kebalikan Point Satu"){
        echo "<h3>Kebalikan Point Satu</h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";

        $a = 1;
        while ( $a <= $angka){
            $b = 1;
	        while ($b <= $a){
		        echo $angka-$b+1;
                $b++;
	        } 
            $a++;
	    echo "<br>";
	    }
    }
}

?>