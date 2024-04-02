@extends('layouts.app')

@section('title-page', 'about')

@section('content')

    <section class="about-us">
        <h1 class="about-us__title">Кто мы</h1>
    </section>
    <section class="about-nav-list">
        <ul class="nav nav-tabs justify-content-center bg-light p-0 mt-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active about-btn" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">о главном</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link about-btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">история
                    создания</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link about-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">достижения</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner spinner-block ">
                        <div class="carousel-item active background-image-fon1 adaptive-bg  text-center">
                          <h2 class="h3">Миссия</h2>
                          <p class="text">Мы команда единомышленников, ценящая свою историю и сохраняющая самобытность,
                            стремящаяся за счет своего профессионализма делать мир лучше и вдохновлять, предоставляя гостям
                            услуги и сервис высшего качества.</p>

                        </div>
                        <div class="carousel-item background-image-fon2 adaptive-bg  text-center">
                          <h3 class="h3">Принципы</h3>
                          <p class="text">Наши принципы это честность и открытость, мы стремимся к постоянному развитию команды.
                          Качество оказываемых услуг и высокий уровень сервиса являются неотъемлемой частью нашей работы.
                          Мы трудолюбивы и внимательны к каждой детали, что позволяет нам добиваться заслуженного уважения наших гостей.
                          Последовательность и приверженность нашим принципам позволяет смело принимать ответственность за результат.</p>
                        </div>
                        <div class="carousel-item background-image-fon3 adaptive-bg  text-center">
                          <h3 class="h3">Ценности</h3>
                          <p class="text">Люди, на деле демонстрирующие принципиальность, уважение и коллективный дух.
                            Люди, полные энергии, энтузиазма и смелости, необходимой настоящим лидерам.
                            Люди, которые строят отношения на основе правильных поступков.
                          </p>

                        </div>
                        <div class="carousel-item background-image-fon4 adaptive-bg  text-center">
                          <h3 class="h3">Цели</h3>
                          <p class="text">Непрерывно развивать мастерство и укреплять стремления всех членов
                            команды, раскрывая индивидуальные преимущества и способности каждого.
                            Формировать лучшие пространства для отдыха и общения людей,
                            создавать особенную атмосферу, нацеленную на комфорт всех гостей.
                          </p>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="tab-pane fade container" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                tabindex="0">
                <div class="classic-block d-flex justify-content-center mt-5 mb-5">
                    <img src="/img/two-men-foundater.jpg" alt="two man" class="classic__photo">
                </div>

                <h3>Основатели барбершопа "Классик" в Екатеринбурге</h3>
                <p>В городе Екатеринбурге, барбершоп "Классик" был основан двумя мужчинами - Иваном Петровым и Алексеем
                    Смирновым. Оба основателя имеют богатый опыт работы в индустрии мужской красоты и стиля, что вдохновило
                    их на создание уникального места, где мужчины могут получить качественные услуги по стрижке, бритью и
                    уходу за внешностью в дружественной атмосфере.</p>
                <h3>Идея и создание барбершопа "Классик"</h3>
                <p>Идея открыть барбершоп родилась у Ивана и Алексея из их страсти к мужской моде и стрижкам. Оба мужчины
                    заметили недостаток качественных заведений, специализирующихся исключительно на мужских услугах в их
                    городе. Они решили заполнить этот пробел, создав уютное пространство, где мужчины могут расслабиться и
                    получить первоклассное обслуживание.</p>
                <h3>Достижения и планы на будущее</h3>
                <p>С момента открытия "Классик" стал популярным местом среди ценителей качественной стрижки и бритья. Иван и
                    Алексей постоянно стремятся к улучшению своего бизнеса. Они планируют расширить спектр услуг, внедрить
                    новые технологии и продукты для ухода за волосами и кожей лица, а также расширить свою клиентскую базу
                    через активное продвижение в социальных сетях и сотрудничество с другими брендами.</p>
                <h3>Развитие бизнеса</h3>
                <p>Для развития бизнеса в будущем, основатели "Классик" планируют:</p>
                <ul class="classic-list">
                    <li>Расширить команду профессиональных барберов и стилистов</li>
                    <li>Внедрить программы лояльности для постоянных клиентов</li>
                    <li>Организовать мастер-классы и специальные мероприятия для привлечения новых клиентов</li>
                    <li>Расширить пространство салона и добавить дополнительные услуги, такие как массаж или уход за ногтями
                    </li>
                </ul>

                <p>
                    Благодаря преданности своей идее и стремлению к постоянному улучшению, Иван и Алексей намерены
                    продолжать развивать "Классик" как ведущий барбершоп в городе Екатеринбурге.</p>
            </div>
            <div class="tab-pane fade container text-center" id="contact-tab-pane" role="tabpanel"
                aria-labelledby="contact-tab" tabindex="0">
                <div class="row m-5">
                    <div class="col tab-font-size">КОЛИЧЕСТВО БАРБЕРОВ СЕТИ КОНТОРА</div>
                    <div class="col tab-fons-size-yellow">37</div>
                </div>
                <div class="row m-5">
                    <div class="col tab-font-size">КЛИЕНТОВ СТАНОВЯТСЯ ПОСТОЯННЫМИ</div>
                    <div class="col tab-fons-size-yellow">80%</div>
                </div>
                <div class="row m-5">
                    <div class="col tab-font-size">ДОВЕРЯЮТ НАМ СВОИХ МАЛЫШЕЙ</div>
                    <div class="col tab-fons-size-yellow">53%</div>
                </div>
                <div class="row m-5">
                    <div class="col tab-font-size">ПРИХОДЯТ ПО РЕКОМЕНДАЦИИ ДРУГА</div>
                    <div class="col tab-fons-size-yellow">37%</div>
                </div>
                <div class="row m-5">
                    <div class="col tab-font-size">ВОЗРАСТ САМОГО МАЛЕНЬКОГО КЛИЕНТА</div>
                    <div class="col tab-fons-size-yellow">8 месяцев</div>
                </div>
                <div class="row m-5">
                    <div class="col tab-font-size">СРЕДНИЙ ЧЕК</div>
                    <div class="col tab-fons-size-yellow">1000 ₽</div>
                </div>
                <div class="row m-5">
                    <div class="col tab-font-size">КОЛИЧЕСТВО ТОЧЕК СЕТИ</div>
                    <div class="col tab-fons-size-yellow">2</div>
                </div>
                <div class="row m-5">
                    <div class="col tab-font-size">КОЛИЧЕСТВО ГОРОДОВ ПРИСУТСТВИЯ</div>
                    <div class="col tab-fons-size-yellow">1</div>
                </div>

            </div>

        </div>
    </section>


@endsection
