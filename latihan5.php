<!DOCTYPE html>
<html>

<body>
    <?php
    // Menciptakan array multidimensional
    $myArray = array(
        // Default key untuk setiap elemen
// dimulai dari 0 (nol)
        array("Susi", "Budi", "Agus"),
        array("Sigit", "Tika", "Lina")
    );
    // Tampilkan informasi array
    print_r($myArray);
    echo "<hr>";
    // Tampilkan elemen array
    echo $myArray[0][0] . "<br>";
    echo $myArray[0][1] . "<br>";
    ?>
</body>

</html>