<footer class="footer flex-col">
    <div class="info flex-row">
        <div class="clients flex-col">
            <h1>Клієнту</h1>
            <a href="{{route('go-to',['link' => 'delivery'])}}">Доставка та оплата</a>
            <a href="{{route('return')}}">Поверненння</a>
        </div>
        <div class="about flex-col">
            <h1>Про нас</h1>
            <a href="{{route('contact')}}">Контакти</a>
            <a href="{{route('news')}}">Новини</a>
        </div>
        <div class="cabinet flex-col">
            <h1>Мій кабінет</h1>
            <a href="">Аккаунт</a><!-- route('account')}} route('cart-history')}}!-->
            <a href="">Історія замовлень</a>
        </div>
    </div>
    <hr>
    <span class="cop-text">Copyright © 2021, d1nosssaur</span>
</footer>
