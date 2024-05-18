<!DOCTYPE html>
<html lang="en">

<head>
    <?php $tittle = "Halaman OOP"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $tittle; ?></title>
</head>

<body>
    <?php
    require_once 'animal.php';
    require_once 'Ape.php';
    require_once 'Frog.php';

    $sheep = new Animal("shaun");
    echo "Name : " . $sheep->name . "<br>"; // Output: shaun
    echo "Legs : " . $sheep->legs . "<br>"; // Output: 4
    echo "Coold Blooded : " . $sheep->cold_blooded . "<br> <br>"; // Output: no
    
    $kodok = new Frog("buduk");

    echo "Name : " . $kodok->name . "<br>"; // Output: buduk
    echo "Legs : " . $kodok->legs . "<br>"; // Output: 4
    echo "Cold Blooded : " . $kodok->cold_blooded . "<br>"; // Output: no
    echo "Jump : " . $kodok->jump . "<br> <br>"; // Output: hop hop
    
    $sungokong = new Ape("kera sakti");

    echo "Name : " . $sungokong->name . "<br>"; // Output: kera sakti
    echo "Legs : " . $sungokong->legs . "<br>"; // Output: 2
    echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>"; // Output: no
    echo "Yell : " . $sungokong->Yell . "<br>"; // Output: Auooo
    ?>
</body>


</html>