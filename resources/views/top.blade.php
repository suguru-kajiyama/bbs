
@extends('master') 
@section('title','top')
@section('stylesheet','')
@section('content')
　<h2>ログイン</h2>
  <form action="/login"method="post"><br>

  @csrf
  <table>
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
  <a href="/signup">新規登録</a>
  <a href="/contents">ログインしない</a>
@endsection