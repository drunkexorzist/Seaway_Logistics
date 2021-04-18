<?php

    session_start();

    $value_1 = $_POST['city_gruz_1'];
    $value_2 = $_POST['city_gruz_2'];
    $value_3= $_POST['V_gruz'];
    $value_4 = $_POST['M_gruz'];

    if ($value_1!=null && $value_2!=null && $value_3!=null && $value_4!=null) {
        
        $_SESSION['value_1'] = $value_1;
        $_SESSION['value_2'] = $value_2;
        $_SESSION['value_3'] = $value_3;
        $_SESSION['value_4'] = $value_4;

        header("Location: ../order.php");
    }
    else{
        $_SESSION['message'] = 'Неправильно внесенные данные';
		header('Location: ../index.php');
    }


?>