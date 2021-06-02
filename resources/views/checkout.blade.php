@extends("index")
@section('title')
    Корзина
@endsection
@section('head')
    <link rel="stylesheet" href="less/checkout.css">
    <link rel="stylesheet" href="less/login.css">
    <link rel="stylesheet" href="less/basket.css">
@endsection
@section('checkout')
    <form action="/submit" method="post">
        @csrf
        <div class="block-1">
            <span class="checkout-title">Оформлення замовлення</span>
{{--            <div class="row2">--}}
{{--                <span class="your-contacts">Ваші контактні дані</span>--}}
{{--                <span class="login-button" onclick="openLogin()">Увійти в аккаунт</span>--}}
{{--            </div>--}}
            <div class="login-body">
{{--                <div class="login-info">--}}
{{--                    <label for="uname">Ім'я</label>--}}
{{--                    <input type="text" placeholder="Введіть ім'я" name="uname" required>--}}
{{--                </div>--}}
{{--                <div class="login-info">--}}
{{--                    <label for="surname">Прізвище</label>--}}
{{--                    <input type="text" placeholder="Введіть прізвище" name="surname" required>--}}
{{--                </div>--}}
{{--                <div class="login-info">--}}
{{--                    <label for="patronymic">По-батькові</label>--}}
{{--                    <input type="text" placeholder="Введіть по-батькові" name="patronymic" required>--}}
{{--                </div>--}}
{{--                <div class="login-info">--}}
{{--                    <label for="number">Номер телефону</label>--}}
{{--                    <input type="tel" placeholder="Введіть номер телефону" name="number" required>--}}
{{--                </div>--}}
{{--                <div class="login-info">--}}
{{--                    <label for="email">Email</label>--}}
{{--                    <input type="email" placeholder="Введіть Email" name="email" required>--}}
{{--                </div>--}}
{{--                <div class="login-info">--}}
{{--                    <label for="comment">Коментар</label>--}}
{{--                    <input type="text" placeholder="Введіть коментар" name="comment" required>--}}
{{--                </div>--}}
                <div class="variant-of-delivery">
                    <span class="delivery-title">Спосіб доставки</span>
                    <div class="radiobuttons">
                        <input type="radio" id="delivery" name="delivery_type" style="display: none" required>
                        <div class="radiobutton-filter">
                            <input type="radio" id="by-self" name="delivery_type" value="Самовивіз з магазину">
                            <label for="delivery_type">Самовивіз з магазину</label>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="courier" name="delivery_type" value="Кур’єр">
                            <label for="delivery_type">Кур’єром</label>
                            <div class="login-info">
                                <label for="delivery_details_c">Ваша адреса</label>
                                <input type="text" name="delivery_details_c">
                            </div>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="nova-poshta" name="delivery_type" value="Нова пошта">
                            <label for="delivery_type">Нова пошта</label>
                            <div class="login-info">
                                <label for="delivery_details_np">Номер віділення та місто</label>
                                <input type="text" name="delivery_details_np">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="variant-of-pay">
                    <span class="pay-title">Спосіб оплати</span>
                    <div class="radiobuttons">
                        <input type="radio" id="pay" name="pay_type" style="display: none" required>
                        <div class="radiobutton-filter">
                            <input type="radio" id="cash" name="pay_type" value="Оплата готівкою">
                            <label for="pay_type">Оплата готівкою</label>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="card-offline" name="pay_type" value="Картою Visa/Master card при отримані">
                            <label for="pay_type">Картою Visa/Master card при отримані</label>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="card-online" name="pay_type" value="Картою Visa/Master card онлайн">
                            <label for="pay_type">Картою Visa/Master card онлайн</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="items">
            <span class="basket">Ваша корзина:</span>
            @foreach( $products as $index => $product)
                <div class="block2">
                    <img src={{$product->img1}}>
                    <div class="insides">
                        <div class="row1">
                            <div class="name">
                                <span class="model">Модель: </span> <span class="title1">{{$product->manufacturer}} {{$product->model}}</span>
                            </div>
                            <span class="price" id="price{{$product->id}}">{{$product->price}}₴</span>
                        </div>

                        <div class="row2">
                            <div>
                                <span>Розмір: </span> <span>{{$product->diameter}}”</span>
                            </div>
                            <div>
                                <span>Колір: </span>  <span>{{$product->color}}</span>
                            </div>
                            <div>
                                <span>Код товару: </span> <span>{{$product->id}}</span>
                            </div>
                        </div>
                        <div class="row3">
                            <form action="{{ route('cart.update') }}" method="POST">
                                {{ csrf_field() }}
                                <span id="counter{{$product->id}}">{{$counts[$index]}}</span>
                                <input type="hidden" id="id" name="id" value="{{$product->id}}">
                                <input type="hidden" id="c{{$product->id}}" name="count">
                            </form>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><img src="image/icons/garbage.svg"></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <span class="basket" style="display: flex;
          justify-content: flex-end;">Сума:
            <span id="sum">
                            @php
                                $sum=0;
                                foreach ($products as $index => $product)
                                    $sum += $product->price * $counts[$index];
                                echo "$sum";
                            @endphp
            </span>₴</span>

{{--        <div class="items">--}}
{{--            @foreach($products as $product)--}}
{{--                <div class="block2">--}}
{{--                    <img src={{$product->img1}}>--}}
{{--                    <div class="insides">--}}
{{--                        <div class="row1">--}}
{{--                            <div class="name">--}}
{{--                                <span class="model">Модель: </span> <span class="title1">{{$product->manufacturer}} {{$product->model}}</span>--}}
{{--                            </div>--}}
{{--                            <span class="price">{{$product->price}}</span>--}}
{{--                        </div>--}}

{{--                        <div class="row2">--}}
{{--                            <div>--}}
{{--                                <span>Розмір: </span> <span>{{$product->diameter}}”</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span>Колір: </span>  <span>{{$product->color}}</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span>Код товару: </span> <span>{{$product->id}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row3">--}}
{{--                            <button class="plus">+</button>--}}
{{--                            <span>1</span>--}}
{{--                            <button class="minus">-</button>--}}
{{--                            <img src="image/icons/garbage.svg">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
            <div class="for-button">
                <button type="submit" class="checkout">Оформити замовлення</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        function plusClicks(id) {
            count = document.getElementById("counter"+id).innerHTML;
            counter = parseInt(count) + 1;
            document.getElementById("counter"+id).innerHTML = counter;
            sum = parseInt(document.getElementById("sum").innerHTML) + parseInt(document.getElementById("price" + {{$product->id}}).innerHTML);
            document.getElementById("sum").innerHTML = sum;
            document.getElementById("c"+id).value = counter;
        }
        function minusClicks(id) {
            count = document.getElementById("counter"+id).innerHTML;
            if(parseInt(count) > 1){
                counter = parseInt(count) - 1;
                document.getElementById("counter"+id).innerHTML = counter;
                sum = parseInt(document.getElementById("sum").innerHTML) - parseInt(document.getElementById("price" + {{$product->id}}).innerHTML);
                document.getElementById("sum").innerHTML = sum;
                document.getElementById("c" + id).value = counter;}
        }
    </script>
@endsection
{{--            <span class="basket">Обрані товари</span>--}}
{{--            @foreach($products as $product)--}}
{{--            <div class="block2">--}}
{{--                <img src="image/bikes/bike1.png">--}}
{{--                <div class="insides">--}}
{{--                    <div class="row1">--}}
{{--                        <div class="name">--}}
{{--                            <span class="model">Модель: </span> <span class="title1">Trek Marlin 5 2020</span>--}}
{{--                        </div>--}}
{{--                        <span class="price">12999₴</span>--}}
{{--                    </div>--}}

{{--                    <div class="row2">--}}
{{--                        <div>--}}
{{--                            <span>Розмір: </span> <span>27”</span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <span>Колір: </span>  <span>black</span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <span>Код товару: </span> <span>548012</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row3">--}}
{{--                        <button class="plus">+</button>--}}
{{--                        <span>1</span>--}}
{{--                        <button class="minus">-</button>--}}
{{--                        <img src="image/icons/garbage.svg">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="block2">--}}
{{--                <img src="image/bikes/bike1.png">--}}
{{--                <div class="insides">--}}
{{--                    <div class="row1">--}}
{{--                        <div class="name">--}}
{{--                            <span class="model">Модель: </span> <span class="title1">Trek Marlin 5 2020</span>--}}
{{--                        </div>--}}
{{--                        <span class="price">12999₴</span>--}}
{{--                    </div>--}}

{{--                    <div class="row2">--}}
{{--                        <div>--}}
{{--                            <span>Розмір: </span> <span>27”</span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <span>Колір: </span>  <span>black</span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <span>Код товару: </span> <span>548012</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row3">--}}
{{--                        <button class="plus">+</button>--}}
{{--                        <span>1</span>--}}
{{--                        <button class="minus">-</button>--}}
{{--                        <img src="image/icons/garbage.svg">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
