@extends("index")
@section('title')
    -
@endsection
@section('head')
    <link rel="stylesheet" href="/less/store.css">
    <link rel="stylesheet" href="/less/filters.css">
    <link rel="stylesheet" href="/less/login.css">
    <link rel="stylesheet" href="/less/search.css">
@endsection
@section('store')
    <h1>Велосипеди</h1>
    <div class="store-section">
        <div class="filter-section">
            <div class="store-header-filter">
                <div class="filter-label">
                    <img src="/image/icons/filter.svg" onclick="openFilter()">
                    <h1>Фільтри</h1>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Велосипеди</button>
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
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Ціна</button>
                <div class="content" style="display: block;">
                    <div class="price-slider">
                        <input type="text" placeholder="Від">
                        <input type="text" placeholder="До">
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Діаметр коліс</button>
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
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Виробник</button>
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
                @foreach($products as $product)
                    <div class="store-item">
                        <a href="/product/{{$product->id}}">
                            <img src="/{{$product->img1}}">
                            <div class="desc">
                                <div class="item-desc">
                                    <span class="model">{{$product->manufacturer}}</span>
                                    <div class="price-buy">
                                        <span class="price">{{$product->price}}₴</span>
                                        @if( auth()->check() )
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                                <button type="submit"><img src="/image/icons/shopping-basket.svg" ></button>
                                            </form>
                                        @else
{{--                                            <button onclick="openLogin()"><img src="/image/icons/shopping-basket.svg" ></button>--}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="pagination">
        {{$products->links('vendor/pagination/bootstrap-4')}}
    </div>
    <div id="mySidefilter" class="sidefilter">
        <div class="close-button">
            <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()">&times;</a>
        </div>
        <div class="filter-section">
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Велосипеди</button>
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
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Ціна</button>
                <div class="content" style="display: block;">
                    <div class="price-slider">
                        <input type="text" placeholder="Від">
                        <input type="text" placeholder="До">
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Діаметр коліс</button>
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
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Виробник</button>
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
    <script src="/script/collapsible.js"></script>
@endsection
