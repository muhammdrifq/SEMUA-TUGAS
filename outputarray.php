<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Array</title>
</head>
<body>
<h3>Menampilkan Daftar Nama Mahasiswa</h3>
<ol><?php
$array_mahasiswa = $_POST['mahasiswa'];
for ($i=1; $i <=2 ; $i++) {
echo "<li>".$array_mahasiswa[$i]."</li>";}
?></ol>
</body>
</html>