<?php
    require_once __DIR__ . "/classes/products.php";
    require_once __DIR__ . "/classes/perishables.php";
    require_once __DIR__ . "/classes/seasonal.php";
    require_once __DIR__ . "/classes/foods.php";

    require_once __DIR__ . "/classes/users.php";

    // var_dump(new User("John", "Doe", "JohnDoe@gmail.it",3403405665),new Address("Via Roma", 83036, "Roma"), new DebitCard(123456789, "John Doe","2024/02/02"));
    $user=(new User("John", "Doe", "JohnDoe@gmail.it",3403405665,"Via Roma", "Roma", 83036,123456789,"John Doe", "2024/02/02"));
    var_dump($user);
    $food=(new Food("Scatoletta Carne", "Descrizione della scatoletta e dei bocconcini di carne", 3.59, "Dog","2020/02/02"));
    var_dump($food);
    $antiFlea=(new Seasonal("Collare Antipulci", "tiene lontano pucci e zecche e aiuta la prevenzione dalla lesmaniosi...", 7.30, "Dog", "2022/03/03", "2022/06/06"));
    var_dump($antiFlea);
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
    
</body>
</html>