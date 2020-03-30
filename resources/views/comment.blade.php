@extends('master') 
@section('title','top')
@section('stylesheet','')
@section('content')
<h2>{{$title}}</h2>
  @foreach($comments as $comment)
  <div class="comment">
    <h3>{{ $comment->user_id }}</h3>
    <p class="comment-text">{{$comment->comment_text}} </p>
  </div>
  @endforeach

 <div class="form">
  <form action="/contents/{{ $title_id }}/create"method="post">
    @csrf
    <input type="textarea"name="text">
    <input type="submit">
  </form>
</div>   
@endsection

