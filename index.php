<?php 

require_once __DIR__ ."/Film.php";

$film1 = new Film("Star Wars The Phantom Menace","fantastico",180);

$film2 = new Film('Joker'.'drammatico',1000);

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
    TITOLO : <?php echo $film1->titolo ?>
    GENERE : <?php echo $film1->genere ?> 
    DURATA : <?php echo $film1->durata ?>
    </h3>
</body>

</html>