<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menampilkan Hasil Perkalian 5</h1>
    <br>
    <hr>
    <?php
    for ($i = 1; $i < 12; $i++){
        if ($i % 2 !=0){
            $angka = $i*5;
            echo $i . "x 5 = " .$angka; 
            echo "<br>";
        }
    }
?>
</body>
</html>