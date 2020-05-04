<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link type="text/css" rel="stylesheet" href="{{ url('gallerypart/style.css') }}">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- Bootstrap link and scripts ---->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="gallerypart/animate.css">

    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
      <script scr="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"></script>
    <title>Restaurant</title>


  </head>
  <body>
       
      <header>
        
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
          <li class="nav-item ">
            <a class="nav-link" href="{{URL('AboutUs')}}">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signin">Sign in</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/Gallery">Gallery</a>
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

{{-- 
     <div id="carouselExampleControls" class="carousel slide carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active">
        <img src="gallerypart/food1.jpg" class="" alt="" style="width: 100%; height:830px">
      <div class="carousel-caption  d-none d-md-block">
        <h2 class="animated bounceInRight" style="animation-delay: 1s">WELCOME TO ART</h2>
        <h3 class="animated flipInY" style="animation-delay: 2s">It is very beautiful and natural</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gallerypart/food2.jpg" class="" alt="" style="max-height:830px;width:100%; ">
      <div class="carousel-caption  d-none d-md-block">
        <h2 class="animated zoomIn" style="animation-delay: 1s">WELCOME TO ART</h2>
        <h3 class="animated shake" style="animation-delay: 2s">It is very beautifu and natural</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gallerypart/food4.jpg" class="" alt="" style="height: 830px; width:100%">
      <div class="carousel-caption  d-none d-md-block">
        <h2 class="animated bounceInRight" style="animation-delay: 1s">WELCOME TO ART</h2>
        <h3 class="animated wobble" style="animation-delay: 2s">It is very beautiful and natural</h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">&lsaquo;</span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true">&rsaquo;</span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}

<div class="row">
  <div class="col-12 col-md-12">
<div class="view overlay overlaysd1" >
    <img src="gallerypart/aboutfood1.jpeg" class="img-fluid" alt=""   >
    <div class="mask flex-center rgba-black-slight">
        <h1 class="white-text">Restaurant Gallery</h1>
    </div>
</div>
</div>
</div>
</header>

{{-- <div class="content-bod">
<div class="gallery-section">
  <div class="inner-width"> 
    <h1>RESTAURANT GALLERY</h1>
    <div class="border"></div>
    <div class="gallery">
      

      <a class="image" href="gallerypart/galeryfood1.jpeg">
        <img src="gallerypart/galeryfood1.jpeg">
      </a>

      <a class="image" href="gallerypart/galleryfood2.jpeg">
        <img src="gallerypart/galleryfood2.jpeg">
      </a>

      <a class="image" href="gallerypart/galleryfood3.jpeg">
        <img src="gallerypart/galleryfood3.jpeg">
      </a>

      <a class="image" href="gallerypart/galleryfood4.jpeg">
        <img src="gallerypart/galleryfood4.jpeg">
      </a>

      <a class="image" href="gallerypart/galleryfood5.jpeg">
        <img src="gallerypart/galleryfood5.jpeg">
      </a>

      <a class="image" href="gallerypart/galleryfood6.jpeg">
        <img src="gallerypart/galleryfood6.jpeg">
      </a>

      <a class="image" href="gallerypart/galleryfood7.jpeg">
        <img src="gallerypart/galleryfood7.jpeg">
      </a>

      <a class="image" href="gallerypart/galleryfood8.jpeg">
        <img src="gallerypart/galleryfood8.jpeg">
      </a>
    


    </div>
  </div>
</div>
</div> --}}



    <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable2.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>



   <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable4.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>



  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable14.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>




  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable17.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>



  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>



  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable3.webp" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>



   <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable18.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>





  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable16.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>





       <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable5.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>





  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable7.webp" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>







   
       <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable6.webp" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>




  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable9.webp" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>



        <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable8.webp" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>





  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="gallerypart/gallerytable15.webp" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>






          <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="https://lh3.googleusercontent.com/proxy/iCLYMx1_OzSJjDnl8SJ4kaXiCjCjPlPzWljXsdm-tk20DKtAl5pc079oycVISTkLnorx8ln71O4X8Ub-3iHYB7O3gY228cg6hHl4W6qeYVxu9bKf5df42g" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Gryzle</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>





   <div class="adress" style="margin-top: 2832px">
   <div class="adress-container">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore ma</p>
     <p>10000 Tashkent  5555555 Lorem ipsum dolor sit amet, co</p>
     <p>Open: 09:00 am - 01:00 close and bye</p>
     <div button.btn.btn--swap Button Hover 2
  span New Text></div>
   </div>
 </div>
   
 
      















    

      <div class="footer">
        <div class="inner-footer">
          
          <div class="footer-items">
            <h1>Computer & Codes </h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore
            </p>
          </div>
          <div class="footer-items">
            <h1>Quick links </h1>
             <div class="border-foot"></div>
             <ul>
               <a href=""><li>Home</li></a>
               <a href=""><li>About us</li></a>
               <a href=""><li>Services</li></a>
               <a href=""><li>Portfolio</li></a>
               <a href=""><li>Contanc us</li></a>
             </ul>
          </div>

          <div class="footer-items">
            <h1>Quick links </h1>
             <div class="border-foot"></div>
             <ul>
               <a href=""><li>Home</li></a>
               <a href=""><li>About us</li></a>
               <a href=""><li>Services</li></a>
               <a href=""><li>Portfolio</li></a>
               <a href=""><li>Contanc us</li></a>
             </ul>
          </div>

          <div class="footer-items">
            <h1>Contact us </h1>
             <div class="border-foot"></div>
             <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i>1 mactaniv st</li>
               <li><i class="fa fa-phone" aria-hidden="true"></i>(111)2222222</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i>example@mail.com</li>
             </ul>
             <div class="social-media">
               <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                 <a href=""><i class="fa fa-instagram " aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
             </div>
          </div>
       
        </div>
        <div class="footer-bottom">
          Copyright &copy; Computers & Codes 2019. All rights reserved.
        </div>
      </div>





      <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="aboutpart/js/vendor/jquery-2.2.4.min.js"></script>
     
      <script src="aboutpart/js/vendor/bootstrap.min.js"></script>      
      
      <script src="aboutpart/js/jquery-ui.js"></script>   
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>      
        
  </body>
</html>
