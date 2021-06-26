<?php
    session_start();
    require_once "connect.php";

    $city_name = $_POST['city_2'];
    $delivery_type = $_POST['del_type'];
    $user_id = $_POST['user_id'];

    $city_name_db = mysqli_query($connect, "SELECT * FROM `city` WHERE `city_name` = '$city_name'");
    $delivery_type_db = mysqli_query($connect, "SELECT * FROM `delivery_type` WHERE `del_name` = '$delivery_type'");
    $delivery_prise_db = mysqli_query($connect, "SELECT * FROM `del_prise` WHERE `id` = '$user_id'");
    $user_id_db = mysqli_query($connect, "SELECT * FROM `registr` WHERE `id` = 'user_id'");
    $del_time_db = mysqli_query($connect, "SELECT * FROM `order` WHERE `del_time` = 'del_time_id'");

    if ($city_name != null & $delivery_type != null ) {
        
        mysqli_query($connect, "INSERT INTO `gruz_info` (`user_id`,`del_type`,`del_prise`,`del_city`,`del_time`) VALUES ('$user_id','$delivery_type_db','$delivery_prise_db','$city_name_db','$del_time_db')");

    }

?>