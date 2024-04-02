@extends('layouts.app')

@section('title-page', 'main')

@section('content')

<section class="babershop-online">
    <div class="babershop-online__block d-flex flex-column justify-content-center">
        <h1 class="babershop-online_title">Барбершоп Classic</h1>
        <h2 class="babershop-online_subtitle">Men Barbers classic</h2>
        <a href="{{ route('signup') }}" class="babershop-online__button ">записаться</a>
    </div>

</section>
<section class="about-barbershop text-center">
    <h2 class="about-barbershop__title ">В чем наши преимущества</h2>
    <p class="about-barbershop__text">Барбершоп Classic - это место, где традиции сочетаются с
        современным уходом за внешностью. Наш барбершоп предлагает
        классическую и изысканную атмосферу, где клиенты могут расслабиться
        и насладиться высококачественными услугами по уходу за собой.
        От традиционных стрижек до бритья опасной бритвой, наши опытные
        барберы обеспечивают профессиональный уход с особым вниманием к
        деталям. С фокусом на создание уютной атмосферы, барбершоп Classic
        стремится обеспечить исключительный опыт ухода за собой для каждого клиента.</p>

    <a href="{{ route('signup') }}" class="about-barbershop__button roboto-bold">ЗАПИСАТЬСЯ</a>

</section>

<section class="barbershop-services">
    <h2 class="barbershop-services__title-block">Наши услуги</h2>
    <div class="barbershop-services__wrapper">
        <div class="barbershop-services__block">
            <div class="barbershop-services__image1 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">КАМУФЛЯЖ БОРОДЫ</span><br>
                <span class="barbershop-services__price barbershop-services_white">1 600₽</span>
            </div>

        </div>
        <div class="barbershop-services__block ">
            <div class="barbershop-services__image2 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">ОФОРМЛЕНИЕ БОРОДЫ И УСОВ</span><br>
                <span class="barbershop-services__price barbershop-services_white">700₽</span>
            </div>

        </div>
        <div class="barbershop-services__block ">
            <div class="barbershop-services__image3 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">КАМУФЛЯЖ ВОЛОС</span><br>
                <span class="barbershop-services__price barbershop-services_white">от 1 600₽</span>
            </div>

        </div>
        <div class="barbershop-services__block ">
            <div class="barbershop-services__image4 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">ДЕТСКИЕ СТРИЖКИ 5-10 ЛЕТ</span><br>
                <span class="barbershop-services__price barbershop-services_white">900₽</span>
            </div>

        </div>
        <div class="barbershop-services__block ">
            <div class="barbershop-services__image5 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">КОРРЕКЦИЯ СТРИЖКИ</span><br>
                <span class="barbershop-services__price barbershop-services_white">1 200₽</span>
            </div>

        </div>
        <div class="barbershop-services__block ">
            <div class="barbershop-services__image6 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">СТРИЖКА МАШИНКОЙ</span><br>
                <span class="barbershop-services__price barbershop-services_white">700₽</span>
            </div>

        </div>
        <div class="barbershop-services__block ">
            <div class="barbershop-services__image7 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">МУЖСКИЕ СТРИЖКИ</span><br>
                <span class="barbershop-services__price barbershop-services_white">1 400₽</span>
            </div>

        </div>
        <div class="barbershop-services__block ">
            <div class="barbershop-services__image8 barbershop-services_norepeat-cover">
                <span class="barbershop-services__title barbershop-services_white">БРИТЬЕ ГОЛОВЫ</span><br>
                <span class="barbershop-services__price barbershop-services_white">1 200₽</span>
            </div>

        </div>

    </div>
    <div class="barbershop-table-prices">
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">КАМУФЛЯЖ БОРОДЫ</span>
            <span class="col barbershop-table-prices__right">1 600₽</span>
        </div>
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">ОФОРМЛЕНИЕ БОРОДЫ И УСОВ</span>
            <span class="col barbershop-table-prices__right">700₽</span>
        </div>
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">КАМУФЛЯЖ ВОЛОС</span>
            <span class="col barbershop-table-prices__right">от 1 600₽</span>
        </div>
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">ДЕТСКИЕ СТРИЖКИ 5-10 ЛЕТ</span>
            <span class="col barbershop-table-prices__right">900₽</span>
        </div>
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">КОРРЕКЦИЯ СТРИЖКИ</span>
            <span class="col barbershop-table-prices__right">1 200₽</span>
        </div>
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">СТРИЖКА МАШИНКОЙ</span>
            <span class="col barbershop-table-prices__right">700₽</span>
        </div>
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">МУЖСКИЕ СТРИЖКИ</span>
            <span class="col barbershop-table-prices__right">1 400₽</span>
        </div>
        <div class="row barbershop-table-prices__row">
            <span class="col barbershop-table-prices__left">БРИТЬЕ ГОЛОВЫ</span>
            <span class="col barbershop-table-prices__right">1 200₽</span>
        </div>
    </div>
    <a href="{{ route('price') }}" class="barbershop-services__button">все услуги</a>

</section>

<section class="barbers">
    <h2 class="barbers__title">Наши барберы</h2>
    <div id="carouselExample" class="carousel carousel-dark slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="barbers__card">
                <img class="barbers__image" src="/img/barber_man_1.jpg" alt="barber man 1">
                <div class="barbers__body">
                    <h5 class="barbers__name">Слава Стачук</h5>
                    <p class="barbers__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, natus dicta? Ut repellendus facere quaerat vel officiis odit at aliquam! Repudiandae omnis ullam aliquid accusamus quisquam perspiciatis ea quod earum!</p>
                    <a href="{{ route('signup') }}" class="barbers__button">записаться</a>
                  </div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="barbers__card">
                <img class="barbers__image" src="/img/barber_man_2.jpg" alt="barber man 1">
                <div class="barbers__body">
                    <h5 class="barbers__name">Слава Стачук</h5>
                    <p class="barbers__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, natus dicta? Ut repellendus facere quaerat vel officiis odit at aliquam! Repudiandae omnis ullam aliquid accusamus quisquam perspiciatis ea quod earum!</p>
                    <a href="{{ route('signup') }}" class="barbers__button">записаться</a>
                  </div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="barbers__card">
                <img class="barbers__image" src="/img/barber_man_3.jpg" alt="barber man 1">
                <div class="barbers__body">
                    <h5 class="barbers__name">Слава Стачук</h5>
                    <p class="barbers__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, natus dicta? Ut repellendus facere quaerat vel officiis odit at aliquam! Repudiandae omnis ullam aliquid accusamus quisquam perspiciatis ea quod earum!</p>
                    <a href="{{ route('signup') }}" class="barbers__button">записаться</a>
                  </div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="barbers__card">
                <img class="barbers__image" src="/img/barber_man_4.jpg" alt="barber man 1">
                <div class="barbers__body">
                    <h5 class="barbers__name">Слава Стачук</h5>
                    <p class="barbers__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, natus dicta? Ut repellendus facere quaerat vel officiis odit at aliquam! Repudiandae omnis ullam aliquid accusamus quisquam perspiciatis ea quod earum!</p>
                    <a href="{{ route('signup') }}" class="barbers__button">записаться</a>
                  </div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="barbers__card">
                <img class="barbers__image" src="/img/barber_man_5.jpg" alt="barber man 1">
                <div class="barbers__body">
                    <h5 class="barbers__name">Слава Стачук</h5>
                    <p class="barbers__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, natus dicta? Ut repellendus facere quaerat vel officiis odit at aliquam! Repudiandae omnis ullam aliquid accusamus quisquam perspiciatis ea quod earum!</p>
                    <a href="{{ route('signup') }}" class="barbers__button">записаться</a>
                  </div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="barbers__card">
                <img class="barbers__image" src="/img/barber_man_6.jpg" alt="barber man 1">
                <div class="barbers__body">
                    <h5 class="barbers__name">Слава Стачук</h5>
                    <p class="barbers__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, natus dicta? Ut repellendus facere quaerat vel officiis odit at aliquam! Repudiandae omnis ullam aliquid accusamus quisquam perspiciatis ea quod earum!</p>
                    <a href="{{ route('signup') }}" class="barbers__button">записаться</a>
                  </div>
            </div>

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</section>
<hr>
<section class="images-partners">
    <h2 class="images-partners__title">Партнеры</h2>
    <div class="images-partners__imgs">
        <img  src="/img/apple.png" alt="img1">
        <img  src="/img/clear.png" alt="img2">
        <img  src="/img/cibo.png" alt="img3">
        <img  src="/img/bolshoy.png" alt="img4">
    </div>
</section>
<hr>
<section class="review">
    <h2 class="review__title">Отзывы</h2>
    <div id="carouselExample1" class="carousel slide carousel-dark">
        <div class="carousel-inner">
          <div class="carousel-item active">
                <div class="review__block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg>
                    <h5 class="review__name">name user</h5>
                    <p class="review__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum obcaecati exercitationem commodi, veritatis facere voluptatem aliquam? Culpa odit similique et accusantium numquam dolor mollitia dicta, possimus, labore rerum veritatis nam?</p>
                </div>
          </div>
          <div class="carousel-item">
            <div class="review__block">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                <h5 class="review__name">name user</h5>
                <p class="review__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum obcaecati exercitationem commodi, veritatis facere voluptatem aliquam? Culpa odit similique et accusantium numquam dolor mollitia dicta, possimus, labore rerum veritatis nam?</p>
            </div>

          </div>
          <div class="carousel-item">
            <div class="review__block">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                <h5 class="review__name">name user</h5>
                <p class="review__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum obcaecati exercitationem commodi, veritatis facere voluptatem aliquam? Culpa odit similique et accusantium numquam dolor mollitia dicta, possimus, labore rerum veritatis nam?</p>
            </div>

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</section>


@endsection
