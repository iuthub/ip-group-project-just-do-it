<main>
    <section class="site-title">
        <div class="site-background">
            <h3>Restaurants and cafes</h3>
            <h1>Amazing booking site on Earth</h1>
            <button>Explore
            </button>
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
                                @if(file_exists('food_img/'.$first[0]->id.'.jpg'))
                                    <img src="food_img/{{$first[0]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[0]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[0]->name}}</h4>
                                        <p class="card-text">So lovely ...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[3]->id.'.jpg'))
                                    <img src="food_img/{{$first[3]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[3]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[3]->name}}</h4>
                                        <p class="card-text">Our recommendation, we hope you will like it</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[5]->id.'.jpg'))
                                    <img src="food_img/{{$first[5]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[5]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[5]->name}}</h4>
                                        <p class="card-text">One of the best choice of customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[1]->id.'.jpg'))
                                    <img src="food_img/{{$first[1]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[1]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[1]->name}}</h4>
                                        <p class="card-text">So delicious ...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[4]->id.'.jpg'))
                                    <img src="food_img/{{$first[4]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[4]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[4]->name}}</h4>
                                        <p class="card-text">We know that you also want to taste this food</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[7]->id.'.jpg'))
                                    <img src="food_img/{{$first[7]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[7]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$first[7]->name}}</h4>
                                            <p class="card-text">Just delicious, visit our restaurant and enjoy this food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[2]->id.'.jpg'))
                                    <img src="food_img/{{$first[2]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[2]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[2]->name}}</h4>
                                        <p class="card-text">More than what you want</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[6]->id.'.jpg'))
                                    <img src="food_img/{{$first[6]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[6]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[6]->name}}</h4>
                                        <p class="card-text">Delicious is our motto</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                @if(file_exists('food_img/'.$first[8]->id.'.jpg'))
                                    <img src="food_img/{{$first[8]->id}}.jpg" alt="Card image ">
                                @else
                                    <img src="food_img/{{$first[8]->id}}.png" alt="Card image">
                                @endif
                                    <div class="card-body">
                                        <h4 class="card-title">{{$first[8]->name}}</h4>
                                        <p class="card-text">This is one of the best choice among our menu</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container posts">
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <img
                        src="images/white.jpg"
                        alt="...."
                        class="postImg">
                </div>
            </div>
            {{--            category--}}
            <div class="col-md-4 side">
                <div class="sidebar">
                    <div class="category">
                        <h2>Category</h2>

                        <ul class="category-list">
                            @foreach($categories as $category)
                                <li
                                    class="list-item">
                                    <a href="{{route('pages.menu')}}#{{ $category->category }}">{{ $category->category }}</a>
                                    {{--                                    <span>(05)</span>--}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
