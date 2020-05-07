<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Restaurant</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About us</a>
          </li>
          <li class="nav-item services">
            <a class="nav-link" href="/order">Services</a>
            <ul class="dropdown-content">
              <li class="nav-item">
               <a class="nav-link" href="#">Delivery</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{route('pages.book')}}">Booking</a>
                </li>
            </ul>
          </li>
          

          <li class="nav-item">
            <a class="nav-link" href="/menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Sign in</a>
          </li>
        </ul>
        <div id="social-media">
          <i class="fa fa-facebook-f"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
      </div>
    </nav>
