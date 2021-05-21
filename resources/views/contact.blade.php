@extends("index")
@section('title')
    Контакти
@endsection
@section('head')
    <link rel="stylesheet" href="less/contact.css">
    <script src="script/map.js"></script>
@endsection
@section('contact')
    <div class="contact-wrapper">
        <div class="text-block">
            <div class="block">
                <span>Графік роботи</span>
                <pre>
Будні: 09:00 - 20:00
Субота: 10:00 - 16:00
Неділя: Вихідний</pre>
            </div>
            <div class="block">
                <span>Контакти</span>
                <pre>
+38(099)334-34-34
+38(097)334-43-43
veloXtream@gmail.com</pre>
            </div>
            <div class="block">
                <span>Соц. мережі</span>
                <pre id="social-media">
Instagram: @veloXtreme
Telegram: @veloXtreme
Fb: facebook.com/veloXtreme</pre>
                <div class="social-mob">
                    <div class="container">
                        <img src="image/social-media/instagram.svg">
                        <span>@veloXtreme</span>
                    </div>
                    <div class="container">
                        <img src="image/social-media/telegram.svg">
                        <span>@veloXtreme</span>
                    </div>
                    <div class="container">
                        <img src="image/social-media/facebook.svg">
                        <span>facebook.com/veloXtreme</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="address">
            <span class="title">Адреса:</span>
            <span class="addres"> м.Київ, вул. Освіти 18</span>
            <div id="map"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4uA398PvyXnikrfVTnvTdsulTMZ8kKiE&callback=initMap&libraries=&v=weekly"></script>
        </div>
    </div>
@endsection
