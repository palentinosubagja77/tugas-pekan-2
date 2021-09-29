<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <h2>Berlatih Looping</h2>
    <?php
    echo "<h3>Looping I Love PHP </h3>";
    echo "<h4>LOOPING PERTAMA</h4>";
    for ($i = 1; $i <= 21; $i += 2) {
        echo $i . " - I Love PHP <br>";
    }
    echo "<h4>LOOPING KEDUA</h4>";
    for ($a = 21; $a >= 1; $a -= 2) {
        echo $a . " - I Love PHP <br>";
    }
    echo "<h3>Looping Array Modulo </h3>";
    $nomor = [18, 45, 29, 61, 47, 34];
    echo "array : ";
    print_r($nomor);
    echo "<br>";
    foreach ($nomor as $nom) {
        $rest[] = $nom + 5;
    }
    print_r($rest);

    echo "<h3>Looping Asociative Array </h3>";
    $bio = [
        ["palentino", 25, "Bandung"],
        ["subagja", 50, "Bandung"],
    ];
    foreach ($bio as $key => $val) {
        $bio = array(
            'nama' => $val[0],
            'umur' => $val[1],
            'kota' => $val[2],
        );
        print_r($bio);
        echo "<br>";
    }
    echo "<h3>Arsitex:</h3>";
    $s =5;
        for($a = $s; $a>0; $a--) {
            for($b = $s; $b>=$a; $b--) {
                echo"*";
            }
            echo "<br>";
        }

    ?>
</body>
</html>