@include('user_layouts.head')
@yield('styles')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns  " data-open="click"
 data-menu="horizontal-menu" data-col="2-columns">

 <!-- BEGIN: Header-->
 @include('user_layouts.navbar')
 <!-- END: Header-->


 <!-- BEGIN: Main Menu-->

 <div
  class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
  <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
   @include('user_layouts.top_sidebar')
  </div>
 </div>

 <!-- END: Main Menu-->
 <!-- BEGIN: Content-->
 <div class="app-content container center-layout mt-2">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
   <div class="content-header row">
   </div>
   <div class="content-body">
    <!-- Dashboard Ecommerce Starts -->
    @yield('content')
    <!-- Dashboard Ecommerce ends -->
   </div>
  </div>
 </div>
 <!-- END: Content-->

 <div class="sidenav-overlay"></div>
 <div class="drag-target"></div>

 <!-- BEGIN: Footer-->
 @include('user_layouts.footer')
 @yield('scripts')