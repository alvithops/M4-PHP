<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>data pemilik kendaraan</title>
</head>

<body>

    <?php
    $pemilik = [
        "AD 92343 ZA" => "umar",
        "AB 89332 NA" => "bakri",
        "B 347622 BU" => "tika",
        "D 88780 AS" => "tutik",
        "L 87332 KL" => "budi"
    ];

    $index = "D 88780 AS";

    if (isset($pemilik[$index])) {
        echo "pemilik kendaraan no.pol $index adalah {$pemilik[$index]}";
    } else {
        echo "data tidak ditemukan";
    }
    ?>

</body>

</html>