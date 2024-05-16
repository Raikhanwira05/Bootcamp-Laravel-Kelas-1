<!DOCTYPE html>
<html lang="en">

<head>
    <?php $tittle = "Halaman Looping"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $tittle; ?></title>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";

    echo "<h6>LOOPING PERTAMA</h6>";
    $a = 2;
    do {
        echo "$a - I Love PHP <br>";
        $a += 2;
    } while ($a <= 20);

    echo "<h6>LOOPING KEDUA</h6>";
    for ($i = 20; $i >= 2; $i -= 2) {
        echo "$i - I Love PHP <br>";
    }
    ;

    echo "<h3>Soal No 2 Looping Array Modulo </h3>";
    /* 
        Soal No 2
        Looping Array Module
        Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
        Tampung ke dalam array baru bernama $rest 
    */

    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);
    // Lakukan Looping di sini
    foreach ($numbers as $nilai) {
        $rest[] = $nilai % 5;
    }

    echo "<br>";
    echo "Array sisa baginya adalah:  ";
    print_r($rest);
    echo "<br>";

    echo "<h3> Soal No 3 Looping Asociative Array </h3>";

    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    foreach ($items as $arrayIn) {
        $tampung = [
            "id" => $arrayIn[0],
            "name" => $arrayIn[1],
            "price" => $arrayIn[2],
            "description" => $arrayIn[3],
            "source" => $arrayIn[4]
        ];
        print_r($tampung);
        echo "<br>";
    }

    echo "<h3>Soal No 4 Asterix </h3>";

    echo "Asterix: ";
    echo "<br>";
    for ($j = 1; $j <= 5; $j++) {
        for ($k = 1; $k <= $j; $k++) {
            echo " * ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>