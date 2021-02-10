@extends('templates.template')
@section('content')
<br>
<h1 class="ui header center aligned">Details</h1>
<br>

<div class="ui raised padded container segment"> 

  <div class="ui list">
    @php
        $user=$book->find($book->id)->relUsers;
    @endphp
    
    <div class="item">Titulo: {{$book->title}}</div>
    <div class="item">Paginas: {{$book->pages}}</div>
    <div class="item">Preço: R$ {{$book->price}}</div>
    <div class="item">Autor: {{$user->name}}</div>
    <div class="item">Email do Autor: {{$user->email}}</div>
  </div>

</div>
@endsection