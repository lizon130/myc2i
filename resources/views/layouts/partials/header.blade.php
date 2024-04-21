<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center {{ Request::route()->getName() == '/' ? 'home-header' : 'other-header' }}">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="{{url('/')}}">
          <img src="{{asset('assets/img/logo.png')}}" alt="">
      </a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{ Request::route()->getName() == '/' ? 'active-route' : '' }}" href="{{route('/')}}">Home</a></li>
          {{--  <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#about">About Us</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>  --}}
          <li><a class="nav-link scrollto {{ Request::route()->getName() == 'about' ? 'active-route' : '' }}" href="{{route('about')}}">About</a></li>
          <li><a class="nav-link scrollto {{ Request::route()->getName() == 'mentor-profile' ? 'active-route' : '' }}" href="{{route('mentor-profile')}}">Mentor Profile</a></li>
          <li><a class="nav-link scrollto {{ Request::route()->getName() == 'contact' ? 'active-route' : '' }}" href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i style="color: white;" class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header>
  <!-- End Header -->
