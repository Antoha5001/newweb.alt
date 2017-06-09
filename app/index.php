<!Doctype html>
<html lang="ru">

<head>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/mystyle.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <title>Главная</title>

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header class="header">
    <div class="wrapper">
        <div class="row">
            <div class="col col-lg-4 col-md-12">
                <a href="#" class="header__logo">
                    <img src="images/logo.svg" alt="">
                </a>
            </div>
            <div class="col col-lg-8 col-md-12 menu__box">
                <nav class="menu">
                    <input type="checkbox" name="toggle" id="menu" class="menu__toggle"/>
                    <label for="menu" class="menu__toggle"><i class="fa fa-bars"></i>Меню</label>
                    <ul>
                        <!-- <li><a href="#"><i class="fa fa-home"></i>Главная</a></li> -->
                        <li>
                            <input type="checkbox" name="toggle" class="submenu__toggle" id="sub_m1"/>
                            <a href="#"><i class="fa fa-shopping-basket"></i>Услуги</a>
                            <label for="sub_m1" class="submenu__toggle"><i class="fa"></i></label>
                            <ul>
                                <li><a href="#">Верстка html шаблона из psd</a></li>
                                <li><a href="#">Верстка e-mail писем</a></li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="toggle" class="submenu__toggle" id="sub_m2"/>
                            <a href="#"><i class="fa fa-cogs"></i>Портфолио</a>
                            <label for="sub_m2" class="submenu__toggle"><i class="fa"></i></label>
                            <ul>
                                <li><a href="#">Портфолио 1</a></li>
                                <li><a href="#">Портфолио 2</a></li>
                                <li><a href="#">Портфолио 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-newspaper-o"></i>Статьи</a></li>
                        <li><a href="#"><i class="fa fa-newspaper-o"></i>Цены</a></li>
                        <li><a href="#"><i class="fa fa-address-book-o"></i>Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="hr__top"></div>
<section class="banner__box">
    <div class="wrapper banner">
        <div class="row">
            <div class="col col-lg-12">
                <h1>
                    <span class="banner__podzagolovok">сайт-портфолио</span>
                    <span class="banner__zagolovok">веб-дизайнера</span>
                </h1>
            </div>
            <div class="col col-lg-12 header__button-box col_center">
                <a href="#" class="button">Портфолио</a>
            </div>
        </div>
    </div>
</section>
<div class="hr__bottom"></div>
<section class="base__box">
    <div class="wrapper">
        <div class="row row_center">
            <div class="col col-lg-8 col_center">
                <p>Приветствую! Меня зовут Антон. Я веб-мастер, дизайнер. <br/>
                    Специализируюсь на Frontend / UI дизайне для WEB. У меня большой опыт работы в полиграфии.
                    <br/>Занимаюсь созданием "легких" и удобных сайтов с адаптивной версткой.</p>
            </div>
            <div class="col col-lg-12 col_center">
                <a href="#" class="button__scroll"></a>
            </div>
        </div>
    </div>

</section>
<section class="base__box">
    <div class="wrapper">
        <div class="row">
            <div class="col col-lg-6 col-md-12">
                <h2>
                    Создание адаптивных </br>веб-сайтов
                </h2><br>
                <p>С 2005 года занимаясь веб-дизайном, и держа руку на пульсе
                    сайтостроения, я предлагаю своим клиентам качественный <br>
                    веб-дизайн, грамотную сборку на быстрой, безопасной и удобной
                    системе управления, валидную верстку с учетом SEO-трендов,
                    дальнейшую поддержку и сопровождение.
                    </p> <br>
                <p>Как комплексно, так и в отдельности можно заказать:</p>
                <a href="#" class="button button__more">Подробнее</a>
            </div>
            <div class="col col-lg-6 col-md-12"></div>
        </div>
    </div>
</section>
<div class="hr__top"></div>
<section class="base__box portfolio__box">
    <div class="wrapper">
        <div class="row">
            <div class="col col-lg-12 col_center">
                <h2>Недавние работы</h2>
            </div>
            <div class="col col-lg-4 portfolio__item">1</div>
            <div class="col col-lg-4 portfolio__item">2</div>
            <div class="col col-lg-4 portfolio__item">3</div>
            <div class="col col-lg-12 col_center portfolio__button-box">
                <a href="#" class="button">Портфолио</a>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="script/scripts.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="script/jquery.js"><\/script>')</script> -->
</body>

</html>
