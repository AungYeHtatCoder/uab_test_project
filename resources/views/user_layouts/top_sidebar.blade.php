<ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
 @if (Route::has('login'))
 @auth
 <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}"><i class="la la-home"></i><span>Home</span></a>
 </li>
 <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   <span>Logout</span> <i class="la la-sign-in"></i>
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
   @csrf
  </form>
 </li>
 @else
 <li class="nav-item"><a class="nav-link" href=""><i class="la la-home"></i><span>Dashboard</span></a>
 </li>
 <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i
    class="la la-sign-in"></i><span>Login</span></a>
 </li>
 @if (Route::has('register'))
 <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i
    class="la la-user-plus"></i><span>Register</span></a>
 </li>
 @endif
 @endauth
 @endif
</ul>