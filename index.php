<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaway Logistics</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/forms.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="#calc">Расчет ставки</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Услуги</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">О компании</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contac">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
</section>
<section id="calc" class="calc">
    <div  class="nav-block">
        <div class="groupage_cargo">
            <ul class="item">
                <li class="item-block"><a class="item-link" data-path="cont" data-target1="одын" href="#">Контейнерная перевозка</a></li>
                <li class="item-block"><a class="item-link" data-path="count" data-target2="двыа" href="#">Сборный груз</a></li>
            </ul>
            <div class="forms">
                <div class="forms-conter">
                    <form action="php/form_1.php" method="POST">
                        <input type="text" name="city_1" placeholder="г.Владивосток">
                        <img class="forms-conter-arrow_right" src="img/icons/arrow_double.png">
                        <input type="text" name="city_2" placeholder="г.Москва">
                        <br>
                        <input type="text" name="cont_type" placeholder="Тип контейнера">
                        <br>
                        <button type="submit">Расчитать и заказать</button>
                    </form>
                </div>
                <div class="forms-conter-cruz">
                    <form action="php/form_2.php" method="POST">
                        <input type="text" name="city_gruz_1" placeholder="г.Владивосток">
                        <img class="forms-conter-cruz-arrow_right" src="img/icons/arrow_double.png">
                        <input type="text" name="city_gruz_2" placeholder="г.Москва">
                        <br>
                        <input type="text" name="V_gruz" placeholder="Объем, куб. м">
                        <input type="text" name="M_gruz" placeholder="Вес, кг">
                        <br>
                        <button type="submit">Расчитать и заказать</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="order">
            <span class="order-text">Управление заказом</span>
            <div class="order-form">
            <form action="#">
                <div class="order-serch">
                <input type="text" placeholder="Номер заказа">
                <div class="order-serch-forms">
                    <img class="order-serch-forms-icon" src="img/icons/search.png">
                </div>
                </div>
            <a class="order-link" href="#">Не знаете номер заказа?</a>
            </form>
        </div>
        </div>
    </div>
    <script src="script/script_calc.js"></script>
</section>
<section id="services" class="services">
    <div class="uslugi"></div>
        <nav>
            <ul class="uslugi-item">
                <li class="uslugi-item-list"><a class="uslugi-item-links" href="#">Все Услуги</a>
                <li class="uslugi-item-list"><a class="uslugi-item-links" href="#">По транспорту</a></li>
            </ul>
        </nav>
    </div>
    <main>
    <div class="description">
        <div class="description-item">
        <nav>
            <ul>
                <li class="description-item-list"><a class="description-item-links" href="#">Автомобильные грузоперевозки</a></li>
                <li class="description-item-list"><a class="description-item-links" href="#">Морские грузоперевозки</a></li>
                <li class="description-item-list"><a class="description-item-links" href="#">Железнодорожные грузоперевозки</a></li>
                <li class="description-item-list"><a class="description-item-links" href="#">Авиационные грузоперевозки</a></li>
            </ul>
        </nav>
        </div>
        <div class="description-text">
            <span class="description-text-p1">
                <p> Международные и внутрироссийские грузоперевозки</p>
                <p> Перевозку крупногабаритных и тяжеловесных грузов</p>
                <p> Обработку сборных грузов</p>
                <p> Консолидацию/расконсолидацию грузовых партий</p>
                <p> Отслеживание груза и контроль транспортировки </p>
                <p> Страхование груза</p>
            </span>
        </div>
    </main>
    </div>
</section>
<section id="about" class="about">
    <div class="about-h">
        <h1>О компании</h1>
    </div>
    <div class="about-back">
        <div class="about-back-text">
    <div class="about-back-text-text2">
      <p>SeaWay Logistics — динамично развивающаяся транспортно-экспедиторская компания, специализирующейся на международных морских, а также, на железнодорожных контейнерных перевозках внутри России.
      </p>
      <p>
        Наша компания оказывает транспортно-экспедиторские услуги по всему миру, имеем своих агентов во всех крупных портах Азии, Европы, Америки и Австралии. Нашими клиентами являются многие местные и региональные компании. Мы работаем со всеми крупными морскими перевозчиками: APL, CMA CGM, FESCO, HMM, SINOKOR и Maersk.
      </p>
      <p>
        Опыт, активность и лояльность наших сотрудников направлены на достижение главного — способствовать успеху наших Клиентов, минимизировать их совокупные транспортные издержки, сокращать сроки доставки при достаточном и гарантированном качестве услуг.
      </p>
      <br>
    </div>
    </div>
    </div>
</section>
<section id="contac" class="contac">
    <div class="contac-h">
        <h1>Контакты</h1>
    </div>
    <div class="contac-back">
        <div class="contac-back-info">
            <span class="contac-back-info-text">ООО "Seaway Logistics"</span>
            <div class="contac-back-info-cont">
                <div class="contac-back-info-cont-tel">
                    <img src="img/icons/tel.png">
                    <div class="contac-back-info-cont-tel-text">
                    <span class="contac-back-info-cont-tel-logo">Tелефон</span>
                    <span class="contac-back-info-cont-tel-inf">+7(423)276-00-61</span>
                    </div>
                </div>
               <div class="contac-back-info-cont-email">
                    <img src="img/icons/mess.png">
                    <div class="contac-back-info-cont-tel-text">
                    <span class="contac-back-info-cont-tel-logo">E-mail</span>
                    <span class="contac-back-info-cont-tel-inf">info@sw-log.com</span>
                    </div>
                </div>
                <div class="contac-back-info-cont-web">
                    <img src="img/icons/web.png">
                    <div class="contac-back-info-cont-tel-text">
                    <span class="contac-back-info-cont-tel-logo">Web</span>
                    <span class="contac-back-info-cont-tel-inf">www.sw-log.com</span>
                    </div>
                </div>
                <div class="contac-back-info-cont-addres">
                    <img src="img/icons/geo.png">
                    <div class="contac-back-info-cont-tel-text">
                    <span class="contac-back-info-cont-tel-logo">Адрес</span>
                    <span class="contac-back-info-cont-tel-inf">690065, Россия, Владивосток Стрельникова 9, оф. 213</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
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