@extends('layouts.app')

@section('content')
  <form method='post'>
    @csrf
    вопрос <input name='question' required='required'>
    ответ <input name='answer' required='required'>
    показывать <input type='checkbox' name='show' checked>
    <input type='submit' value='добавить'>
  </form>
@endsection
