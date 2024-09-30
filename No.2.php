<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function hitungKompensasiLembur($jamKerja, $jamKerjaNormal = 8, $kompensasi = 0) {
    
        $jamLembur = $jamKerja - $jamKerjaNormal;

            if ($jamLembur > 0) {
                $kompensasi += 50000; 
            } if ($jamLembur > 1) {
                $kompensasi +=($jamLembur - 1) * 25000;
            }
    
        return [$kompensasi, $jamLembur];
    }
    
    $jamKerja = 8;
    list($kompensasiLembur, $jamLembur) = hitungKompensasiLembur($jamKerja);
    
    echo "Lama Kerja: " . $jamKerja . " Jam<br>";
    echo "Jam Lembur: " . $jamLembur . " Jam<br>";
    echo "Kompensasi Lembur: Rp " . number_format($kompensasiLembur, 0, ',', '.');
    
    ?>
</body>
</html>     