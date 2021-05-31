<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <section class="main">
        <header>
            <div class="header">
                <div class="logo">
                    <img src="img/logo1.png" alt="logo" width="730" height="100">
                </div>
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Главная страница</a></li>
                        <li class="nav-item"><a class="nav-link" href="auto.html">Авторизация</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <section class="reg">
        <form action="php/reg_insrt.php" method="POST">
            <div class="reg-forms">
                    <h1>Регистрация</h1>
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="FIO" placeholder="ФИО">
                    <input type="text" name="number" placeholder="Телефон">
                    <input type="password" name="password" placeholder="Пароль">
                    <button type="submit">Авторизоваться</button>
                    <?php
                        if ($_SESSION['msg']){
                            echo '<span class="reg-forms-msg">';
                        }
                        unset($_SESSION['msg']);
                    ?>
            </div>
        </form>
    </section>
    <section class="futter">
        <div class="futter-items">
            <div class="futter-items-logo">
                <img src="img/logo_blue.png" alt="logo">
                <span class="futter-items-logo-text">© 2021 ООО “Seaway Logistics”</span>
            </div>
            <div class="futter-items-navbar">
                <nav>
                    <ul>
                        <li class="futter-items-navbar-list"><a class="futter-items-navbar-link" href="#calc">Расчет ставки</a></li>
                        <li class="futter-items-navbar-list"><a class="futter-items-navbar-link" href="#services">Услуги</a></li>
                        <li class="futter-items-navbar-list"><a class="futter-items-navbar-link" href="#about">О компании</a></li>
                        <li class="futter-items-navbar-list"><a class="futter-items-navbar-link" href="#contac">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="futter-items-contact">
                <span class="futter-items-contact-tel">+7(423)276-00-61</span>
                <span class="futter-items-contact-email">info@sw-log.com</span>
                <span class="futter-items-contact-addres">690065, Россия, Владивосток Стрельникова 9, оф. 213</span>
            </div>
        </div>
    </section>
</body>
</html>