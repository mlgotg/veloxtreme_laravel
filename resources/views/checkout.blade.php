@extends("index")
@section('title')
    Корзина
@endsection
@section('checkout')
    <div class="body-wrap">
        <div class="block-1">
            <span class="checkout-title">Оформлення замовлення</span>
            <div class="row2">
                <span class="your-contacts">Ваші контактні дані</span>
                <span class="login-button" onclick="openLogin()">Увійти в аккаунт</span>
            </div>
            <div class="login-body">
                <div class="login-info">
                    <label for="uname">Ім'я</label>
                    <input type="text" placeholder="Введіть ім'я" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Прізвище</label>
                    <input type="text" placeholder="Введіть прізвище" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">По-батькові</label>
                    <input type="text" placeholder="Введіть по-батькові" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Номер телефону</label>
                    <input type="text" placeholder="Введіть номер телефону" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Email</label>
                    <input type="text" placeholder="Введіть Email" name="uname" required>
                </div>
                <div class="login-info">
                    <label for="uname">Коментар</label>
                    <input type="text" placeholder="Введіть коментар" name="uname" required>
                </div>
                <div class="variant-of-delivery">
                    <span class="delivery-title">Спосіб доставки</span>
                    <div class="radiobuttons">
                        <input type="radio" id="delivery" name="delivery" style="display: none">
                        <div class="radiobutton-filter">
                            <input type="radio" id="by-self" name="delivery">
                            <label for="delivery">Самовивіз з магазину</label>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="courier" name="delivery">
                            <label for="delivery">Кур’єром</label>
                            <div class="login-info">
                                <label for="uname">Ваша адреса</label>
                                <input type="text" name="uname" required>
                            </div>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="nova-poshta" name="delivery">
                            <label for="delivery">Нова пошта</label>
                            <div class="login-info">
                                <label for="uname">Номер віділення та місто</label>
                                <input type="text" name="uname" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="variant-of-pay">
                    <span class="pay-title">Спосіб оплати</span>
                    <div class="radiobuttons">
                        <input type="radio" id="pay" name="pay" style="display: none">
                        <div class="radiobutton-filter">
                            <input type="radio" id="cash" name="pay">
                            <label for="delivery">Оплата готівкою</label>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="card-offline" name="pay">
                            <label for="delivery">Картою Visa/Master card при отримані</label>
                        </div>
                        <div class="radiobutton-filter">
                            <input type="radio" id="card-online" name="pay">
                            <label for="delivery">Картою Visa/Master card онлайн</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="items">
            <span class="basket">Обрані товари</span>
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
    </div>
@endsection
