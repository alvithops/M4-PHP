<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>latihan array</title>
</head>

<body>

    <?php
    $myarray = [];
    $myarray[] = "universitas ";
    $myarray[2] = "teknologi ";
    $myarray[4] = "digital ";
    $myarray[] = "indonesia ";

    // menggunakan foreach agar indeks yang kosong tidak error
    foreach ($myarray as $i => $val) {
        echo "array ke $i: $val<br>";
    }
    ?>

</body>

</html>