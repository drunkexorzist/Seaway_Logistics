<?php

    $connect = mysqli_connect('127.0.0.1','root','root','sw_calc','3306');

    if (!$connect) {
        die ("Нет подключения");
    }
?>