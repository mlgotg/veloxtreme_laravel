@extends("index")
@section('title')
    veloxtreme
@endsection
@section('main')
    <div class="block1">
        <img src="image/bike-background.png">
        <div class="rectangle">
        <span class="title1">
            ВЕЛОСЕЗОН ВІДКРИТО
        </span>
            <span class="title2">
            ЧАС ВИБИРАТИ НОВИЙ ВЕЛОСИПЕД!
        </span>
        </div>
    </div>
    <div class="hits">
        <span class="title">ХІТИ ПРОДАЖІВ</span>
        <div class="container">
            @foreach($products as $product)
                    <a class="item" href="/product/{{$product->id}}">
                        <img style="object-fit: cover" src="/{{$product->img1}}">
                        <span class="model">{{$product->manufacturer}} {{$product->model}}</span>
                        <span class="price">{{$product->price}}₴</span>
                    </a>
                @if($loop->iteration == 6)
                    @break
                @endif
            @endforeach
        </div>
        <div class="other-model">
            <a href="/store?page=1&">Інші популярні моделі  🠒</a>
        </div>
    </div>
    <div class="accessories">
        <span class="title">АКСЕСУАРИ</span>
        <div class="container">
            @foreach($accessories_types as $a_type)
                <a style="        text-decoration: none;
        color:  #283044" class="item" href="/store/{{$lnk}}/selected?page=1&type={{$a_type->type}}">
                    <img src="/{{$a_type->img1}}">
                    <span>{{$a_type->type}}</span>
                </a>
                @if($loop->iteration == 4)
                    @break
                @endif
            @endforeach
        </div>
        <div class="other-model">
            <a href="/store/accessories">Інші аксесуари  🠒</a>
        </div>
    </div>
    <div class="about-us-container">
        <div class="block">
            <span class="title">ПРО НАС</span>
            <span class="text">Наш магазин заснували люди, котрі мріють про развинуту вело-культуру в Україні. Ми хочемо,
            щоб як можна більше містян їздили на якісних велосипедах і вміли з ними поводитись. Свою роль в цій справі
            ми окреслюємо так: зробити покупку вело-товарів простою і зручною, а консультації — повними як для
            найближчих людей. Щоб пропонувати вам кращі вело-товари, ми постійно їздимо на галузеві виставки і
            презентації. Ми персонально оглядаємо «мацаємо» нові моделі, оцінюємо їх і обираємо в свій магазин тільки
            найкращі. Ми знаєм про велосипеди все. Саме цьому у нас не продаются відверто дешеві і погано вироблені
            товари — адже вони не тілько разочаровують покупців, але часто шкодять здоров'ю і бажанню кататись.
        </span>
        </div>
        <img src="image/bike-background2.png">
    </div>
    <div class="brands">
        <span class="title">ВИРОБНИКИ</span>
        <!--    <button id="slideLeft" type="button"><img src="image/strelka.svg"></button>-->
        <div class="block">
            <button class="left-paddle paddle hidden">
                <img src="image/strelka.svg">
            </button>
            <div class="container" id="container">
                <div class="menu">
                    <img class="item" src="image/brands/trek.svg">
                    <img class="item" src="image/brands/kellys.webp">
                    <img class="item" src="image/brands/ghost.svg">
                    <img class="item" src="image/brands/merida.svg">
                </div>
                <!--        <img src="image/strelka.svg" id="right-paddle" type="button">-->
            </div>
            <button class="right-paddle paddle">
                <img src="image/strelka.svg">
            </button>
        </div>
    </div>
    <script>
        // duration of scroll animation
        var scrollDuration = 300;
        // paddles
        var leftPaddle = document.getElementsByClassName('left-paddle');
        var rightPaddle = document.getElementsByClassName('right-paddle');
        // get items dimensions
        //var itemsLength = $('.item').length;
        var itemSize = $('.item').outerWidth(true);
        // get some relevant size for the paddle triggering point
        var paddleMargin = 20;

        // get wrapper width
        var getMenuWrapperSize = function() {
            return $('.container').outerWidth();
        }
        var menuWrapperSize = getMenuWrapperSize();
        // the wrapper is responsive
        $(window).on('resize', function() {
            menuWrapperSize = getMenuWrapperSize();
        });
        // size of the visible part of the menu is equal as the wrapper size
        var menuVisibleSize = menuWrapperSize;

        // get total width of all menu items
        var getMenuSize = function() {
            return 4 * itemSize;
        };
        var menuSize = getMenuSize();
        // get how much of menu is invisible
        var menuInvisibleSize = menuSize - menuWrapperSize;

        // get how much have we scrolled to the left
        var MenuPosition = 0;
        // var getMenuPosition = function() {
        //     return $('.menu').scrollX();
        // };
        // finally, what happens when we are actually scrolling the menu
        $('.menu').on('scroll', function() {

            // get how much of menu is invisible
            menuInvisibleSize = menuSize - menuWrapperSize;
            // get how much have we scrolled so far

            var menuEndOffset = 400 * Math.floor(Math.ceil(menuInvisibleSize / 400));

            // show & hide the paddles
            // depending on scroll position

            // if (menuInvisibleSize === 0){
            //     $(leftPaddle).addClass('hidden');
            //     $(rightPaddle).addClass('hidden');
            // } else if (MenuPosition < menuEndOffset) {
            //     // show both paddles in the middle
            //     $(leftPaddle).removeClass('hidden');
            //     $(rightPaddle).removeClass('hidden');
            // } else if (MenuPosition >= menuEndOffset) {
            //     $(leftPaddle).removeClass('hidden');
            //     $(rightPaddle).addClass('hidden');
            // } else if (MenuPosition <= paddleMargin) {
            //     $(leftPaddle).addClass('hidden');
            //     $(rightPaddle).removeClass('hidden');
            // }

        });

        // scroll to left
        $(rightPaddle).on('click', function() {
            $('.menu').animate( { scrollLeft: MenuPosition + 400}, scrollDuration);
            if(MenuPosition < itemSize * 4){
                MenuPosition = MenuPosition + 400;
            }
        });

        // scroll to right
        $(leftPaddle).on('click', function() {
            $('.menu').animate( { scrollLeft: MenuPosition - 400 }, scrollDuration);
            if(MenuPosition > 0) {
                MenuPosition = MenuPosition - 400;
            }
        });
    </script>
@endsection
