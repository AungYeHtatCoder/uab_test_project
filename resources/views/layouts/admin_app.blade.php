@include('layouts.head')
@yield('styles')

<body class="sb-nav-fixed">
 @include('layouts.navbar')
 <div id="layoutSidenav">
  <div id="layoutSidenav_nav">
   @include('layouts.sidebar')
  </div>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     @yield('content')
    </div>
   </main>
   @include('layouts.footer')
   @yield('scripts')