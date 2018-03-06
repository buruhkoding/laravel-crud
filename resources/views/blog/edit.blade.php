@extends('template/master')
@section('title','Laraku - Blog @ Single')

@section('content')
<div class="section">
  <div class="container">
    <h2 class="title">Edit Blog {{$blogs->id}}</h2>
    <form action="/blog" method="post">
      <input type="hidden" name="_method" value="PUT">
      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input" type="text" name="title" value="{{$blogs->title}}">
        </div>
      </div>
      <div class="field">
        <label class="label">Description</label>
        <div class="control">
          <textarea class="textarea" name="description" rows="8" cols="80">{{$blogs->description}}</textarea>
        </div>
        {{ csrf_field() }}
      </div>
      <div class="field">
        <div class="control">
          <input class="button is-medium is-success" type="submit" name="submit" value="Update Artikel">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
