<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield('titulo')
    </title>
      @yield('estilo')
  </head>
  <body>
    <header>
      <ul  class="nav">
        <li class="nav-item p-4">Home</li>
        <li class="nav-item p-4">Sign Up</li>
        <li class="nav-item p-4">Login</li>
      </ul>
    </header>
    <section>
      @yield('section')
    </section>
    <footer>
      Dh 2019
    </footer>
  </body>
</html>
