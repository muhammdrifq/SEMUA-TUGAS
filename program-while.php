<!DOCTYPE html>



<html>

<head>
   <title>While</title>
</head>
<body style="margin-top:70px; margin-lefT:100px">
      <h3>Soal 1 - Perulangan While</h3>
      <form action="" method="POST">
      <table cellpadding="3">
         <tr>
            <td>Pilih Program</td>
            <td>:&nbsp;
                <Select name="pilih">
                    <option value="">-- Pilih --</option>
                    <option value="Bilangan Ganjil dan Genap">1. Bilangan Ganjil dan Genap</option>
                    <option value="Menentukan Bilangan Ganjil Genap">2. Menentukan Bilangan Ganjil Genap</option>
                    <option value="Segitiga Sama Kaki">3. Segitiga Sama Kaki</option>
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
    
    if ($pilih == "Bilangan Ganjil dan Genap"){
        
        echo "<h3>Bilangan Ganjil dan Genap</h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";
        echo "Bilangan Ganjil dan Genap dari Angka 1 - $angka Adalah :";
        echo "<br><br>";
        echo "- Bilangan Ganjil : ";
        $a = 1;                       
	    while ($a <= $angka) :
	        echo "$a ";
	        $a = $a + 2;
        endwhile;
        echo "<br><br>";
        echo "- Bilangan Genap : ";
        $a = 2;                       
	    while ($a <= $angka) :
	        echo "$a ";
	        $a = $a + 2;
        endwhile;
    } 
    elseif($pilih== "Menentukan Bilangan Ganjil Genap"){
        
        echo "<h3>Menentukan Bilangan Ganjil Genap</h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";
        $bil=1;
        while ($bil <= $angka) :
            if ( ($bil % 2) == 0){
                echo "Angka $bil Adalah Bilangan Genap<br>";
            } else {
		        echo "Angka $bil Adalah Bilangan Ganjil<br>";
	        }
	    $bil++;
        endwhile;
    }    
    elseif ($pilih == "Segitiga Sama Kaki"){
        
        echo "<h3>Segitiga Sama Kaki</h3>";
        echo "Angka Yang Dimasukkan = $angka";
        echo "<br><br>";

        $a = $angka;
        while ($a > 0){
            $i=1;
            while ($i <= $a){
                $i++;
                echo "&nbsp";
            }
            $a1=$angka;
            while ($a1>=$a){
                $a1--;
                echo"*";
            }
            $a--;
            echo"<br>";
        }

        
    }
}

?>