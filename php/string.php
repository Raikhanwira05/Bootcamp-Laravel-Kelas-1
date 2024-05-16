<!DOCTYPE html>
<html lang="en">

<head>
    <?php $tittle = "Halaman String"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $tittle; ?></title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php
    echo "<h3> Soal No 1</h3>";

    $first_sentence = "Hello PHP!";

    echo "Kalimat soal 1 :  $first_sentence <br>";
    echo "Panjang String :" . strlen($first_sentence) . "<br>";
    echo "Jumlah Kata :" . str_word_count($first_sentence) . "<br>";// Panjang string 10, jumlah kata: 2
    
    $second_sentence = "I'm ready for the challenges";

    echo "Kalimat soal 1 :  $second_sentence <br>";
    echo "Panjang String :" . strlen($second_sentence) . "<br>";
    echo "Jumlah Kata :" . str_word_count($second_sentence) . "<br>";// Panjang string: 28,  jumlah kata: 5
    
    echo "<h3> Soal No 2</h3>";
    /* 
        SOAL NO 2
        Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
    */
    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>";
    echo "Kata kedua: " . substr($string2, 2, 5) . "<br>";
    echo "<br> Kata Ketiga:" . substr($string2, 7) . "<br>";

    echo "<h3> Soal No 3 </h3>";
    /*
        SOAL NO 3
        Mengubah karakter atau kata yang ada di dalam sebuah string.
    */
    $string3 = "PHP is old but sexy!";
    echo "String: \"$string3\"<br> ";
    echo "Soal No 3 ganti string : " . str_replace("sexy", "awesome", $string3);
    // OUTPUT : "PHP is old but awesome"
    ?>
</body>

</html>