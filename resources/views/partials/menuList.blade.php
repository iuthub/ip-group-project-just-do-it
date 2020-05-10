<section id="menu">

    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content_header" >
                @if(Request::is('menu'))
                    <h1>Restaurant Menu</h1>
                @else
                    <h1>Order food for delivery</h1>
                @endif
            </div>
        </div>

    </div>

    @for ($i = 0; $i < count($Table); $i++)
        @if($i % 2 == 0)
        <div class="section-menu" id="{{$Table[$i]->category}}">
        <div class="section_name">

            <h3>{{$Table[$i]->category}}</h3>
        </div>
        @else
        <div class="container-fluid">
            <div class="row">

                    @foreach($Table[$i] as $table)
                <div class="col-md-6 menu-item">
                    <div class="row">
                        <div class="col-md-4 img">
                            @if(file_exists('food_img/'.$table->id.'.jpg'))
                                <img src="food_img/{{$table->id}}.jpg" alt="{{$table->name}} rasm,food_img/{{$table->id}}.jpg ">
                            @else
                                <img src="food_img/{{$table->id}}.png" alt="{{$table->name}} rasm,food_img/{{$table->id}}.png ">
                            @endif
                        </div>
                        <div class="col-md-8 content">
                            <div class="def">
                                <h3 style="font-family: inherit;">{{$table->name}}</h3>
                                    @if(Request::is('order'))
                                    <input type="number" class="form-control" id="price" min="0" value="0" name="{{$table->id}}" placeholder="How many?">
                                    @endif
                            </div>
                            <div class="price">
                                {{$table->price}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        </div>

        @endif
    @endfor
</section>
