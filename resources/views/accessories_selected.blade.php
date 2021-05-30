@extends("index")
@section('title')
    {{$_GET['type']}}
@endsection
@section('head')
    <link rel="stylesheet" href="/less/store.css">
    <link rel="stylesheet" href="/less/filters.css">
    <link rel="stylesheet" href="/less/login.css">
    <link rel="stylesheet" href="/less/search.css">
@endsection
@section('store')
    <h1>{{$_GET['type']}}</h1>
    <div class="store-section">
        <div class="filter-section">
            <div class="store-header-filter">
                <div class="filter-label">
                    <img src="/image/icons/filter.svg" onclick="openFilter()">
                    <h1>Фільтри</h1>
                </div>
            </div>
            <div class="filter-section">
                <div class="filters">
                    <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Ціна</button>
                    <div class="content" style="display: block;">
                        <div class="price-slider">
                            <input type="text" name="price" placeholder="Від" value="{{isset($_GET['price']) ? (count(explode(' ', $_GET['price'])) > 1 ? explode(' ', $_GET['price'])[0] : 0) : null}}">
                            <input type="text" name="price" placeholder="До" value="{{isset($_GET['price']) ? (count(explode(' ', $_GET['price'])) > 1 ? explode(' ', $_GET['price'])[1] : 100000) : null}}">
                        </div>
                    </div>
                </div>
                <div class="filters">
                    <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Колір</button>
                    <div class="content" style="display: block;">
                        @foreach($colors as $type)
                            @foreach($type as $col_id => $col_val)
                                <div class="checkbox-filter p_x">
                                    <input type="checkbox" name="{{$col_id}}" value="{{$col_val}}" {{isset($_GET[$col_id]) ? (str_contains($_GET[$col_id], $col_val) ? "checked" : "") : ""}}>
                                    <label>{{$col_val}}</label>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="filters">
                    <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Виробник</button>
                    <div class="content" style="display: block;">
                        @foreach($manufacturers as $type)
                            @foreach($type as $col_id => $col_val)
                                <div class="checkbox-filter p_x">
                                    <input type="checkbox" name="{{$col_id}}" value="{{$col_val}}" {{isset($_GET[$col_id]) ? (str_contains($_GET[$col_id], $col_val) ? "checked" : "") : ""}}>
                                    <label>{{$col_val}}</label>
                                </div>
                            @endforeach
                        @endforeach
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
                @foreach($accessories as $accessory)
                    <div class="store-item">
                        <a href="/product/{{$accessory->id}}">
                            <img src="/{{$accessory->img1}}">
                            <div class="desc">
                                <div class="item-desc">
                                    <span class="model">{{$accessory->manufacturer}}</span>
                                    <div class="price-buy">
                                        <span class="price">{{$accessory->price}}₴</span>
                                        @if( auth()->check() )
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $accessory->id }}" id="id" name="id">
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
        {{$accessories->links('vendor/pagination/bootstrap-4')}}
    </div>
    <div id="mySidefilter" class="sidefilter">
        <div class="close-button">
            <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()">&times;</a>
        </div>
        <div class="filter-section">
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Ціна</button>
                <div class="content" style="display: block;">
                    <div class="price-slider">
                        <input type="text" name="price" placeholder="Від" value="{{isset($_GET['price']) ? (count(explode(' ', $_GET['price'])) > 1 ? explode(' ', $_GET['price'])[0] : 0) : null}}">
                        <input type="text" name="price" placeholder="До" value="{{isset($_GET['price']) ? (count(explode(' ', $_GET['price'])) > 1 ? explode(' ', $_GET['price'])[1] : 100000) : null}}">
                    </div>
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Колір</button>
                <div class="content" style="display: block;">
                    @foreach($colors as $type)
                        @foreach($type as $col_id => $col_val)
                            <div class="checkbox-filter p_x">
                                <input type="checkbox" name="{{$col_id}}" value="{{$col_val}}" {{isset($_GET[$col_id]) ? (str_contains($_GET[$col_id], $col_val) ? "checked" : "") : ""}}>
                                <label>{{$col_val}}</label>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="filters">
                <button type="button" class="collapsible active"><img class="arrow" src="/image/icons/down-arrow.svg">Виробник</button>
                <div class="content" style="display: block;">
                    @foreach($manufacturers as $type)
                        @foreach($type as $col_id => $col_val)
                            <div class="checkbox-filter p_x">
                                <input type="checkbox" name="{{$col_id}}" value="{{$col_val}}" {{isset($_GET[$col_id]) ? (str_contains($_GET[$col_id], $col_val) ? "checked" : "") : ""}}>
                                <label>{{$col_val}}</label>
                            </div>
                        @endforeach
                    @endforeach
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
    <script>
        var activePage = new URLSearchParams(window.location.search).get('page')
        var url = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search + '&'
        var checkboxFilters = document.getElementsByClassName("checkbox-filter p_x")
        for(let i = 0; i < checkboxFilters.length; i++) {
            checkboxFilters[i].firstElementChild.addEventListener("click", function () {
                if(checkboxFilters[i].firstElementChild.checked) {
                    if(i < checkboxFilters.length / 2) {
                        checkboxFilters[i + checkboxFilters.length / 2].firstElementChild.checked = true
                    }
                    else if(i > checkboxFilters.length / 2) {
                        checkboxFilters[i - checkboxFilters.length / 2].firstElementChild.checked = true
                    }
                    if(url.includes(checkboxFilters[i].firstElementChild.getAttribute("name"))) {
                        let j = url.indexOf(checkboxFilters[i].firstElementChild.getAttribute("name"))
                        for(j; j < url.length; j++) {
                            if(url.charAt(j) === '&') {
                                url = (url.slice(0, j) + '+' + checkboxFilters[i].firstElementChild.getAttribute("value") + url.slice(j));
                                break;
                            }
                        }
                    }
                    else {
                        url += checkboxFilters[i].firstElementChild.getAttribute("name") + '=' + checkboxFilters[i].firstElementChild.getAttribute("value") + "&";
                    }
                }
                else {
                    if(i < checkboxFilters.length / 2) {
                        checkboxFilters[i + checkboxFilters.length / 2].firstElementChild.checked = false
                    }
                    else if(i > checkboxFilters.length / 2) {
                        checkboxFilters[i - checkboxFilters.length / 2].firstElementChild.checked = false
                    }
                    if(url.includes('+' + checkboxFilters[i].firstElementChild.getAttribute("value"))) {
                        url = url.replace('+' + checkboxFilters[i].firstElementChild.getAttribute("value"), "")
                    }
                    else if(url.includes('=' + checkboxFilters[i].firstElementChild.getAttribute("value")) + '+') {
                        url = url.replace('=' + checkboxFilters[i].firstElementChild.getAttribute("value") + '+', "=")
                    }
                    else if(url.includes('=' + checkboxFilters[i].firstElementChild.getAttribute("value"))) {
                        url = url.replace('=' + checkboxFilters[i].firstElementChild.getAttribute("value"), "=")
                    }
                    if(url.includes(checkboxFilters[i].firstElementChild.getAttribute("name") + '=' + checkboxFilters[i].firstElementChild.getAttribute("value"))) {
                        url = url.replace(checkboxFilters[i].firstElementChild.getAttribute("name") + '=' + checkboxFilters[i].firstElementChild.getAttribute("value") + '&', "")
                    }
                }
                url = url.replace("&&", "&")
                window.history.pushState({ path: url }, '', url);
                var links = document.getElementsByClassName("page-link")
                for(let m = 0; m < links.length; m++) {
                    links[m].href = url.replace("page=" + activePage, "page=" + m + '&')
                }
                document.location.reload()
            })
        }
        var p = document.getElementsByClassName("price-slider")
        var prices = [p[0].firstElementChild, p[0].lastElementChild, p[1].firstElementChild, p[1].lastElementChild]
        for(let i = 0; i < prices.length; i++) {
            prices[i].addEventListener("change", function () {
                if(prices[i].value) {
                    if(i < prices.length / 2) {
                        prices[i + prices.length / 2].value = prices[i].value
                    }
                    else if(i > prices.length / 2) {
                        prices[i - prices.length / 2].value = prices[i].value
                    }
                    if(url.includes(prices[i].name) && (prices[i] === p[0].firstElementChild || prices[i] === p[1].firstElementChild)) {
                        let j = url.indexOf(prices[i].name)
                        let c = url.indexOf('+', j)
                        url = (url.slice(0, j) + prices[i].name + '=' + prices[i].value + url.slice(c));
                    }
                    else if(url.includes(prices[i].name) && (prices[i] === p[0].lastElementChild || prices[i] === p[1].lastElementChild)) {
                        let j = url.indexOf(prices[i].name)
                        let r = url.indexOf('+', j)
                        let c = url.indexOf('&', j)
                        url = (url.slice(0, r) + '+' + prices[i].value + url.slice(c));
                    }
                    else {
                        url += prices[i].name + '=';
                        if(prices[i] === p[0].firstElementChild || prices[i] === p[1].firstElementChild) {
                            url += prices[i].value + '+100000&'
                        }
                        else if(prices[i] === p[0].lastElementChild || prices[i] === p[1].lastElementChild) {
                            url += '0' + '+' + prices[i].value + '&'
                        }
                    }
                }
                else if(prices[i].value === "") {
                    if(url.includes(prices[i].name) && (prices[i] === p[0].firstElementChild || prices[i] === p[1].firstElementChild)) {
                        let j = url.indexOf(prices[i].name)
                        let c = url.indexOf('+', j)
                        url = (url.slice(0, j) + prices[i].name + '=' + 0 + url.slice(c));
                    }
                    else if(url.includes(prices[i].name) && (prices[i] === p[0].lastElementChild || prices[i] === p[1].lastElementChild)) {
                        let j = url.indexOf(prices[i].name)
                        let r = url.indexOf('+', j)
                        let c = url.indexOf('&', j)
                        url = (url.slice(0, r) + '+' + 100000 + url.slice(c));
                    }
                }
                url = url.replace("&&", "&")
                window.history.pushState({ path: url }, '', url);
                var links = document.getElementsByClassName("page-link")
                for(let m = 0; m < links.length; m++) {
                    links[m].href = url.replace("page=" + activePage, "page=" + m + '&')
                }
                document.location.reload()
            })
        }
    </script>
    <script src="/script/collapsible.js"></script>
@endsection
