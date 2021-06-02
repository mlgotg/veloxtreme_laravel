@extends("index")
@section('title')
    Заказ
@endsection
@section('head')
    <link rel="stylesheet" href="less/basket.css">
@endsection
@section('submit')
{{--    <h2 style="position: center; margin: 2vw 0 2vw 6vw; "></h2>--}}
    <h1 style="position: center; margin: 4vw 0 2vh 6vw; ">{{auth()->user()->name}}, ваш заказ прийнято</h1>
    <h2 style="position: center; margin: 3vw 0 1vh 6vw; ">Замовлення №{{$order->id}}: </h2>
<div class="items" style="min-height: 80vh; margin-top: 30px">
@foreach( $products as $index => $product)
    <div class="block2" style="margin-bottom: 20px; margin-top: 0px;">
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
                </form>
            </div>
        </div>
    </div>

@endforeach
</div>
@endsection
