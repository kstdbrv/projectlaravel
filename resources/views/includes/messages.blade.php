
 {{-- выводим успех валидации формы --}}
 @if(session('success'))
 <div class="alert-success">
    <ul>
        <li class="alert-success__message">{{ session ('success') }}</li>
        <li><div class="profile__delete alert-success__close"></div></li>
    </ul>
 </div>
@endif


