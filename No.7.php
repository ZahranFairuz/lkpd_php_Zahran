<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function membandingkanNama ($namaPertama, $namaKedua){
        $jumlahKarakter1 = strlen ($namaPertama);
        $jumlahKarakter2 = strlen ($namaKedua);

        echo "Nama Pertama: $namaPertama <br>";
        echo "Nama Kedua: $namaKedua <br>";
        
        if ($jumlahKarakter1 > $jumlahKarakter2) {
            $selisih = $jumlahKarakter1 - $jumlahKarakter2;
            echo "$namaPertama Memiliki jumlah karakter lebih banyak dari $namaKedua : Selisih $selisih karakter";
        } elseif ($jumlahKarakter2 > $jumlahKarakter1) {
            $selisih = $jumlahKarakter2 - $jumlahKarakter1;
            echo "$namaKedua Memiliki jumlah karakter lebih banyak dari $namaPertama : Selisih $selisih";
        } else {
            echo "Kedua nama memiliki jumlah karakter yang sama.";
        }
    }
    $namaPertama = "Fema Flamelina Putri";
    $namaKedua = "Artasya Legina";

    membandingkanNama($namaPertama, $namaKedua)
    ?>
</body>
</html>