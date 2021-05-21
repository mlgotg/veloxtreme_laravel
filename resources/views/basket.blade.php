@extends("index")
@section('title')
    Корзина
@endsection
@section('head')
    <link rel="stylesheet" href="less/basket.css">
@endsection
@section('basket')
    <div class="items">
        <span class="basket">Ваша корзина:</span>
        <div class="block2">
            <img src="image/bikes/bike1.png">
            <div class="insides">
                <div class="row1">
                    <div class="name">
                        <span class="model">Модель: </span> <span class="title1">Trek Marlin 5 2020</span>
                    </div>
                    <span class="price">12999₴</span>
                </div>

                <div class="row2">
                    <div>
                        <span>Розмір: </span> <span>27”</span>
                    </div>
                    <div>
                        <span>Колір: </span>  <span>black</span>
                    </div>
                    <div>
                        <span>Код товару: </span> <span>548012</span>
                    </div>
                </div>
                <div class="row3">
                    <button class="plus">+</button>
                    <span>1</span>
                    <button class="minus">-</button>
                    <img src="image/icons/garbage.svg">
                </div>
            </div>
        </div>
        <div class="block2">
            <img src="image/bikes/bike1.png">
            <div class="insides">
                <div class="row1">
                    <div class="name">
                        <span class="model">Модель: </span> <span class="title1">Trek Marlin 5 2020</span>
                    </div>
                    <span class="price">12999₴</span>
                </div>

                <div class="row2">
                    <div>
                        <span>Розмір: </span> <span>27”</span>
                    </div>
                    <div>
                        <span>Колір: </span>  <span>black</span>
                    </div>
                    <div>
                        <span>Код товару: </span> <span>548012</span>
                    </div>
                </div>
                <div class="row3">
                    <button class="plus">+</button>
                    <span>1</span>
                    <button class="minus">-</button>
                    <img src="image/icons/garbage.svg">
                </div>
            </div>
        </div>
        <div class="for-button">
            <button class="checkout">Оформити замовлення</button>
        </div>
    </div>
@endsection
