<?php

    session_start();

    $value_1 = $_POST['city_1'];
    $value_2 = $_POST['city_2'];
    $value_3 = $_POST['cont_type'];

    if ($value_1!=null && $value_2!=null && $value_3!=null) {
        
        $_SESSION['value_1'] = $value_1;
        $_SESSION['value_2'] = $value_2;
        $_SESSION['value_3'] = $value_3;

        header("Location: ../order.php");
    }
    else{
        echo "не получилось";
    }

?>