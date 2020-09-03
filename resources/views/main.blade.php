@extends('layouts.app')
@section('title', 'Assists Online')

@section('content')
<section class="form-page">
    <div class="container">
      <div class="form-page__wrapper">
        <div class="form-page__box">
            <h1 class="form-page__title">Зарабатывай не выходя из дома просто используя приложение</h1>
            <p class="form-page__lable">Assist Online</p>
            <div class="form-box">
                <form action="{{ route('data-form') }}" method="POST">
                    @csrf
                    <div class="form-box__inner">
                        <div class="form-box__right">
                            <label for="name">Имя</label>
                            <input name="name" id="name" type="text">
                            <label for="age">Возраст</label>
                            <input name="age" id="age" type="number">
                            <label for="city">Город</label>
                            <input name="city" id="city" type="text">
                            <label for="specialty">Специальность</label>
                            <input name="specialty" id="specialty" type="text">
                            <label for="phone_number">Телефон</label>
                            <input name="phone_number" id="phone_number" type="tel">
                        </div>
                        <div class="form-box__left">
                            <label for="surname">Фамилия</label>
                            <input name="surname" id="surname" type="text">
                            <label for="gender">Пол</label>
                            <select class="select-style" name="gender" id="gender">
                              <option value="М">М</option>
                              <option value="Ж">Ж</option>
                            </select>
                            <label for="education">Образование</label>
                            <input name="education" id="education" type="text">
                            <label for="employment">Занятость</label>
                            <input name="employment" id="employment" type="text">
                            <label for="email">E-mail</label>
                            <input name="email" id="email" type="email">
                        </div>
                    </div>
                    {{-- выводим ошибки при валидации формы --}}
                    @if($errors->any())
                    <div class="alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li class="alert-danger__message">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <button class="form-box__submit-btn" type="submit">Отправить</button>
                    <a class="form-box__terms" href="#">Политика конфидециальности</a>
                </form>
            </div>
        </div>
        <img class="form-page__phone" src="{{ asset('images/phone.png') }}" alt="phone">
     </div>
    </div>
    <div class="form-page__fill-line">
        <div class="container">
            <div class="form-page-fill">Заполни анкету сейчас</div>
        </div>
    </div>
</section>

<section class="list">
    <div class="container">
        <div class="list__inner">
            @foreach ($data as $element)
            <div class="profile item-to-delete">
                <ul class="profile__list">
                    <li class="profile__item"><div class="profile__number">{{ $element ->id }}</div></li>
                    <li class="profile__item">
                        <div class="profile__name">{{ $element ->name }}</div>
                        <div class="profile__surname">{{ $element ->surname }}</div>
                    </li>
                    <li class="profile__item"><div class="profile__city">{{ $element ->city }}</div></li>
                    <li class="profile__item"><div class="profile__age">{{ $element ->age }}</div></li>
                    <li class="profile__item"><div class="profile__specialty">{{ $element ->specialty }}</div></li>
                    <li class="profile__item"><a class="profile__write" data-fancybox data-src="#modal-2" href="javascript:;" href="#">Написать</a></li>
                    <li class="profile__item"><a class="profile__call" data-fancybox data-src="#modal-1" href="javascript:;" href="#">Позвонить</a></li>
                    <li class="profile__item"><div class="profile__delete delete-item"></div></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div id="modal-1">
    <div class="modal__inner">
        <div class="modal__name">{{ $element ->name }}</div>
        <div class="modal__phone">{{ $element ->phone_number }}</div>
    </div>
</div>
<div id="modal-2">
    <form action="{{ route('data-text') }}" method="POST">
        @csrf
        <label>Введите сообщение
        <textarea name="modal__text" class="modal__text"></textarea>
        </label>
        <input type="submit" value="Отправить">
    </form>
</div>

@endsection







