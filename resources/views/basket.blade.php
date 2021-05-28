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
        @foreach($products as $product)
        <div class="block2">
            <img src={{$product->img1}}>
            <div class="insides">
                <div class="row1">
                    <div class="name">
                        <span class="model">Модель: </span> <span class="title1">{{$product->manufacturer}} {{$product->model}}</span>
                    </div>
                    <span class="price">{{$product->price}}₴</span>
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
                    <button class="plus">+</button>
                    <span>1</span>
                    <button class="minus">-</button>
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
            @php
                $sum=0;
                foreach ($products as $product)
                    $sum += $product->price;
                echo "$sum";
            @endphp₴</span>
        <div class="for-button">
            <form method="get" action="\checkout">
                <button class="checkout" type="submit">Оформити замовлення</button>
            </form>
        </div>
    </div>
@endsection
