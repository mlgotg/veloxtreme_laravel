@extends("index")
@section('title')
    {{$product->manufacturer}} {{$product->model}}
@endsection
@section('head')
    <link rel="stylesheet" href="/less/filters.css">
    <link rel="stylesheet" href="/less/store.css">
    <link rel="stylesheet" href="/less/product.css">
@endsection
@section('product')
    <h1>{{$product->manufacturer}} {{$product->model}}</h1>
    <div class="product-info">
        <div class="gallery-char">
            <div class="gallery">
                <div class="main-image">
                    <button class="left-arrow-button">
                        <img src="/image/icons/down-arrow.svg">
                    </button>
                    <img src="/{{$product->img1}}" class="gallery-image selected" style="display: block">
                    <img src="/{{$product->img2}}" class="gallery-image" style="display: none">
                    <img src="/{{$product->img3}}" class="gallery-image" style="display: none">
                    <img src="/{{$product->img4}}" class="gallery-image" style="display: none">
                    <button class="right-arrow-button">
                        <img src="/image/icons/down-arrow.svg">
                    </button>
                </div>
                <div class="image-row">
                    <img src="/{{$product->img1}}" class="row-item">
                    <img src="/{{$product->img2}}" class="row-item">
                    <img src="/{{$product->img3}}" class="row-item">
                    <img src="/{{$product->img4}}" class="row-item">
                </div>
                <div class="product-desc">
                    <button type="button" class="collapsible active product-desc-header"><img class="arrow" src="/image/icons/down-arrow.svg">Опис</button>
                    <div class="content product-desc-body" style="display: block;">
                        {{$product->description}}
                    </div>
                </div>
            </div>
            <div class="characteristics">
                <div class="buy-section">
                    <div class="buy">
                        <h1>{{$product->price}}₴</h1>
                        <button><p>Купити</p><img src="/image/icons/shopping-backet.svg"></button>
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
                    <button type="button" class="collapsible active chars-header"><img class="arrow" src="/image/icons/down-arrow.svg">Характеристики</button>
                    <div class="content chars-body" style="display: block;">
                        <p>
                            Тип: {{$product->product_type}}
                        </p>
                        <p>
                            Тип велосипеду: {{$product->type}}
                        </p>
                        <p>
                            Виробник: {{$product->manufacturer}}
                        </p>
                        <p>
                            Модель: {{$product->model}}
                        </p>
                        <p>
                            Матеріал рами: {{$product->frame}}
                        </p>
                        <p>
                            Тип гальм: {{$product->brakes}}
                        </p>
                        <p>
                            Колір: {{$product->color}}
                        </p>
                        <p>
                            Діаметр коліс: {{$product->diameter}}"
                        </p>
                    </div>
                </div>
                <div class="review-section">
                    <button type="button" class="collapsible active product-desc-header"><img class="arrow" src="/image/icons/down-arrow.svg">Відгуки</button>
                    <div class="content product-desc-body" style="display: block;">
                        @foreach($reviews as $r)
                            <div class="review">
                                <div class="review-header">
                                    <img src="/image/icons/account-blue.svg">
                                    <h2>Перун Павло</h2>
                                </div>
                                <div class="review-body">
                                    <p>
                                        {{$r->review}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/script/collapsible.js"></script>
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
