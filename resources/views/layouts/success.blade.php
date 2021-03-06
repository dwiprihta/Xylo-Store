<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Xylo | @yield('title')</title>
    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    {{-- Style --}}
  </head>
  <body>

    <!-- Page Content -->
    @yield('content')
    <!-- Page Content -->

   {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
   {{-- Script --}}
  </body>
</html>
