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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    @include('partials.navbar')

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="view overlay overlaysd1">
                <img src="gallerypart/aboutfood1.jpeg" class="d-block w-100" alt="">
                <div class="mask flex-center rgba-black-slight">
                    <h1 class="white-text">Restaurant Gallery</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">Restaurant inside</h3>
                <p class="font-weight-bold">Restaurant your information to confirm availability and begin the
                    reservation process.</p>
                <p class="text-muted">
                    Nice place to come on winter and enjoy the atmosphere that we provide for you
                </p>
            </div>
        </div>
    </section>
</div>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">Group Corner</h3>
                <p class="font-weight-bold">So popular for group projects among students</p>
                <p class="text-muted">Nice atmosphere for studying, learning and thinking about future plans</p>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable4.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </section>
</div>

<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">Coffee Corner</h3>
                <p class="font-weight-bold">
                    Special place for people who loves drinking coffee with desserts
                </p>
                <p class="text-muted">
                    After work or difficult day, you can visit here and taste or incredible coffee and desserts
                </p>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable17.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </section>
</div>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable12.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">Luxury</h3>
                <p class="font-weight-bold">
                   Enjoy it whenever you want
                </p>
                <p class="text-muted">
                    Beautiful place in our town. Share your every moment with us
                </p>
            </div>
        </div>
    </section>
</div>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">Our location</h3>
                <p class="font-weight-bold">
                    We hope that this location will be most popular in our city
                </p>
                <p class="text-muted">
                    You can find us by location provided in this page or contact with us whenever you want
                </p>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable3.webp" class="img-fluid" alt="">
            </div>
        </div>
    </section>
</div>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable18.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">Summer</h3>
                <p class="font-weight-bold">
                    Summer is considered as the best season for traveling and enjoying your life
                </p>
                <p class="text-muted">
                    In summer, we provide special places for eating and relaxing
                </p>
            </div>
        </div>
    </section>
</div>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable5.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">People</h3>
                <p class="font-weight-bold">
                    Our restaurant loves guests. In our restaurant, you can always find someone to talk with
                </p>
                <p class="text-muted">
                    Everyday we have a lot of visitors and we try to make best of our selves to be friends with them
                </p>
            </div>
        </div>
    </section>
</div>

<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable6.webp" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">Birthday</h3>
                <p class="font-weight-bold">
                    BIRTHDAY LUNCH OFFER
                    Mon-Fri, 12 – 2pm
                </p>
                <p class="text-muted">
                    Book lunch for 12 or more guests and the birthday person gets their lunch free plus we offer free coffees for all guests.
                </p>
            </div>
        </div>
    </section>
</div>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="font-weight-bold">BUSINESS LUNCH OFFER</h3>
                <p class="font-weight-bold">
                    Bring your team to the restaurant for your business
                </p>
                <p class="text-muted">
                    You can manage any kind of business meetings in our restaurant. We offer all kind of services for this.
                </p>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <img src="gallerypart/gallerytable9.webp" class="img-fluid" alt="">
            </div>
        </div>
    </section>
</div>

@include('partials.footer')
<div class="moveUp">
    <span><i class="fa fa-arrow-up"></i></span>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
