<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
 <div class="sb-sidenav-menu">
  <div class="nav">
   <div class="sb-sidenav-menu-heading">Core</div>
   <a class="nav-link" href="index.html">
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    Dashboard
   </a>
   <div class="sb-sidenav-menu-heading">Interface</div>
   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
    aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
    UserManagement
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
   </a>
   <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
     <a class="nav-link" href="{{ route('admin.permissions.index') }}">User Permission</a>
     <a class="nav-link" href="{{ route('admin.roles.index') }}">User Role</a>
     <a class="nav-link" href="{{ route('admin.users.index') }}">User List</a>
     <a class="nav-link" href="{{ route('admin.users.pending') }}">User pending List</a>
    </nav>
   </div>
   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
    aria-expanded="false" aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    ProductManagement
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
   </a>
   <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth"
      aria-expanded="false" aria-controls="pagesCollapseAuth">
      ProductCategory
      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
     </a>
     <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
      <nav class="sb-sidenav-menu-nested nav">
       <a class="nav-link" href="{{ route('admin.categories.index') }}">Category</a>
       <a class="nav-link" href="register.html">Register</a>
       <a class="nav-link" href="password.html">Forgot Password</a>
      </nav>
     </div>
     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError"
      aria-expanded="false" aria-controls="pagesCollapseError">
      Product
      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
     </a>
     <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
      <nav class="sb-sidenav-menu-nested nav">
       <a class="nav-link" href="{{ route('admin.products.index') }}">ProductList</a>
       <a class="nav-link" href="{{ route('admin.brands.index') }}">ProductBrand</a>
       <a class="nav-link" href="{{ route('admin.order.index') }}">GetOrder</a>
      </nav>
     </div>
    </nav>
   </div>
   <div class="sb-sidenav-menu-heading">Addons</div>
   <a class="nav-link" href="charts.html">
    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
    Charts
   </a>
   <a class="nav-link" href="tables.html">
    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
    Tables
   </a>
  </div>
 </div>
 <div class="sb-sidenav-footer">
  <div class="small">Logged in as:</div>
  Start Bootstrap
 </div>
</nav>