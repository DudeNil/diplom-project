@extends('layouts.app')

@section('title-page', 'contacts')

@section('content')

<h1 class="contacts_title">Контакты</h1>

<section class="contacts-map">
    <div style="position:relative;overflow:hidden;">
        <a href="https://yandex.ru/maps/54/yekaterinburg/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Екатеринбург</a>
        <a href="https://yandex.ru/maps/54/yekaterinburg/house/ulitsa_mamina_sibiryaka_102/YkkYcAZpSkYHQFtsfXRydXVnYA==/?ll=60.627359%2C56.833670&utm_medium=mapframe&utm_source=maps&z=14.36" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Мамина-Сибиряка, 102 — Яндекс Карты</a>
        <iframe class="contacts-map-frame" src="https://yandex.ru/map-widget/v1/?ll=60.627359%2C56.833670&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjA4NjA2NxJ-0KDQvtGB0YHQuNGPLCDQodCy0LXRgNC00LvQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCV0LrQsNGC0LXRgNC40L3QsdGD0YDQsywg0YPQu9C40YbQsCDQnNCw0LzQuNC90LAt0KHQuNCx0LjRgNGP0LrQsCwgMTAyIgoNM3pyQhX7VmNC&z=14.36"  frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
    </div>
</section>
<section class="contacts">
    <div class="contacts__nomers">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg> +7 000 000 00-00</p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg> +7 000 000 00-00</p>
    </div>
    <div class="contacts__e-email">
        <p>barber-classic@mail.ru</p>
    </div>
    <div class="contacts__timework">
        <p>Работаем для вас ежедневно с 09:00 до 23:00</p>
        <p>620075, Екатеринбург, Мамина-Сибиряка 102</p>

    </div>

</section>


@endsection
