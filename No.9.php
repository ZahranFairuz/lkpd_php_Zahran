<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function menghitungPecahan($jumlahUang) {
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    $hasil = [];

    foreach ($pecahan as $nilai) {
        $jumlahLembar = intdiv($jumlahUang, $nilai);
        
        if ($jumlahLembar > 0) {
            $hasil[$nilai] = $jumlahLembar;
            $jumlahUang -= $jumlahLembar * $nilai;
        }
    }

    return $hasil;
}

$jumlahUang = 140500;
$pecahanUang = menghitungPecahan($jumlahUang);

echo "Jumlah uang: Rp " . number_format($jumlahUang, 0, ',', '.') . "<br>";
echo "Pecahan uang dan jumlah lembar:<br>";
//forench menampilkan
foreach ($pecahanUang as $pecahan => $jumlahLembar) {
    echo "Rp " . number_format($pecahan, 0, ',', '.') . "  " . $jumlahLembar . " lembar<br> ";
}
?>

</body>
</html>