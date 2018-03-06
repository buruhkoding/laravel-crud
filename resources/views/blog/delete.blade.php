@extends('template/master')
@section('title','Laraku - Blog @ Single')

@section('content')
  <h1>Create Blog </h1>
  <form action="/blog/{{$blog->id}}" method="post">
    <input type="hidden" name="_method" value="DELETE">
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Create">
  </form>


@endsection
