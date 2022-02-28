<?php
    require_once __DIR__ . "/classes/products.php";
    require_once __DIR__ . "/classes/perishables.php";
    require_once __DIR__ . "/classes/seasonal.php";
    require_once __DIR__ . "/classes/foods.php";

    require_once __DIR__ . "/classes/users.php";
    require_once __DIR__ . "/classes/debitCards.php";

    var_dump(new User());
    var_dump(new DebitCard(123456789,"John Doe", "2024/02/02"));

    var_dump(new Product());
    var_dump(new Perishable());
    var_dump(new Seasonal());
    var_dump(new Food());
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