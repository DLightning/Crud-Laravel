@extends('templates.template')
@section('content')
<br>
<h1 class="ui header center aligned">Crud Laravel</h1>
<br>


<div class="ui header center aligned">
  <a href="{{url("books/create")}}">
    <button class="ui inverted green button"> Cadastrar</button>
  </a>
</div>
<div class="ui raised padded container segment">
  @csrf
<table class="ui single line table">
    <thead class="ui center aligned">
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="ui center aligned">
      @foreach ($book as $books)
        @php
          $user=$books->find($books->id)->relUsers;
        @endphp
      <tr>
        <td>{{$books->id}}</td>
        <td>{{$books->title}}</td>
        <td>{{$user->name}}</td>
        <td>{{$books->price}}</td>
        <td>
          <a href="{{url("books/$books->id")}}">
            <button class="ui inverted blue button"> Details</button>
          </a>
          <a href="{{url("books/$books->id/edit")}}">
            <button class="ui inverted yellow button"> Edit</button>
          </a>
          <a href="{{url("books/$books->id")}}" class="js-del">
            <button class="ui inverted red button"> Delete</button>
          </a>
        </td>
      </tr>
          
      @endforeach
      
    </tbody>
  </table>
  
</div>
@endsection