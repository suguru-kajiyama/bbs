@extends('master') 
@section('title','signup')
@section('stylesheet','')
@section('content')
  <div class="form">
  <h2>新規登録</h2>
    <form action="/signup/create"method="post">
      @csrf
    <label>name:<input type="text"name="name"></label><br>
    <label>email:<input type="text"name="email"></label><br>
    <label>password:<input type="password"name="password"></label><br>
    <input type="submit">
    </form>
  </div>
  @if( isset($msg) )
  <p>{{$msg}}</p>
  @else
  <p>aa</p>
  @endif
@endsection