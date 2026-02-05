<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>latihan array</title>
</head>

<body>

    <?php
    $myarray = [];
    $myarray[] = "Universitas ";
    $myarray[2] = "Teknologi ";
    $myarray[4] = "Digital ";
    $myarray[] = "Indonesia ";

    // menggunakan foreach agar indeks yang kosong tidak error
    foreach ($myarray as $i => $val) {
        echo "array ke $i: $val<br>";
    }
    ?>

</body>

</html>