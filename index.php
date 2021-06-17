<?php 

require_once __DIR__ ."/Film.php";

$film1 = new Film("Star Wars The Phantom Menace","fantastico",180);
$film2 = new Film('Joker','drammatico',200);

$film1->setPrezzo(10);
$film2->setPrezzo(8.5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> 
    TITOLO : <?php echo $film1->titolo ?> <br>
    GENERE : <?php echo $film1->genere ?> <br>
    DURATA : <?php echo $film1->durata ?> <br>
    PREZZO : <?php echo $film1->getPrezzo() ?>
    </h3>

    <h3> 
    TITOLO : <?php echo $film2->titolo ?> <br>
    GENERE : <?php echo $film2->genere ?> <br>
    DURATA : <?php echo $film2->durata ?> <br>
    PREZZO : <?php echo $film1->getPrezzo() ?>
    </h3>

    <h3>
    Ho creato : <?php echo Film::getContatore() ?> istanze
    </h3>

</body>

</html>