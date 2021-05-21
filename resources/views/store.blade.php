@extends("index")
@section('title')
    -
@endsection
@section('head')
    <link rel="stylesheet" href="less/store.css">
    <link rel="stylesheet" href="less/filters.css">
    <link rel="stylesheet" href="less/login.css">
    <link rel="stylesheet" href="less/search.css">
@endsection
@section('store')
    <h1>Велосипеди</h1>
    <div class="store-section">
        <div class="filter-section">
            <div class="store-header-filter">
                <div class="filter-label">
                    <img src="image/icons/filter.svg" onclick="openFilter()">
                    <h1>Фільтри</h1>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Велосипеди</button>
                <div class="content" style="display: block;">
                    <div class="checkbox-filter">
                        <input type="checkbox" id="teen-sidefilter" name="teen-sidefilter">
                        <label for="teen-sidefilter">Підліткові</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="mountain-sidefilter" name="mountain-sidefilter">
                        <label for="mountain-sidefilter">Гірські</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="highway-sidefilter" name="highway-sidefilter">
                        <label for="highway-sidefilter">Шосейні</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="hybrid-sidefilter" name="hybrid-sidefilter">
                        <label for="hybrid-sidefilter">Гібридні</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="electro-sidefilter" name="electro-sidefilter">
                        <label for="electro-sidefilter">Електробайки</label>
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Ціна</button>
                <div class="content" style="display: block;">
                    <div class="price-slider">
                        <input type="text" placeholder="Від">
                        <input type="text" placeholder="До">
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Діаметр коліс</button>
                <div class="content" style="display: block;">
                    <div class="checkbox-filter">
                        <input type="checkbox" id="18-sidefilter" name="18-sidefilter">
                        <label for="18-sidefilter">18"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="20-sidefilter" name="20-sidefilter">
                        <label for="20-sidefilter">20"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="24-sidefilter" name="24-sidefilter">
                        <label for="24-sidefilter">24"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="26-sidefilter" name="26-sidefilter">
                        <label for="26-sidefilter">26"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="28-sidefilter" name="28-sidefilter">
                        <label for="28-sidefilter">28"</label>
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Виробник</button>
                <div class="content" style="display: block;">
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Apollo-sidefilter" name="Apollo-sidefilter">
                        <label for="Apollo-sidefilter">Apollo</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Bellelli-sidefilter" name="Bellelli-sidefilter">
                        <label for="Bellelli-sidefilter">Bellelli</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Bergamont-sidefilter" name="Bergamont-sidefilter">
                        <label for="Bergamont-sidefilter">Bergamont</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Cannondale-sidefilter" name="Cannondale-sidefilter">
                        <label for="Cannondale-sidefilter">Cannondale</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Ghost-sidefilter" name="Ghost-sidefilter">
                        <label for="Ghost-sidefilter">Ghost</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section">
            <div class="store-header-sort">
                <div class="sort-label">
                    <h3>Сортувати за: </h3>
                    <select>
                        <option>замовчуванням</option>
                        <option>ціною</option>
                        <option>алфавітом</option>
                    </select>
                </div>
            </div>
            <div class="store-section-items">
                <div class="store-item" id="1">
                    <a href="product.html">
                        <img src="image/bikes/bike3.png">
                        <div class="desc">
                            <div class="item-desc">
                                <span class="model">Trek Marlin 5 2020</span>
                                <div class="price-buy">
                                    <span class="price">12999₴</span>
                                    <button><img src="image/icons/shopping-basket.svg"></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="store-item" id="2">
                    <a href="#">
                        <img src="image/bikes/bike3.png">
                        <div class="desc">
                            <div class="item-desc">
                                <span class="model">Trek Marlin 5 2020</span>
                                <div class="price-buy">
                                    <span class="price">12999₴</span>
                                    <button><img src="image/icons/shopping-basket.svg"></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="store-item" id="3">
                    <a href="#">
                        <img src="image/bikes/bike3.png">
                        <div class="desc">
                            <div class="item-desc">
                                <span class="model">Trek Marlin 5 2020</span>
                                <div class="price-buy">
                                    <span class="price">12999₴</span>
                                    <button><img src="image/icons/shopping-basket.svg"></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="store-item" id="4">
                    <a href="#">
                        <img src="image/bikes/bike3.png">
                        <div class="desc">
                            <div class="item-desc">
                                <span class="model">Trek Marlin 5 2020</span>
                                <div class="price-buy">
                                    <span class="price">12999₴</span>
                                    <button><img src="image/icons/shopping-basket.svg"></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="store-item" id="5">
                    <a href="#">
                        <img src="image/bikes/bike3.png">
                        <div class="desc">
                            <div class="item-desc">
                                <span class="model">Trek Marlin 5 2020</span>
                                <div class="price-buy">
                                    <span class="price">12999₴</span>
                                    <button><img src="image/icons/shopping-basket.svg"></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="store-item" id="6">
                    <a href="#">
                        <img src="image/bikes/bike3.png">
                        <div class="desc">
                            <div class="item-desc">
                                <span class="model">Trek Marlin 5 2020</span>
                                <div class="price-buy">
                                    <span class="price">12999₴</span>
                                    <button><img src="image/icons/shopping-basket.svg"></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="pagination">
        <ul class="pagination-list">
            <li class="pagination-arrow left-arrow">
                <a href="#">
                    <img src="image/icons/down-arrow.svg">
                </a>
            </li>
            <li class="pagination-item selected">
                <a href="#">1</a>
            </li>
            <li class="pagination-item">
                <a href="#">2</a>
            </li>
            <li class="pagination-item">
                <a href="#">3</a>
            </li>
            <li class="pagination-item">
                <a href="#">4</a>
            </li>
            <li class="pagination-item">
                <a href="#">5</a>
            </li>
            <li class="pagination-item">
                <a href="#">6</a>
            </li>
            <li class="pagination-arrow right-arrow">
                <a href="#">
                    <img src="image/icons/down-arrow.svg">
                </a>
            </li>
        </ul>
    </div>
    <div id="mySidefilter" class="sidefilter">
        <div class="close-button">
            <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()">&times;</a>
        </div>
        <div class="filter-section">
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Велосипеди</button>
                <div class="content" style="display: block;">
                    <div class="checkbox-filter">
                        <input type="checkbox" id="teen" name="teen">
                        <label for="teen">Підліткові</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="mountain" name="mountain">
                        <label for="mountain">Гірські</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="highway" name="highway">
                        <label for="highway">Шосейні</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="hybrid" name="hybrid">
                        <label for="hybrid">Гібридні</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="electro" name="electro">
                        <label for="electro">Електробайки</label>
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Ціна</button>
                <div class="content" style="display: block;">
                    <div class="price-slider">
                        <input type="text" placeholder="Від">
                        <input type="text" placeholder="До">
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Діаметр коліс</button>
                <div class="content" style="display: block;">
                    <div class="checkbox-filter">
                        <input type="checkbox" id="18" name="18">
                        <label for="18">18"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="20" name="20">
                        <label for="20">20"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="24" name="24">
                        <label for="24">24"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="26" name="26">
                        <label for="26">26"</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="28" name="28">
                        <label for="28">28"</label>
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="image/icons/down-arrow.svg">Виробник</button>
                <div class="content" style="display: block;">
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Apollo" name="Apollo">
                        <label for="Apollo">Apollo</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Bellelli" name="Bellelli">
                        <label for="Bellelli">Bellelli</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Bergamont" name="Bergamont">
                        <label for="Bergamont">Bergamont</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Cannondale" name="Cannondale">
                        <label for="Cannondale">Cannondale</label>
                    </div>
                    <div class="checkbox-filter">
                        <input type="checkbox" id="Ghost" name="Ghost">
                        <label for="Ghost">Ghost</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">Велосипеди</a>
        <a href="">Запчастини</a>
        <a href="">Аксесуари</a>
        <a href="">Контакти</a>
    </div>
    <div id="login-form" class="modal">
        <form class="modal-content animate" action="#">
            <div class="close" title="Close Modal"><div onclick="closeLogin()">&times;</div></div>
            <h2>Вхід в профіль</h2>
            <div class="login-body">
                <div class="login-info">
                    <label for="uname">Email</label>
                    <input type="text" placeholder="Введіть Email" name="uname" required>
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
        <form class="modal-content signup animate" action="#">
            <div class="close" title="Close Modal"><div onclick="closeRegister()">&times;</div></div>
            <h2>Реєстрація</h2>
            <div class="login-body">
                <div class="login-info">
                    <label for="uname">Ім'я</label>
                    <input type="text" placeholder="Введіть ім'я" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Прізвище</label>
                    <input type="text" placeholder="Введіть прізвище" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Email</label>
                    <input type="text" placeholder="Введіть по-батькові" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Номер телефону</label>
                    <input type="text" placeholder="Введіть номер телефону" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Email</label>
                    <input type="text" placeholder="Введіть Email" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="psw">Пароль</label>
                    <input type="password" placeholder="Введіть пароль" name="psw" required>
                </div>
                <div class="login-info">
                    <label for="psw">Повторіть пароль</label>
                    <input type="password" placeholder="Повторіть пароль" name="psw" required>
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
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            closeFilter()
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script>
        function openFilter() {
            document.getElementById("mySidefilter").style.width = "351px";
            closeNav()
        }
        function closeFilter() {
            document.getElementById("mySidefilter").style.width = "0";
        }
    </script>
    <script>
        var coll = document.getElementsByClassName("pagination-item");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                for(let i = 0; i < coll.length; i++) {
                    if(coll[i].classList.contains("selected")) {
                        coll[i].classList.remove("selected")
                        break
                    }
                }
                this.classList.toggle("selected");
            });
        }

        var arrows = document.getElementsByClassName("pagination-arrow")
        for(let i = 0; i < arrows.length; i++) {
            arrows[i].addEventListener("click", function() {
                if(this.classList.contains("left-arrow")) {
                    for(let i = 0; i < coll.length; i++) {
                        if(coll[i].classList.contains("selected") && coll[i - 1] !== undefined) {
                            coll[i].classList.remove("selected")
                            coll[i - 1].classList.toggle("selected")
                            break
                        }
                    }
                }
                if(this.classList.contains("right-arrow")) {
                    for(let i = 0; i < coll.length; i++) {
                        if(coll[i].classList.contains("selected") && coll[i + 1] !== undefined) {
                            coll[i].classList.remove("selected")
                            coll[i + 1].classList.toggle("selected")
                            break
                        }
                    }
                }
            })
        }
    </script>
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
@endsection
