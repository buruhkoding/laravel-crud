@extends('template/master')
@section('title','Laraku - Blog @ Single')

@section('content')
<div class="section">
  <div class="container">
    <h2 class="title">Artikel Baru</h2>
    <form action="/blog" method="post">
      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input" type="text" placeholder="Some Title Here" name="title" value="{{ old('title') }}">
          @if ($errors->has('title'))
            <span class="tag is-link">{{ $errors->first('title') }}</strong>
          @endif
        </div>
      </div>
      <div class="field">
        <label class="label">Descirption</label>
        <div class="control">
          <textarea class="textarea" placeholder="Some Description Here" name="description" rows="8" cols="10">{{ old('description') }}</textarea>
          @if ($errors->has('description'))
            <span class="tag is-link">{{ $errors->first('description') }}</span>
          @endif
        </div>
        {{ csrf_field() }}
      </div>
      <div class="field">
        <div class="control">
          <input class="button is-medium is-success" type="submit" name="submit" value="Post Artikel">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
