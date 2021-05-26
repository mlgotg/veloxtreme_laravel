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
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.4348112365847!2d30.46670790572472!3d50.42395786677653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cec7ff162265%3A0x583a7f73464b8172!2z0YPQuy4g0J_RgNC-0YHQstC10YnQtdC90LjRjywgMTgsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1621851756175!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
         </div>
    </div>
@endsection
