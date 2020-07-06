@extends('layouts.app')
@section('title', 'main page')

@section('content')

<section class="form-page">
    <div class="container">
        <div class="form-page__content">
            <div class="form-page__box">
                <h1 class="form-page__title">Зарабатывай не выходя из дома просто используя приложение</h1>
                <p class="form-page__lable">Assist Online</p>
            </div>
            <div class="form-box">
                <form action="">
                    <div class="form-box__inner">
                        <div class="form-box__right">
                            <label for="name">Имя</label>
                            <input name="name" id="name" type="text">
                            <label for="age">Возраст</label>
                            <input name="age" id="age" type="text">
                            <label for="city">Город</label>
                            <input name="city" id="city" type="text">
                            <label for="specialty">Специальность</label>
                            <input name="specialty" id="specialty" type="text">
                            <label for="phone-number">Телефон</label>
                            <input name="phone-number" id="phone-number" type="text">
                        </div>
                        <div class="form-box__left">
                            <label for="first-name">Фамилия</label>
                            <input name="first-name" id="first-name" type="text">
                            <label for="gender">Пол</label>
                            <input name="gender" id="gender" type="text">
                            <label for="education">Образование</label>
                            <input name="education" id="education" type="text">
                            <label for="employment">Занятость</label>
                            <input name="employment" id="employment" type="text">
                            <label for="mail">E-mail</label>
                            <input name="mail" id="mail" type="text">
                        </div>
                    </div>
                    <button class="form-box__submit-btn" type="submit">Отправить</button>
                    <a class="form-box__terms" href="#">Политика конфидециальности</a>
                </form>
            </div>
        </div>
        {{-- <div class="form-page__circles">
            <div class="form-page__circle-1"></div>
            <div class="form-page__circle-2"></div>
        </div> --}}
    </div>
    <div class="form-page__fill-line">
        <div class="container">
            <div class="form-page-fill">Заполни анкету сейчас</div>
        </div>
    </div>

</section>

@endsection

