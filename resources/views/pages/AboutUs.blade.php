<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aboutpart/style.css">
    <title>Restaurant</title>
    <style type="text/css">
        .navbar {
            background-color: white !important
        }
    </style>
</head>
<body>
@include('partials.errors')
@include('partials.navbar')
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view" style="max-height: 700px">
                <img class="d-block w-100" src="gallerypart/aboutfood2.jpeg"
                     alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Welcome to Restaurant</h3>
                <p>A place to bring people together to eat better, feel </br>
                    better, and celebrate a passion for better living.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view" style="max-height: 700px">
                <img class="d-block w-100" style="" src="gallerypart/aboutfood1.jpeg"
                     alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Welcome to Restaurant</h3>
                <p>A bowl that has your back.</br> Meet our new Immunity bowl.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view" style="max-height: 700px">
                <img class="d-block w-100" src="gallerypart/aboutfood3.jpeg"
                     alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Welcome to Restaurant</h3>
                <p>A Better Definition of the Diet.</p>
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
<div class="row my-5 about-text">
    <div class="col">
        <h1 style="">ABOUT US</h1>
        <div class="border" style=""></div>
    </div>
</div>
<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="font-weight-bold">Hi Friend Check Out About Our Taste</h3>
                <p class="text-muted">Ever since I began working on Restaurant in 2017, I had eating mostly plant-based
                    food outside of the classes I teach (for both health and ethical reasons). At the same time, I was
                    receiving more emails from people around country asking for vegetarian and vegan National cooking
                    classes. We worked out a date, I sent in a description, and a class was born.</p>
                <a class="btn btn-purple btn-md ml-0" href="{{ route('pages.Article') }}" role="button">Read
                    more{{-- <i class="fa fa-gem ml-2"></i> --}}</a>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="view overlay z-depth-1-half">
                    <img src="aboutpart/img/food25.jpg" class="img-fluid"
                         alt="">
                    <a href="#">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
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
        <div class="card testimonial-card">
            <div class="card-up"></div>
            <div class="avatar mx-auto white avatarfotoresize">
                <img src="aboutpart/img/cardfotomy2.jpg" class="rounded-circle fotocardmy1"
                     alt="woman avatar">
            </div>
            <div class="card-body">
                <h4 class="card-title">Anna Doe</h4>
                <hr>
                <p>
                    <i class="fa fa-quote-right" id="iconqumy1"></i>
                    Although we didn't go into the onsite restaurant, we ordered some food at the bar a few times and it
                    was delicious. The bar area and lobby were nice and open, good place to relax and meet friends.
                    <br><br>
                </p>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card testimonial-card">
            <div class="card-up indigo lighten-1"></div>
            <div class="avatar mx-auto white">
                <img src="aboutpart/img/cardfotomy4.jpg" class="rounded-circle fotocardmy1"
                     alt="woman avatar">
            </div>
            <div class="card-body">
                <h4 class="card-title">Christopher Mike</h4>
                <hr>
                <p>
                    <i class="fa fa-quote-right" id="iconqumy1"></i>
                    Stopped here for a snack on our way back to the Manchester airport. Had the boneless buffalo wings
                    and potato skins varying qualities. I had appetizer and some French onion soup.
                    <br><br>
                </p>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card testimonial-card">
            <div class="card-up indigo lighten-1"></div>
            <div class="avatar mx-auto white">
                <img src="aboutpart/img/cardfotomy5.jpg" class="rounded-circle fotocardmy1"
                     alt="woman avatar">
            </div>
            <div class="card-body">
                <h4 class="card-title">David Gros</h4>
                <hr>
                <p>
                    <i class="fa fa-quote-right" id="iconqumy1"></i>
                    My wife chose this restaurant for an evening meal before we went to a concert in the Castle grounds.
                    The food was excellent as I had a pizza with mozzarella was the service we will definitely be back,
                    thank again!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center my-5">
    <div class="col-5">
        <form class="text-center border border-light p-5" action="{{ route('pages.AboutUs') }}" method="POST">
            <p class="h4 mb-4">Contact us</p>
            <input type="text" id="defaultContactFormName" class="form-control mb-4 @error('name') is-invalid @enderror"
                   placeholder="Name" name="name" value="{{ old('name') }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
            @enderror

            <input type="email" id="defaultContactFormEmail"
                   class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="E-mail" name="email"
                   value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
            @enderror

            <div class="form-group">
                {{ csrf_field() }}
                <textarea class="form-control rounded-2 @error('comment') is-invalid @enderror"
                          id="exampleFormControlTextarea2" rows="3" placeholder="Message"
                          name="comment">{{ old('comment') }}</textarea>
                @error('comment')
                <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
                @enderror

            </div>
            <button class="btn btn-info btn-block" type="submit">Send</button>
        </form>
    </div>
    <div class="col-5" style="margin: auto 0;">
        <div class="contacttext">
            <h2> Restaurant Name and Info </h2>
            <p>
                Contact us our restaurant glad to serve you with our food and you can sign you can use our site </br> We
                open at 09:00 and close 12:00 </br> You can check our site in groups.
            </p>
        </div>
    </div>
</div>
@include('partials.footer')
<div class="moveUp">
    <span><i class="fa fa-arrow-up"></i></span>
</div>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>

