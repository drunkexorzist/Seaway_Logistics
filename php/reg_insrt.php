<?php

    session_start();
    require_once "connect.php";

    $email = $_POST['email'];
    $FIO = $_POST['FIO'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    //сделать дохуя проверок на всякую хуйню!!!!!!!
    if ($email === null && $FIO === null && $number === null && $password === null) {
        $_SESSION['msg'] = "Не все поля были заполнены";
        header("Location: ../reg.php");
    }
    else{

        $password = md5($password);

        mysqli_query($connect,"INSERT INTO `registr` (`email`,`FIO`,`tel_number`,`pass`) VALUES ('$email','$FIO','$number','$password');");
    }
    

?>