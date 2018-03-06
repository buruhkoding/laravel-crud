@extends('template/master')
@section('title','Laraku - Blog @ Single')

@section('content')
<div class="section">
  <div class="container">
    <div class="column is-8 is-offset-2">
      <h2 class="title has-text-centered">{{ $blogs->title }}</h2>
      <hr>
      <p class="subtitle has-text-left">{{ $blogs->description}}</p>
    </div>
  </div>
</div>
@endsection
