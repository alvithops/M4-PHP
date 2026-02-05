<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Latihan Array</title>
</head>

<body>

    <?php
    $myArray = [
        "Universitas",
        "Teknologi",
        "Digital",
        "Indonesia"
    ];

    foreach ($myArray as $i => $value) {
        echo "array ke $i: $value <br>";
    }
    ?>

</body>

</html>