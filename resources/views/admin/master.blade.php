<html lang="en">
 @include('admin.partials.head')
  <body class="vertical  light  {{ $assetDir == 'admin-rtl' ? 'rtl' : '' }}">
    <div class="wrapper">

     @include('admin.partials.navbar')
     @include('admin.partials.aside')

     <main role="main" class="main-content">
          @yield('content')

      </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('admin.partials.scripts')
  </body>
</html>
