@extends('template/master')
@section('title','Laraku - Blog@Home')


@section('content')
  <section class="hero is-danger is-medium">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-1">
          &lt;br/&gt;
        </h1>
        <h2 class="subtitle">
          We should <b>break</b> up.
        </h2>
      </div>
    </div>
    <div class="hero-footer">
      <div class="container">
        <nav class="tabs is-boxed">
          <ul>
            <li class="is-active"><a href="/blog/create" class="">Create</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="columns is-multiline">
        @foreach ($blogs as $blog)
          <div class="column is-4">
            <div class="card">
              <div class="card-content">
                <h2 class="heading"><?= substr($blog->description,0,300); ?></h2>
                <h3 class="subtitle">{{ $blog->title }}</h3>
              </div>
              <footer class="card-footer">
                <span class="card-footer-item">
                  <a href="/blog/{{$blog->id}}" class="button is-info">
                    <i class="fa fa-window-maximize"></i>
                  </a>
                </span>
                <span class="card-footer-item">
                  <a href="/blog/{{$blog->id}}/edit" class="button is-success">
                    <i class="fa fa-edit"></i>
                  </a>
                </span>
                <span class="card-footer-item">
                  <a href="/blog/{{$blog->id}}/delete" class="button is-danger">
                    <i class="fa fa-trash-alt"></i>
                  </a>
                </span>
              </footer>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
