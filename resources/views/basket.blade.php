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
                            <button class="plus"  onclick="plusClicks({{$product->id}})">+</button>
                            <span id="counter{{$product->id}}">{{$counts[$index]}}</span>
                            <input type="hidden" id="id" name="id" value="{{$product->id}}">
                            <input type="hidden" id="c{{$product->id}}" name="count">
                            <button class="minus" onclick="minusClicks({{$product->id}})">-</button>
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
                if(parseInt(count) >= 2){
                    counter = parseInt(count) - 1;
                    document.getElementById("counter"+id).innerHTML = counter;
                    sum = parseInt(document.getElementById("sum").innerHTML) - parseInt(document.getElementById("price" + {{$product->id}}).innerHTML);
                    document.getElementById("sum").innerHTML = sum;
                    document.getElementById("c" + id).value = counter;
                }
            }
        </script>
        <div class="for-button">
            <form method="get" action="\checkout">
                <button class="checkout" type="submit">Оформити замовлення</button>
            </form>
        </div>
    </div>

@endsection
