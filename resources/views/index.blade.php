<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @yield('head')
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="less/style.css">
    <link rel="stylesheet" href="less/login.css">
    <link rel="stylesheet" href="less/search.css">
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
        <a href="\contact">Контакти</a>
    </div>
    <div class="icons">
        <img src="image/icons/loupe.svg" onclick="openSearch()">
        <img src="image/icons/account.svg" onclick="openLogin()">
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
    <a href="\contact">Контакти</a>
</div>
@yield('accessories')
@yield('main')
@yield('checkout')
@yield('basket')
@yield('contact')
@yield('product')
@yield('store')
@yield('store')
@yield('submit')
<div id="login-form" class="modal">
    <form class="modal-content animate" action='/' method="post">
        @csrf
        <div class="close" title="Close Modal"><div onclick="closeLogin()">&times;</div></div>
        <h2>Вхід в профіль</h2>
        <div class="login-body">
            <div class="login-info">
                <label for="email">Email</label>
                <input type="email" placeholder="Введіть Email" name="email" required>
            </div>
            <div class="login-info">
                <label for="psw">Пароль</label>
                <input type="password" placeholder="Введіть пароль" name="psw" required>
            </div>
            <div class="submit-section">
                <button type="submit">Ввійти</button>
                <span class="psw"><a>Забули пароль?</a></span>
            </div>
        </div>
        <div class="login-footer checkbox-filter">
            <div class="remember-block">
                <input id="remember" type="checkbox" checked="checked" name="remember"/>
                <label for="remember">Запам'ятати мене</label>
            </div>
            <a onclick="closeLogin();openRegister()">Зареєструватись</a>
        </div>
    </form>
</div>
<div id="signup-form" class="modal">
    <form class="modal-content signup animate" action='/' method="post">
        @csrf
        <div class="close" title="Close Modal"><div onclick="closeRegister()">&times;</div></div>
        <h2>Реєстрація</h2>
        <div class="login-body">
            <div class="login-info">
                <label for="uname">Ім'я</label>
                <input type="text" placeholder="Введіть ім'я" name="uname" required>
            </div>
            <div class="login-info">
                <label for="surname">Прізвище</label>
                <input type="text" placeholder="Введіть прізвище" name="surname" required>
            </div>
            <div class="login-info">
                <label for="patronymic">По-батькові</label>
                <input type="text" placeholder="Введіть по-батькові" name="patronymic" required>
            </div>
            <div class="login-info">
                <label for="number">Номер телефону</label>
                <input type="tel" placeholder="Введіть номер телефону" name="number" required>
            </div>
            <div class="login-info">
                <label for="email">Email</label>
                <input type="email" placeholder="Введіть Email" name="email" required>
            </div>
            <div class="login-info">
                <label for="psw">Пароль</label>
                <input type="password" placeholder="Введіть пароль" name="psw1" required>
            </div>
            <div class="login-info">
                <label for="psw">Повторіть пароль</label>
                <input type="password" placeholder="Повторіть пароль" name="psw2" required>
            </div>
            <div class="submit-section">
                <button type="submit">Створити аккаунт</button>
                <span class="psw"><a onclick="closeRegister(); openLogin()">Ввійти</a></span>
            </div>
        </div>
    </form>
</div>
<div id="search">
    <div class="login-info">
        <input type="text" placeholder="Пошук" name="search" required>
    </div>
    <div class="search-button">
        <img src="image/icons/loupe-dark-blue.svg">
    </div>
    <div class="close" title="Close Modal"><div onclick="closeSearch()">&times;</div></div>
</div>
<script src="./script/collapsible.js"></script>
<script>
    var modal = document.getElementById('login-form');
    var modal2 = document.getElementById('signup-form')
    var modal3 = document.getElementById('search')
    window.onclick = function(event) {
        if (event.target === modal || event.target === modal2 || event.target === modal3) {
            modal.style.display = "none"
            modal2.style.display = "none"
            modal3.style.display = "none"
            closeLogin()
            closeRegister()
            closeSearch()
        }
    }

    function openLogin() {
        document.getElementById('login-form').style.display='flex'
        document.body.style.overflow = 'hidden'
    }

    function closeLogin() {
        document.getElementById('login-form').style.display='none'
        document.body.removeAttribute('style')
    }

    function openRegister() {
        document.getElementById('signup-form').style.display='flex'
        document.body.style.overflow = 'hidden'
    }

    function closeRegister() {
        document.getElementById('signup-form').style.display='none'
        document.body.removeAttribute('style')
    }

    function openSearch() {
        document.getElementById('search').style.display='flex'
        document.body.style.overflow='hidden'
    }

    function closeSearch() {
        document.getElementById('search').style.display='none'
        document.body.removeAttribute('style')
    }

</script>
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
