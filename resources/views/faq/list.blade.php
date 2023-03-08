@extends('layouts.app')

@section('content')
  <a href='/'>добавить</a>
  @foreach($qas as $q)
    <h1>{{$q->text}}</h1>
    <h4>{{$q->answer->text}}</h4>
  @endforeach
@endsection
