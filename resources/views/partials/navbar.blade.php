<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ route('pages.indexPage') }}">Restaurant</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }} ">
            <a class="nav-link" href="/">Home

            </a>
          </li>
          <li class="nav-item {{ Request::is('aboutUs') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pages.AboutUs') }}">About us</a>
          </li>
          <li class="nav-item {{ Request::is('menu') ? 'active' : '' }}">
            <a class="nav-link" href="/menu">Menu</a>
          </li>
          <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pages.Gallery') }}">Gallery</a>
          </li>

            <li class="nav-item services">
                <a class="nav-link {{ Request::is('order') || Request::is('book') ? 'active' : '' }}" style="{{ Request::is('order') || Request::is('book') ? 'background-color: rgba(0,0,0,0.1);' : '' }}">Services</a>
                <ul class="dropdown-content">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('getOrder') }}">Delivery system</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pages.book')}}">Booking table</a>
                    </li>
                </ul>
            </li>

          <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('login') }}">Sign in</a>
          </li>
        </ul>
{{--        <div id="social-media">--}}
{{--          <i class="fa fa-facebook-f"></i>--}}
{{--          <i class="fa fa-instagram"></i>--}}
{{--          <i class="fa fa-twitter"></i>--}}
{{--          <i class="fa fa-youtube"></i>--}}
{{--        </div>--}}
      </div>
    </nav>
