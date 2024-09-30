<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
 body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
}

h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

p {
    font-size: 18px;
    line-height: 1.6;
}

hr {
    border: 0;
    height: 1px;
    background: #ddd;
    margin: 20px 0;
}

.result {
    font-weight: bold;
    color: #0066cc;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Pengecekan Angka pada Teks</h1>
        <?php
        function cekAngka($teks) {
            preg_match_all('/\d/', $teks, $simpanAngka);

            if (count($simpanAngka[0]) > 0) {
                $angka = implode(",", $simpanAngka[0]);
                echo "<p class='result'>Teks Mengandung Angka: " . $angka . "</p>";
            } else {
                echo "<p class='result'>Teks tidak mengandung angka</p>";
            }
        }

        $teks1 = "Selamat Ulang Tahun Yang KE-178";
        $teks2 = "Selamat Ulang Tahun Ya";

        cekAngka($teks1);
        echo "<hr>";
        cekAngka($teks2);
        ?>
    </div>
</body>
</html>
