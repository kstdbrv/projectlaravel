<section class="list">
    <div class="container">
        <div class="list__inner">
            @foreach ($data as $element)
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
            @endforeach
        </div>
    </div>
</section>
@endsection
