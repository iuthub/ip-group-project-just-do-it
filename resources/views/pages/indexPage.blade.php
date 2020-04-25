<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- Bootstrap link and scripts ---->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">

    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
      <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Restaurant</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Restaurant</a>
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
          <li class="nav-item">
            <a class="nav-link" href="/menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
        </ul>
        <div id="social-media">
          <i src="face"class="fa fa-facebook-f"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
      </div>
    </nav>

    <main>
      <section class="site-title">
        <div class="site-background">
          <h3>Welcome</h3>
          <h1>Just Delicious Food</h1>
          <a href="/book"><button >Book Table</button></a>
          <div><a href="/delivery"><button>Delivery Service</button></a></div>
        </div>
      </section>
      <section class="blog">
        <div class="container my-4">
          <div id="multi-item-example" class="carousel slide
            carousel-multi-item" data-ride="carousel">

            <div class="controls-top">
              <a class="btn-floating" href="#multi-item-example"
                data-slide="prev"><i class="fa fa-chevron-left"></i></a>
              <a class="btn-floating" href="#multi-item-example"
                data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>

            <ol class="carousel-indicators">
              <li data-target="#multi-item-example" data-slide-to="0"
                class="active"></li>
              <li data-target="#multi-item-example" data-slide-to="1"></li>
              <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="images/meat.jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Meat food</h4>
                        <p class="card-text">Lorem ipsum</p>
                        <a class="btn btn-primary" href="/meat">menu</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Fast food</h4>
                        <p class="card-text">Lorem ipsum</p>
                        <a class="btn btn-primary" href="fast">menu</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">National food</h4>
                        <p class="card-text">Lorem ipsum</p>
                        <a class="btn btn-primary" href="/national">menu</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              
              <div class="carousel-item">

                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Desserts</h4>
                        <p class="card-text">Lorem ipsum</p>
                        <a href="/desserts"class="btn btn-primary">menu</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Drinks</h4>
                        <p class="card-text">Lorem ipsum</p>
                        <a href="/drinks"class="btn btn-primary">menu</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Salad</h4>
                        <p class="card-text">Lorem ipsum</p>
                        <a href="salad" class="btn btn-primary">Menu</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!--/.Second slide-->

              <!--Third slide-->
              <!--<div class="carousel-item">

                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on
                          the card title and make up the bulk of the
                          card's content.</p>
                        <a class="btn btn-primary">menu</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on
                          the card title and make up the bulk of the
                          card's content.</p>
                        <a class="btn btn-primary">menu</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on
                          the card title and make up the bulk of the
                          card's content.</p>
                        <a class="btn btn-primary">menu</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>-->
            </div>
          </div>
        </div>
        <section class="container posts">
         <div class="row">
          <div class="col-md-8">
            <div class="post">
              <img src="./images/white.jpg" alt="...." class="postImg">
            </div>
          </div>
          <div class="col-md-4">
            <div class="sidebar">
              <div class="category">
                <h2>Category</h2>
                <ul class="category-list">
                  <li class="list-item">
                    <a href="#">Fast Food</a>
                    <span>(05)</span>
                  </li>
                  <li class="list-item">
                    <a href="#">Fast Food</a>
                    <span>(05)</span>
                  </li>
                  <li class="list-item">
                    <a href="#">Uzbek food</a>
                    <span>(05)</span>
                  </li>
                  <li class="list-item">
                    <a href="#">British food</a>
                    <span>(05)</span>
                  </li>
                  <li class="list-item">
                    <a href="#">Russian meal</a>
                    <span>(05)</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </section>
   
      </section>
    </main>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
