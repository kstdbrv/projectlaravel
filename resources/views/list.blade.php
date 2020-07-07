@foreach ($data as $element)

    <section class="list">
        <div class="container">
            <div class="profile">
                <ul>
                    <li class="profile__fild">
                        <div class="profile__number">{{ $element->id }}</div>
                    </li>
                    <li class="profile__name">{{ $element->name }}</li>
                    <li class="profile__city">{{ $element->city }}</li>
                    <li class="profile__age">{{ $element->age }}</li>
                    <li class="profile__specialty">{{ $element->specialty }}</li>
                    <li><a class="profile__write" href="#">Написать</a></li>
                    <li><a class="profile__call" href="#">Позвонить</a></li>
                </ul>
            </div>
        </div>
    </section>

@endforeach

{{-- <div class="profile">
    <ul>
        <li class="profile__fild">
            <div class="profile__number">365</div>
        </li>
        <li class="profile__name">Алексей Коровкин</li>
        <li class="profile__city">Череповец</li>
        <li class="profile__age">25 лет</li>
        <li class="profile__specialty">Переводчик</li>
        <li><a class="profile__write" href="#">Написать</a></li>
        <li><a class="profile__call" href="#">Позвонить</a></li>
    </ul>
</div>
<div class="profile">
    <ul>
        <li class="profile__fild">
            <div class="profile__number">365</div>
        </li>
        <li class="profile__name">Алексей Коровкин</li>
        <li class="profile__city">Череповец</li>
        <li class="profile__age">25 лет</li>
        <li class="profile__specialty">Переводчик</li>
        <li><a class="profile__write" href="#">Написать</a></li>
        <li><a class="profile__call" href="#">Позвонить</a></li>
    </ul>
</div> --}}





