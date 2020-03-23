@extends('master') 
@section('title','top')
@section('stylesheet','')
@section('content')

  @foreach($titles as $title)
    <a href="/contents/{{ $title->id}}">{{ $title->name }} </a><br>  
  @endforeach
  <div> 
    <form action="contents/create"method="post">
      @csrf
      <label >タイトル<input type="text"name="title"></label><br>
      <input type="submit">作成
    </form>
  </div>
@endsection