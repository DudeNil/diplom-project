@extends('layouts.app')

@section('title-page', 'barbers')

@section('content')
<section class="barbersmen">
    <h1 class="barbersmen__title">Барберы</h1>
</section>
<section class="slide-barbers">
    <div id="carouselExample" class="carousel carousel-dark slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
                <div class="slide-barbers__blocks">
                    <div class="slide-barbers__block1">

                        <img class="slide-barbers__image" src="img/barber1.jpg" alt="photo barber man"><br>
                        <span class="slide-barbers__status">мастер</span>
                        <p class="slide-barbers__name">Слава Марлоу</p>
                    </div>
                    <p class="slide-barbers__text">опытный специалист по мужским стрижкам, бритью и уходу за бородой. Он обладает уникальными навыками и техниками, включая искусство работы с машинкой и ножницами, бритьем бритвой, созданием стильной бороды, а также умением подбирать подходящие средства для ухода за волосами и кожей. Мастер барбера не только создает стильные образы для своих клиентов, но и предоставляет им возможность расслабиться и насладиться процедурами ухода, делая посещение барбершопа приятным и ухоженным опытом.</p>

                </div>

          </div>
          <div class="carousel-item">
            <div class="slide-barbers__blocks">
                <div class="slide-barbers__block1">

                    <img class="slide-barbers__image" src="img/barber1.jpg" alt="photo barber man"><br>
                    <span class="slide-barbers__status">мастер</span>
                    <p class="slide-barbers__name">Слава Марлоу</p>
                </div>
                <p class="slide-barbers__text">опытный специалист по мужским стрижкам, бритью и уходу за бородой. Он обладает уникальными навыками и техниками, включая искусство работы с машинкой и ножницами, бритьем бритвой, созданием стильной бороды, а также умением подбирать подходящие средства для ухода за волосами и кожей. Мастер барбера не только создает стильные образы для своих клиентов, но и предоставляет им возможность расслабиться и насладиться процедурами ухода, делая посещение барбершопа приятным и ухоженным опытом.</p>

            </div>

          </div>
          <div class="carousel-item">
            <div class="slide-barbers__blocks">
                <div class="slide-barbers__block1">

                    <img class="slide-barbers__image" src="img/barber1.jpg" alt="photo barber man"><br>
                    <span class="slide-barbers__status">мастер</span>
                    <p class="slide-barbers__name">Слава Марлоу</p>
                </div>
                <p class="slide-barbers__text">опытный специалист по мужским стрижкам, бритью и уходу за бородой. Он обладает уникальными навыками и техниками, включая искусство работы с машинкой и ножницами, бритьем бритвой, созданием стильной бороды, а также умением подбирать подходящие средства для ухода за волосами и кожей. Мастер барбера не только создает стильные образы для своих клиентов, но и предоставляет им возможность расслабиться и насладиться процедурами ухода, делая посещение барбершопа приятным и ухоженным опытом.</p>

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



@endsection
