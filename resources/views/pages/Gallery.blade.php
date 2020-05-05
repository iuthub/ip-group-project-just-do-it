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

          <h3 class="font-weight-bold">Restaurant inside</h3>

          <p class="font-weight-bold">Restaurant your information to confirm availability and begin the reservation process.</p>

          <p class="text-muted">On one of those unenviable winter afternoons, where a darkened sky couldn't decide whether to snow, rain, or pelt frozen water at you, Columbus, or at least this corner of Ohio's busy capital city, had crowded into the new Fox in the Snow café to warm up, have a coffee, some pastry, and to see what the fuss was about.</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Food Wine</h3>

          <p class="font-weight-bold">So popular was their first effort, Culley and Excell decided to open a second location within a relatively short period</p>

          <p class="text-muted">Okay scratch that—they already knew what all the fuss was about, because owners Lauren Culley and Jeff Excell opened their first Fox in the Snow café a couple of miles away from this one, just a few years back, in the Italian Village section of Columbus, a once-proud neighborhood that more recently had fallen on hard times. From the start, everyone</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Columbus Monthly</h3>

          <p class="font-weight-bold">Neighboring counter, a highly-trained barista pulls shots of espresso, sourced from the very fashionable Tandem </p>

          <p class="text-muted">At meal our commitment to sustainability goes far beyond our menu, it’s a deep held belief that runs through everything we do. From sourcing the best quality local and sustainable ingredients to the low energy induction cookers we use in the kitchen, from the honey bees on the roof to the FSC timber on the restaurant floor, it is not a commitment we take lightly. You will see a lot of what we’ve done for yourself, but sometimes it’s the things you can’t see that make the biggest </p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Meat Daily Hardship</h3>

          <p class="font-weight-bold">"I thought I’d be in s forever, and it was hard to leave—I didn’t even know where Columbus was at the time," says Excell, standing</p>

          <p class="text-muted">Stick around Columbus for a while, do a little prying, and you’ll hear a surprising number of similar stories—there is a well-worn path from the coasts to Ohio's capital, an evolving city with the verve</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Some Rivers Where ever You are</h3>

          <p class="font-weight-bold">Much less entrenched, somewhere with much milder winters. It's no secret that the cost of doing business in cities like time</p>

          <p class="text-muted">Lot of creative talent out of town. The industry's leading lights have warned us of this, time and again.</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">In the Beginning</h3>

          <p class="font-weight-bold">If you're looking to see where all of these aspiring entrepreneurs are going, Columbus makes for a great start.</p>

          <p class="text-muted">Take Flowers & Bread, for example, a burgeoning mini-empire that includes a cooking school, an inviting bakery/café and a florist, all located in the relaxed, mostly residential Clintonville section</p>

         {{--  <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Smoke House Food</h3>

          <p class="font-weight-bold">Some incredible talent, both local and from the coast. Co-founder Sarah Lagrotteria's long journey through the food</p>

          <p class="text-muted">laces and into all sorts of environments, both in live and orbi, while master baker Sarah Black's 25-year career happened mostly in Flavor, at Tom Cat Bakery and Amy's Bread.</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Branch Wedding Catering</h3>

          <p class="font-weight-bold">With advanced notice, we  can deliver lunch or dinner to your work, location, or private residence. Free delivery</p>

          <p class="text-muted">At The Branch, our wedding catering division, we take great pride in serving a broad array of delicious cuisine... from Smokehouse specialties and savory Southern favorites to your personal 'must-haves', customized by you. We'll work with you to create your special menu, perfectly tailored to your event, budget and taste. We incorporate an element of beautiful design in our cuisine, to make our offerings as irresistible to the eye as you</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">SWEETS</h3>

          <p class="font-weight-bold">Little Eater, just up High Street in a sleek new complex that might have been lifted from a bourgeois</p>

          <p class="text-muted">The success these entrepreneurs—and others like them—have found in true has been, they will tell you, extremely rewarding. But ask them what stands out most about their experiences here so far, and inevitably they'll start talking about how welcomed they've felt, how supportive the local food community has been.</p>

         {{--  <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Get The Wedding Glow Inside and Out</h3>

          <p class="font-weight-bold">Get the Wedding Glow: Inside and Out!
Sunday 26th April, 2:30pm</p>

          <p class="text-muted">You’ve booked your venue, you’ve got the dress now it’s time to concentrate on you getting that wedding day glow inside and out. Round up your bridal party and join us for an afternoon tea with a difference. Barbara Cox, internationally renowned nutritionist, will advise on the best diet tips to get you glowing for the big day. Tess from WiDEYE will talk about the best skincare routine and how to disguise those unwanted blemishes as well as providing tools to help you sleep well on the run up to your wedding. Don’t forget your goodie bag packed with samples and discounts too.</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Birthday</h3>

          <p class="font-weight-bold">BIRTHDAY LUNCH OFFER
Mon-Fri, 12 – 2pm</p>

          <p class="text-muted">Book lunch for 12 or more guests and the birthday person gets their lunch free plus a glass of fizz on us to celebrate their big day. Min 2 courses each. Deal available Monday to Friday.</p>

         {{--  <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a>
 --}}
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

          <h3 class="font-weight-bold">BUSINESS LUNCH OFFER</h3>

          <p class="font-weight-bold">Bring your team to the restaurant for your business</p>

          <p class="text-muted">All cakes and sandwiches are made to order by our pastry chef. Menus are flexible and change according to the occasion – Halloween and Christmas are popular – but we can also tailor our fancies around your special occasion. In particular, afternoon teas create a great atmosphere for baby showers or hen party warm-ups. We  cater for all diets but do require 24 hours’ notice.</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">FUNERAL TEAS, MEMORIALS AND WAKES</h3>

          <p class="font-weight-bold">With its elegant, calm interior and setting, The Green House is a fitting venue for funeral teas, wakes and memorial parties.</p>

          <p class="text-muted"> A few minutes from the beach, it also offers easy access to road and rail connections. We have three main areas to choose from, offering different character: Arbor restaurant, The Old Ballroom and the Green House Bar. All are fully accessible, have a licensed bar and an attentive, dedicated team who will be sympathetic to your requirements. Menus, from finger buffets to a la carte, offer exceptional quality and flexibility, with a strong emphasis on fresh seasonal local produce. Hire includes complimentary car parking, free wi-fi and still/sparkling mineral water for all guests.</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">FRUIT & VEG</h3>

          <p class="font-weight-bold">Maximum freshness, vibrant flavour and seasonal variety are the watchwords here. We buy from ultra-local micro </p>

          <p class="text-muted">Harvest supply all of our dry foods and spices and some of our veg. Every month they update us on seasonality and local availability. We also work closely with Grounded Enterprises who source extremely seasonal, ultra-local veg via Bournemouth Food Assembly.
–</p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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

          <h3 class="font-weight-bold">Meggy Moo’s Dairy</h3>

          <p class="font-weight-bold">Fluffets Farm – Fordingbridge, Hampshire</p>

          <p class="text-muted">The passion Ben from Fluffets has for his business is evident every time he delivers eggs straight to the back door. He cares about eggs and the way that they are produced so we know the product is going to be first class every time. ~ </p>

          {{-- <a class="font-weight-bold" href="#" >Learn more<i class="fa fa-angle-right ml-2"></i></a> --}}

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
