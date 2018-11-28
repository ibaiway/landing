<!DOCTYPE html>
<html lang="en">

  <head>
    @include('includes.head')
    <title>@yield('title')</title>
  </head>

  <body>

    <!-- Navigation -->
    @include('includes.navbar')

    <!-- Masthead -->
    @yield('header')
    @include('includes.popup')
    <!-- Icons Grid -->
    @yield('content')

    <!-- Footer -->
    
    @include('includes.footer')
    <!-- Bootstrap core JavaScript -->
    @include('includes.scripts')
  </body>

</html>
