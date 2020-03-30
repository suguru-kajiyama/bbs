@extends('master') 
@section('title','signup')
@section('stylesheet','')
@section('content')
  <div class="form">
  <h2>新規登録</h2>
    <form action="/signup/create"method="post">
      @csrf
    <table>
      <tr>
        <td class="form-type">name</td>
        <td><input type="text"name="name"></td>
      </tr>
      <tr>
        <td class="form-type">email</td>
        <td><input type="text"name="email"></td>
      </tr>
      <tr>
        <td class="form-type">password</td>
        <td><input type="password"name="password"></td>
      </tr>
    </table>
    <input type="submit">
    </form>
  </div>
  @if( isset($msg) )
  <p>{{$msg}}</p>
  @endif
@endsection