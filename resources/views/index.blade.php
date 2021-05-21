<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @yield('head')
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="less/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script/scroll.js"></script>
</head>
<body>
<header>
    <a href="index.html" class="icon">
        <img src="image/logo.svg" class="logo">
        <img src="image/logo-mobile.svg" class="logo-mob">
    </a>
    <div class="menu">
        <a>Велосипеди</a>
        <a>Запчастини</a>
        <a>Аксесуари</a>
        <a>Контакти</a>
    </div>
    <div class="icons">
        <img src="image/icons/loupe.svg">
        <img src="image/icons/account.svg">
        <img src="image/icons/shopping-backet.svg">
        <img src="image/icons/menu.svg" onclick="openNav()" class="nav-button">
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </div>
</header>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.html">Велосипеди</a>
    <a href="">Запчастини</a>
    <a href="">Аксесуари</a>
    <a href="">Контакти</a>
</div>
@yield('accessories')
@yield('main')
@yield('checkout')
@yield('basket')
@yield('contact')
@yield('product')
@yield('store')
<footer>
    <div class="footer-nav hidden-2">
        <a href="#"><h3>Велосипеди</h3></a>
        <a href="#">Гірські велосипеди</a>
        <a href="#">Шосейні велосипеди</a>
        <a href="#">Гравійні велосипеди</a>
        <a href="#">Фетбайки</a>
        <a href="#">Електровелосипеди</a>
        <a href="#">BMX велосипеди</a>
    </div>
    <div class="footer-nav hidden-1">
        <a href="#"><h3>Бренди</h3></a>
        <a href="#">Trek</a>
        <a href="#">Kellys</a>
        <a href="#">Trinx</a>
        <a href="#">Merida</a>
        <a href="#">Alpina</a>
        <a href="#">Fuji</a>
    </div>
    <div class="footer-nav">
        <a href="#"><h3>Графік роботи</h3></a>
        <a href="#">Будні: 09:00 - 20:00</a>
        <a href="#">Субота: 10:00 - 16:00</a>
        <a href="#">Неділя: Вихідний</a>
    </div>
    <div class="footer-nav">
        <a href="#"><h3>Контакти</h3></a>
        <a href="#"><img src="image/icons/phone-call.svg"> +38(099)334-34-34</a>
        <a href="#"><img src="image/icons/phone-call.svg"> +38(097)334-43-43</a>
        <a href="#"><img src="image/icons/map-tag.svg"> м. Київ, вул. Освіти, 18</a>
        <a href="#"><img src="image/icons/mail.svg"> veloXtreme@gmail.com</a>
    </div>
</footer>
</body>
</html>
