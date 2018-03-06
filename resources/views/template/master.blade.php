<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="icon" type="image/png" href="/favicon.png">
  </head>
  <body>
    <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
      <div id="specialShadow" class="bd-special-shadow" style="opacity: 0; transform: scaleY(1);"></div>
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
          </a>
        </div>
        <div class="navbar-menu" id="navMenuDocumentation">
          <div class="navbar-start">
            <a class="navbar-item" href="/">Home</a>
            <a class="navbar-item" href="/blog">Blog</a>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="field is-grouped is-grouped-multiline">
                <p class="control">
                  <a href="/logout" class="button is-warning">Logout</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    @yield('content')
    <footer class="footer">
      <p class="has-text-centered">
        <a href="https://bulma.io/made-with-bulma/">
          <img src="https://bulma.io/images/made-with-bulma.png" alt="Made with Bulma" width="128" height="24">
        </a>
        <br>
        <strong>&copy;</strong> Laravel & Laraku
        <br>
        Made with <i class="fa fa-heart"></i><a href="#"> Rahmat Fauzi</a>
      </p>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </body>
</html>
