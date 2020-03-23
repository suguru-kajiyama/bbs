@extends('master') 
@section('title','top')
@section('stylesheet','')
@section('content')
  @foreach($comments as $comment)
  <p>{{$comment->comment_text}}</p>
  @endforeach  
@endsection