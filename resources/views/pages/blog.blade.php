@extends('layouts.app')

@section('title-page', 'blog')

@section('content')

<h1 class="blog-title">БЛОГ</h1>

    <ul class="nav justify-content-center ">
        <li class="nav-item">
            <a class="nav-link link-light p-4" aria-current="page" href="#1">мужские стрижки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-light p-4" href="#2">борода и усы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-light p-4" href="#3">уход за волосами</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-light p-4" href="#4">мужской стиль</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-light p-4" href="#5">для детей</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-light p-4" href="#6">прически спортменов</a>
        </li>
    </ul>

<section class="blog" >
    <div class="card blog__card">
        <img class="card-img-top" src="/img/barbersmen.jpg" alt="photo">
        <h4 class="card-title ps-3 pr-3 pt-2">Современный барбершоп: Описание и Роль в Современном Мире</h4>
        <p class="card-text ps-3 pr-3">
        Современный барбершоп – это не просто место для стрижки волос и бритья, а целый культурный феномен, объединяющий традиционные методы ухода за внешностью с современными тенденциями и стилями. Он представляет собой пространство, где мужчины могут не только получить профессиональный уход за своим внешним видом, но...</p>
            <a class="text-center m-3" href="">продолжить чтение...</a>

    </div>
    <div class="card blog__card">
        <img class="card-img-top" src="/img/barbersmen.jpg" alt="photo">
        <h4 class="card-title ps-3 pr-3 pt-2">Секретные Техники Барберов</h4>
        <p class="card-text ps-3 pr-3">
            Барберы - это мастера своего дела, которые обладают уникальными техниками и навыками, позволяющими создавать идеальные стрижки и ухаживать за бородой. Вот некоторые из "секретных" техник, которыми владеют опытные барберы:...</p>
            <a class="text-center m-3" href="">продолжить чтение...</a>

    </div>
    <div class="card blog__card">
        <img class="card-img-top" src="/img/title1.jpg" alt="photo">
        <h4 class="card-title ps-3 pr-3 pt-2">Современный барбершоп: Описание и Роль в Современном Мире</h4>
        <p class="card-text ps-3 pr-3">
        Современный барбершоп – это не просто место для стрижки волос и бритья, а целый культурный феномен, объединяющий традиционные методы ухода за внешностью с современными тенденциями и стилями. Он представляет собой пространство, где мужчины могут не только получить профессиональный уход за своим внешним видом, но...</p>
            <a class="text-center m-3" href="">продолжить чтение...</a>

    </div>
    <div class="card blog__card">
        <img class="card-img-top" src="/img/title2.jpg" alt="photo">
        <h4 class="card-title ps-3 pr-3 pt-2">Секретные Техники Барберов</h4>
        <p class="card-text ps-3 pr-3">
            Барберы - это мастера своего дела, которые обладают уникальными техниками и навыками, позволяющими создавать идеальные стрижки и ухаживать за бородой. Вот некоторые из "секретных" техник, которыми владеют опытные барберы:...</p>
            <a class="text-center m-3" href="">продолжить чтение...</a>

    </div>


</section>


@endsection
