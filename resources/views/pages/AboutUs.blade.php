<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- Bootstrap link and scripts ---->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet"  href="aboutpart/style.css">
    <title>Restaurant</title>
   <style type="text/css">
     .navbar{
      background-color: white !important
     }
   </style>
    
      
  </head>
  <body>
    
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#" id="navbar-brand-t">Restaurant</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{URL('AboutUs')}}">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signin">Sign in</a>
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
    
     
       <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
 
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view" style="max-height: 700px">
        <img class="d-block w-100" src="gallerypart/aboutfood2.jpeg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Sardor</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item" >
      <!--Mask color-->
      <div class="view" style="max-height: 700px">
        <img class="d-block w-100" style="" src="gallerypart/aboutfood1.jpeg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Alisher</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view" style="max-height: 700px">
        <img class="d-block w-100" src="gallerypart/aboutfood3.jpeg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Main content</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">&lsaquo;</span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true">&rsaquo;</span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
<!--/.Carousel Wrapper-->
  
         <div class="row my-5 about-text">
             <div class="col">
                 <h1 style="">ABOUT US</h1>
              <div class="border" style=""></div>
           </div>
         </div>

   <div class="container my-5 py-5 z-depth-1">
 
 
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
    
          <!--Grid row-->
          <div class="row">
    
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
    
              <h3 class="font-weight-bold">Read article</h3>
    
              <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                molestiae
                numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>
    
              <a class="btn btn-purple btn-md ml-0" href="#" role="button">Read more{{-- <i class="fa fa-gem ml-2"></i> --}}</a>
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
    
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img src="https://mdbootstrap.com/img/Photos/Others/img%20(29).jpg" class="img-fluid"
                  alt="">
                <a href="#">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
    
            </div>
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
    
    
        </section>
        <!--Section: Content-->
    
    
      </div>

       <div class="row my-5 about-text">
             <div class="col">
                 <h1 style="">OUR CUSTOMERS LOVELY</h1>
              <div class="border" style=""></div>
           </div>
         </div>

         <div class="row justify-content-center" style="margin: 0 50px; background-color: #90d5ec;
background-image: linear-gradient(315deg, #90d5ec 0%, #fc575e 74%);
 padding-top: 80px;padding-bottom: 80px">
          <div class="col-3">
        <!-- Card -->
<div class="card testimonial-card" >

  <!-- Background color -->
  <div class="card-up" ></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white avatarfotoresize" >
    <img src="aboutpart/img/cardfotomy2.jpg" class="rounded-circle fotocardmy1"
      alt="woman avatar" >
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h4 class="card-title">Anna Doe</h4>
    <hr>
    <!-- Quotation -->
    <p><i class="fa fa-quote-right" id="iconqumy1" ></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
    </p>
  </div>

</div>
<!-- Card -->
   </div>
 <div class="col-3">
 <!-- Card -->
<div class="card testimonial-card">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white">
    <img src="aboutpart/img/cardfotomy2.jpg" class="rounded-circle fotocardmy1"
      alt="woman avatar" >
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h4 class="card-title">Anna Doe</h4>
    <hr>
    <!-- Quotation -->
    <p><i class="fa fa-quote-right" id="iconqumy1" ></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
    </p>
  </div>

</div>
<!-- Card -->
</div>
<!-- Card -->
   
 <div class="col-3">
 <!-- Card -->
<div class="card testimonial-card">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white">
    <img src="aboutpart/img/cardfotomy2.jpg" class="rounded-circle fotocardmy1"
      alt="woman avatar">
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h4 class="card-title">Anna Doe</h4>
    <hr>
    <!-- Quotation -->
    <p><i class="fa fa-quote-right" id="iconqumy1" ></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
    </p>
  </div>

</div>
<!-- Card -->
</div>
</div> 



<div class="row justify-content-center my-5">
<div class="col-5"> 
<form class="text-center border border-light p-5" action="#">

    <p class="h4 mb-4">Contact us</p>


    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">


    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

    
    <label>Subject</label>
    <select class="browser-default custom-select mb-4">
        <option value="" disabled>Choose option</option>
        <option value="1" selected>Feedback</option>
        <option value="2">Report a bug</option>
        <option value="3">Feature request</option>
        <option value="4">Feature request</option>
    </select>

  
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
    </div>

   
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>

   
    <button class="btn btn-info btn-block" type="submit">Send</button>

</form>
</div>
<div class="col-5"> 
  <div class="contacttext"> 
  <h2> Hollywod kino </h2>
   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore masd.  </p>
  </div>
   
</div>
</div>






              {{-- <!-- Footer -->
              <footer class="page-footer font-small unique-color-dark pt-4">

             <!-- Footer Elements -->
               <div class="container">

               <!-- Call to action -->
               <ul class="list-unstyled list-inline text-center py-2">
               <li class="list-inline-item">
                  <h5 class="mb-1 text-white">Register for free</h5>
               </li>
               <li class="list-inline-item">
                <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
               </li>
                 </ul>
                <!-- Call to action -->

                </div>
                    <!-- Footer Elements -->

                  <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                 <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                   </div>
                           <!-- Copyright -->

                       </footer>
                        <!-- Footer -->
 --}}
   
    
    
   


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  
 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    
  </body>
</html>

