@extends("index")
@section('title')
    -
@endsection
@section('head')
    <link rel="stylesheet" href="less/store.css">
    <link rel="stylesheet" href="less/filters.css">
    <link rel="stylesheet" href="less/product.css">
@endsection
@section('product')
    <h1>Trek Marlin 5 2020</h1>
    <div class="product-info">
        <div class="gallery-char">
            <div class="gallery">
                <div class="main-image">
                    <button class="left-arrow-button">
                        <img src="image/icons/down-arrow.svg">
                    </button>
                    <img src="image/bikes/bike1/5.png" class="gallery-image selected" style="display: block">
                    <img src="image/bikes/bike1/2.webp" class="gallery-image" style="display: none">
                    <img src="image/bikes/bike1/3.webp" class="gallery-image" style="display: none">
                    <img src="image/bikes/bike1/4.jpg" class="gallery-image" style="display: none">
                    <button class="right-arrow-button">
                        <img src="image/icons/down-arrow.svg">
                    </button>
                </div>
                <div class="image-row">
                    <img src="image/bikes/bike1/5.png" class="row-item">
                    <img src="image/bikes/bike1/2.webp" class="row-item">
                    <img src="image/bikes/bike1/3.webp" class="row-item">
                    <img src="image/bikes/bike1/4.jpg" class="row-item">
                </div>
                <div class="product-desc">
                    <button type="button" class="collapsible active product-desc-header"><img class="arrow" src="image/icons/down-arrow.svg">Опис</button>
                    <div class="content product-desc-body" style="display: block;">
                        <p>
                            Це справжній гірський велосипед, який також чудово підходить для щоденних поїздок, поїздок по містечку або просто пересування з А до В на будь-якій поверхні. Менші розміри рами (XXS, XS та S) мають гальмівні важелі з коротким охопленням, що полегшує та зручніше для водіїв з меншими руками гальмувати впевнено.</p>

                        <p>Моделі Marlin у розмірах рами від XXS до S мають вигнуту верхню трубу та нижню висоту стояння, що полегшує гонщикам менших розмірів монтування та демонтаж. Кріплення на стійку та підставку полегшує доступ до аксесуарів, тому ваш гірський велосипед може виступати в ролі міцного пасажирa.</p>

                        <p>Як і кожна модель у родині Марлін, вона забезпечена довічною гарантією Trek.</p>
                    </div>
                </div>
            </div>
            <div class="characteristics">
                <div class="buy-section">
                    <div class="buy">
                        <h1>12999₴</h1>
                        <button><p>Купити</p><img src="image/icons/shopping-backet.svg"></button>
                    </div>
                    <div class="choice-char">
                        <div class="choice-color">
                            <h2>Колір</h2>
                            <div class="colors">
                                <div class="radiobuttons">
                                    <input type="radio" id="color" name="color" style="display: none">
                                    <div class="radiobutton-filter">
                                        <input type="radio" id="grey" name="color">
                                        <label for="color"></label>
                                    </div>
                                    <div class="radiobutton-filter">
                                        <input type="radio" id="white" name="color">
                                        <label for="color"></label>
                                    </div>
                                    <div class="radiobutton-filter">
                                        <input type="radio" id="black" name="color">
                                        <label for="color"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="choice-diameter">
                            <h2>Діаметр</h2>
                            <div class="radiobuttons">
                                <div class="radiobutton-filter">
                                    <input type="radio" id="diameter" name="diameter">
                                    <label for="diameter">26"</label>
                                </div>
                                <div class="radiobutton-filter">
                                    <input type="radio" name="diameter">
                                    <label for="diameter">28"</label>
                                </div>
                                <div class="radiobutton-filter">
                                    <input type="radio" name="diameter">
                                    <label for="diameter">29"</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chars-section">
                    <button type="button" class="collapsible active chars-header"><img class="arrow" src="image/icons/down-arrow.svg">Характеристики</button>
                    <div class="content chars-body" style="display: block;">
                        <p>
                            Тип велосипеду: Гравійний
                        </p>
                        <p>
                            Матеріал рами: Алюміній
                        </p>
                        <p>
                            Тип гальм: Дискові гідравлічні
                        </p>
                        <p>
                            Вилка: SR Suntour XCE 28, хід 100 мм
                        </p>
                        <p>
                            Втулки:	Formula DC20 / Formula DC27
                        </p>
                        <p>
                            Ободи:	Bontrager Connection, 32 отв
                        </p>
                        <p>
                            Шифтери:	Shimano Altus M315, 7 шв.
                        </p>
                        <p>
                            П.перемикач:	Shimano Tourney TY300
                        </p>
                        <p>
                            З.перемикач:	Shimano Tourney TY300
                        </p>
                        <p>
                            Рульова:	1-1/8˝ напівінтегрована
                        </p>
                        <p>
                            Вага: 14.44 кг
                        </p>
                        <p>
                            Касета:	Shimano HG200, 12-32, 7 шв
                        </p>
                        <p>
                            Каретка:	Картриджна, 73 мм
                        </p>
                    </div>
                </div>
                <div class="review-section">
                    <button type="button" class="collapsible active product-desc-header"><img class="arrow" src="image/icons/down-arrow.svg">Відгуки</button>
                    <div class="content product-desc-body" style="display: block;">
                        <div class="review">
                            <div class="review-header">
                                <img src="image/icons/account-blue.svg">
                                <h2>Перун Павло</h2>
                            </div>
                            <div class="review-body">
                                <p>
                                    Тип велосипеду: Гравійний
                                </p>
                            </div>
                        </div>
                        <div class="review">
                            <div class="review-header">
                                <img src="image/icons/account-blue.svg">
                                <h2>Перун Павло</h2>
                            </div>
                            <div class="review-body">
                                <p>
                                    Тип велосипеду: Гравійний
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./script/collapsible.js"></script>
    <script>
        var slideIndex = 0
        var i;
        var slides = document.getElementsByClassName("gallery-image");
        var dots = document.getElementsByClassName("row-item");
        document.getElementsByClassName("left-arrow-button")[0].addEventListener("click", function () {
            slideIndex--
            if (slideIndex < 0) {slideIndex = slides.length - 1}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" selected", "");
            }
            slides[slideIndex].style.display = "block";
        })
        document.getElementsByClassName("right-arrow-button")[0].addEventListener("click", function () {
            slideIndex++
            if (slideIndex === slides.length) {slideIndex = 0}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" selected", "");
            }
            slides[slideIndex].style.display = "block";
        })
    </script>
@endsection
