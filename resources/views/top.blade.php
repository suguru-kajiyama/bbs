
@extends('master') 
@section('title','top')
@section('stylesheet','')
@section('content')
　<h2>ログイン</h2>
  <form action="/login"method="post"><br>

  @csrf
  
  <label>name:<input type="text"name="name"></label><br>
  <label>email:<input type="text"name="email"></label><br>
  <label>password<input type="password"name="password"></label><br>
  <input type="submit">
  </form>
  <a href="/signup">新規登録</a>
@endsection