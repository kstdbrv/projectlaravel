<section class="list">
    <div class="container">
        <div class="list__inner">
            @foreach ($data as $element)
            <div class="profile item-to-delete">
                <ul>
                    <li class="profile__fild">
                        <div class="profile__number">{{ $element ->id }}</div>
                    </li>
                    <li class="profile__name">{{ $element ->name }}</li>
                    <li class="profile__city">{{ $element ->city }}</li>
                    <li class="profile__age">{{ $element ->age }}</li>
                    <li class="profile__specialty">{{ $element ->specialty }}</li>
                    <li><a data-fancybox data-src="#modal-2" href="javascript:;" class="profile__write" href="#">Написать</a></li>
                    <li><a data-fancybox data-src="#modal-1" href="javascript:;" class="profile__call" href="#">Позвонить</a></li>
                    <li><div class="profile__delete delete-item"></div></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>
