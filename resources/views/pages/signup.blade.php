@extends('layouts.app')

@section('title-page', 'sign up')

@section('content')


<h1 class="online-signup-title">Онлайн запись</h1>

<form action="" method="POST" class="online-signup">
    @csrf
    <div class="form-floating online-signup__input">
        <input type="text" class="form-control" id="name" placeholder="Имя">
        <label for="name">Имя</label>
    </div>
    <div class="form-floating online-signup__input">
        <input type="email" class="form-control" id="email" placeholder="email">
        <label for="email">Email</label>
    </div>
    <div class="form-floating online-signup__input">
        <input type="tel" class="form-control" id="phone" placeholder="phone">
        <label for="phone">Номер</label>
    </div>
    <select class="form-select form-select-lg mb-3 online-signup__input" aria-label="Large select example">
        <option selected>Выберите услугу</option>
        <option value="service1">КАМУФЛЯЖ ВОЛОС</option>
        <option value="service2">МУЖСКИЕ СТРИЖКИ</option>
        <option value="service3">ДЕТСКИЕ СТРИЖКИ 5-10 ЛЕТ</option>
        <option value="service4">СТРИЖКА МАШИНКОЙ</option>
        <option value="service5">КОРРЕКЦИЯ СТРИЖКИ</option>
        <option value="service6">ОФОРМЛЕНИЕ БОРОДЫ И УСОВ</option>
        <option value="service7">КОРОЛЕВСКОЕ БРИТЬЕ</option>
        <option value="service8">БРИТЬЕ ГОЛОВЫ</option>
        <option value="service9">УХОД</option>
        <option value="service10">КАМУФЛЯЖ БОРОДЫ</option>
        <option value="service11">ВОСК</option>
      </select>
    <select class="form-select form-select-lg mb-3 online-signup__input" aria-label="Large select example">
        <option selected>Выберите мастера</option>
        <option value="master1">Слава Марлоу</option>
        <option value="master2">Рой</option>
        <option value="master3">Святослав</option>
    </select>
    <div class="form-floating online-signup__input">
        <input type="text" class="form-control" id="datepicker" placeholder="date">
        <label for="datepicker">Дата записи</label>
    </div>
    {{-- <input type="text" id="datepicker" placeholder="data"> --}}
    <div class="radio-block">
        <p>Выберите время для записи:</p>
        <label for="radio-1">10:00 <input class="btn-radio" type="radio" name="radio-1" id="radio-1"></label>
        <label for="radio-2">12:00 <input class="btn-radio" type="radio" name="radio-1" id="radio-2"></label>
        <label for="radio-3">14:00 <input class="btn-radio" type="radio" name="radio-1" id="radio-3"></label>
        <label for="radio-4">16:00 <input class="btn-radio" type="radio" name="radio-1" id="radio-4"></label>
        <label for="radio-5">18:00 <input class="btn-radio" type="radio" name="radio-1" id="radio-5"></label>

    </div>

    <div class="text-center mt-5">
        <button class="online-signup__btn btn btn-dark" type="submit">отправить</button>
    </div>





</form>



@endsection
