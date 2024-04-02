@extends('layouts.app')

@section('title-page', 'price')

@section('content')

<h1 class="price-title">ЦЕНА ВОПРОСА</h1>

<section class="prices">
    <div class="prices__block">
        <span class="prices__title">КАМУФЛЯЖ ВОЛОС</span>
        <p class="prices__text">Камуфляж волос - это процедура, которая помогает скрыть седину
            и придать волосам более естественный вид.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>
    <div class="prices__block">
        <span class="prices__title">МУЖСКИЕ СТРИЖКИ</span>
        <p class="prices__text">Мужская стрижка - это процедура, направленная на создание стильного
            и ухоженного внешнего вида мужских волос.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 400</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>

    <div class="prices__block">
        <span class="prices__title">ДЕТСКИЕ СТРИЖКИ 5-10 ЛЕТ</span>
        <p class="prices__text">Детские стрижки представляют собой специализированную услугу по стрижке и
            уходу за волосами детей в возрасте от 5 до 10 лет.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>
    <div class="prices__block">
        <span class="prices__title">СТРИЖКА МАШИНКОЙ</span>
        <p class="prices__text">Стрижка машинкой - это процедура стрижки волос с использованием специальной машинки, которая позволяет создать короткую и аккуратную стрижку.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>

    <div class="prices__block">
        <span class="prices__title">КОРРЕКЦИЯ СТРИЖКИ</span>
        <p class="prices__text">Коррекция стрижки - это процедура, направленная на поддержание формы и длины прически, а также исправление недочетов после предыдущей стрижки. </p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>
    <div class="prices__block">
        <span class="prices__title">ОФОРМЛЕНИЕ БОРОДЫ И УСОВ</span>
        <p class="prices__text">Оформление бороды и усов - это процедура, направленная на создание стильного и ухоженного внешнего вида бороды и усов. </p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>

    <div class="prices__block">
        <span class="prices__title">КОРОЛЕВСКОЕ БРИТЬЕ</span>
        <p class="prices__text">Королевское бритье - это роскошная и утонченная услуга</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>
    <div class="prices__block">
        <span class="prices__title">БРИТЬЕ ГОЛОВЫ</span>
        <p class="prices__text">Бритье головы - это процедура, призванная обеспечить клиентам идеально гладкую и ухоженную лысину.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>

    <div class="prices__block">
        <span class="prices__title">УХОД</span>
        <p class="prices__text">это роскошные процедуры, предназначенные специально для мужчин, которые включают в себя уход за волосами, бородой, кожей лица и расслабляющие массажи.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>
    <div class="prices__block">
        <span class="prices__title">КАМУФЛЯЖ БОРОДЫ</span>
        <p class="prices__text">Камуфляж бороды - это создание эффекта плотной и ухоженной бороды с использованием специальных косметических продуктов.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>

    <div class="prices__block">
        <span class="prices__title">ВОСК</span>
        <p class="prices__text">Восковая депиляция - это процедура удаления волос с использованием специального воска для достижения гладкой кожи.</p>
        <p class="prices__cost">цена: <span class="prices__costR">1 600</span></p><br>
        <a href="{{ route('signup') }}" class="prices__button">записаться на услугу</a>
    </div>



</section>



@endsection
