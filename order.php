<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница заказа</title>
</head>
<body>
    <h1>Страница заказа</h1>
    <span>Город отправки:<?=$_SESSION['value_1']?></span>
    <br>
    <span>Город назначения:<?=$_SESSION['value_2']?></span>
    <br>
    <span><?=$_SESSION['value_3']?></span>
    <br>
    <span><?=$_SESSION['value_4']?></span>
    
</body>
</html>