<?php
    require_once __DIR__ . "/classes/products.php";
    require_once __DIR__ . "/classes/perishables.php";
    require_once __DIR__ . "/classes/seasonal.php";
    require_once __DIR__ . "/classes/foods.php";

    require_once __DIR__ . "/classes/users.php";
    require_once __DIR__ . "/classes/carts.php";

    // var_dump(new User("John", "Doe", "JohnDoe@gmail.it",3403405665),new Address("Via Roma", 83036, "Roma"), new DebitCard(123456789, "John Doe","2024/02/02"));
    $user=new User("John", "Doe", "JohnDoe@gmail.it",3403405665,"Via Roma", "Roma", 83036,123456789,"John Doe", "2024/02/02");
    $user_two=new User("Jane", "Doe", "JaneDoe@gmail.it",3403405665,"Via Roma", "Roma", 83036,123456789,"Jane Doe", "2022/02/02");
    $user_two->setRegistered(true);

    $food=new Food("Scatoletta Carne", "Descrizione della scatoletta e dei bocconcini di carne", 3.59, "Dog","2020/02/02");
    $food_two=new Food("Scatoletta Carne", "Descrizione della scatoletta e dei bocconcini di carne", 3.59, "Dog","2023/02/02");
    $antiFlea=new Seasonal("Collare Antipulci", "Tiene lontano pulci e zecche e aiuta la prevenzione dalla lesmaniosi...", 7.30, "Dog", "2022/03/03", "2022/06/06");
    $toy=new Product("Fune da tiro", "Giocattolo per cani ...", 4.55, "Dog");
    $pillow=new Product("Cuscino affila Unghie", "Cuscino per Gatti ...", 3.99, "Cat");

    $cart=new Cart([$food, $food_two,$antiFlea], $user);
    var_dump($cart);
    $cart_two= new Cart([$pillow, $pillow, $antiFlea, $food], $user_two);
    var_dump($cart_two);
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