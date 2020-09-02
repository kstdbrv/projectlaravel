

 {{-- выводим успех валидации формы --}}
 @if(session('success'))

 <div class="alert-success item-to-delete">
    <ul>
        <li class="alert-success__message">{{ session ('success') }}</li>
        <li><div class="alert-success__delete delete-item"></div></li>
    </ul>
 </div>

@endif


