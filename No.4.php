<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menampilkan Hasil Perkalian 1 dan 2. Dibuat terbalik</h1>
    <?php
    echo"Perkalian 1 <br>";
    for ($i = 10; $i > 0; $i--) {
        $hasil = $i * 1;
        echo "$i x 1 = {$hasil} <br>";
    
    if ($i >= 20) {
        break;
    } }
    
    echo "<hr>";
    echo"Perkalian 2 <br>";
    for ($z = 10; $z > 0; $z--) {
        $hasil = $z * 2;
        echo "$z x 2 = {$hasil} <br>";
    
    if ($z >= 20) {
        break;
    } }
    ?>
</body>
</html>