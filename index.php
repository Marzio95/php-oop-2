<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include __DIR__ . './classes/user.php';
    include __DIR__ . './classes/registeredUser.php';
    include __DIR__ . './classes/unregisteredUser.php';
    include __DIR__ . './classes/product.php';
    include __DIR__ . './classes/food.php';
    include __DIR__ . './classes/kennels.php';
    include __DIR__ . './classes/accessories.php';
    include __DIR__ . './classes/animalComb.php';
    include __DIR__ . './classes/pesticide.php';


    $Marzio = new RegisteredUser('Marzio', 'Della Rocca', 'mdr14@gmail.c', '07-12-1995', 'ABC12D56Z', '31-12-2022');
    $Marzio->setDeadlineCreditCard($Marzio->deadlineCreditCard);
    var_dump($Marzio);
    $Giagino = new UnregisteredUser('Giagino', 'Salvetti', 'giagia@gm.c', '10-1-1996', 'LFGHK456L', '31-12-2026');
    $Giagino->setDeadlineCreditCard($Giagino->deadlineCreditCard);
    var_dump($Giagino);
    $Frontline = new Pesticide(10, 'dog');
    $Frontline->setDuration(2);
    var_dump($Frontline);
    $Polpette = new Food(5, 'cat');
    $Polpette->setFoodExpiration('31-05-2022');
    var_dump($Polpette);







    ?>

</body>

</html>