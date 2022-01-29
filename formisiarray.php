<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Data Array</title>
</head>
<body>
<h3>Isi Data Array</h3>

<form action="outputarray.php" method="post"><ol>
<?php

for ($i = 1; $i <= 2 ; $i++) {
echo "<li> <input type='text' name='mahasiswa[$i]'>";}
?>
</ol><input type="submit" value=" Oke " /></form>
</body>
</html>