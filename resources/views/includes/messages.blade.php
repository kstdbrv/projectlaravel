{{-- выводим ошибки при валидации формы --}}
@if($errors->any())

  <div class="alert alert-danger">
   <ul>
    @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
   </ul>

  </div>

@endif

{{-- выводим успех валидации формы --}}
@if(session('success'))

 <div class="alert alert-success">
  {{ session ('success') }}
 </div>

@endif


