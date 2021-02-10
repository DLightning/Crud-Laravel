@extends('templates.template')
@section('content')
<br>
<h1 class="ui header center aligned">
  @if(isset($book)) Editar @else Cadastrar  @endif </h1>
<br>

<div class="ui raised padded container segment">
    @if (isset($errors) && count($errors)>0)  
    <div class="ui floating message">
      @foreach ($errors->all() as $erro)
          {{$erro}}
      @endforeach
    </div>
    @endif
    @if (isset($book))
      <form class="ui form" name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
        @method('PUT')
        @else
      <form class="ui form" name="formCad" id="formCad" method="post" action="{{url('books')}}">
    @endif
  
      @csrf
    <div class="two fields">
    <div class="field">
      <label>Titulo</label>
      <input type="text" name="title" id="title" placeholder="Title: " value="{{$book->title ?? ''}}" required>
    </div>
    <div class="field">
      <label>Paginas</label>
      <input type="text" name="pages" id="pages" placeholder="Pages: " value="{{$book->pages ?? ''}}" required>
    </div>
  </div>
  <div class="two fields">
  <div class="field">
    <label>Preço</label>
    <input type="text" name="price" id="price" placeholder="Price: " value="{{$book->price ?? ''}}" required>
  </div>
  <div class="field">
    <label>Autor</label>
      <select class="ui fluid dropdown" name="id_user" id="id_user" required>
        <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
          @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
      </select>
  </div>
  </div>
    <button class="ui blue button" type="submit" value="">@if(isset($book)) Editar @else Cadastrar  @endif</button>
  </form>
</div>
@endsection