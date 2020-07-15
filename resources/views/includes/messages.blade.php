{{-- выводим ошибки при валидации формы --}}
{{-- @if($errors->any())

  <div class="alert alert-danger">
   <ul>
    @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
   </ul>

  </div>

@endif --}}

{{-- выводим успех валидации формы --}}
{{-- @if(session('success'))

 <div class="alert alert-success">
  {{ session ('success') }}
 </div>

@endif --}}






@if($errors->any())

<div id="modal">
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif



@if(session('success'))

<div id="modal">
  {{ session ('success') }}
</div>

@endif



