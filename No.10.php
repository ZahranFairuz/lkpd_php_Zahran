<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $list = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    
    $anakAnak = 0;
    $dewasa = 0;
    
    foreach ($list as $usia) {
        if ($usia < 17) {
            $anakAnak++;
        } else {
            $dewasa++;
        }
    }
    echo "List Usia: " . implode(", ",$list) ."<br>";
    echo "Jumlah Kategori Dewasa: " . $dewasa . "<br>";
    echo "Jumlah Kategori Anak-anak: " . $anakAnak . "<br>";
    ?>
</body>
</html>