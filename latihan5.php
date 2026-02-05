<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>latihan array multidimensi</title>
</head>

<body>

    <?php
    // menciptakan array multidimensional [cite: 12]
    $myarray = [
        ["susi", "budi", "agus"],
        ["sigit", "tika", "lina"]
    ];

    // menampilkan semua elemen menggunakan nested foreach
    foreach ($myarray as $array1) {
        foreach ($array1 as $elemen) {
            echo $elemen . ", ";
        }
        echo "<br>";
    }

    echo "<hr>";

    // informasi tambahan berdasarkan materi dhcp [cite: 1, 9]
// pada jaringan nyata, client mendapatkan konfigurasi otomatis [cite: 10, 68]
    ?>

</body>

</html>