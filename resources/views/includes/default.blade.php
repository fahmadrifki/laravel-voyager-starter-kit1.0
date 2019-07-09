<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('includes.essentialmeta')
    
    <!-- Import CSS -->
    @include('includes.essentialcss')
  </head>
  <body>
    
    <!-- Navbar Header -->
    @include('includes.header')
    
    <!-- /Navbar Header -->
    
    <!-- Main Content -->
    @yield('content')
    <!-- /Main Content -->
    
    <!-- Footer -->
    @include('includes.footer')
    <!-- Footer -->

    <!-- Import Javascript -->
    @include('includes.essentialjs')

  </body>
</html>