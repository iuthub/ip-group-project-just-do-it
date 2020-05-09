{{--@for ($i = 0; $i < count($Table); $i++)--}}
{{--    <h1>i={{$i}}</h1>--}}
{{--        @if($i % 2 == 0)--}}
{{--            <br>--}}
{{--            <h1>{{$Table[$i]->category}}</h1>--}}
{{--            @else--}}
{{--            @foreach($Table[$i] as $table)--}}
{{--                @if(file_exists('food_img/'.$table->id.'.jpg'))--}}
{{--                <img src="food_img/{{$table->id}}.jpg" alt="{{$table->name}} rasm,food_img/{{$table->id}}.jpg ">--}}
{{--                <p>Yes './food_img/'.{{$table->id}}.'jpg'</p>--}}
{{--                @else--}}
{{--                    <p>NO './food_img/'.{{$table->id}}.'jpg'</p>--}}
{{--                <img src="food_img/{{$table->id}}.png" alt="{{$table->name}} rasm,food_img/{{$table->id}}.png ">--}}
{{--                @endif--}}
{{--                <p>{{$table->name}}.....{{$table->price}}</p>--}}
{{--             @endforeach--}}
{{--        @endif--}}
{{--      @endfor--}}

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
{{--        <h1>i={{$i}}</h1>--}}
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
{{--                                <img src="/images/burger.jpg" alt="....">--}}
                            @else
                                <img src="food_img/{{$table->id}}.png" alt="{{$table->name}} rasm,food_img/{{$table->id}}.png ">
                            @endif
                        </div>
                        <div class="col-md-8 content">
                            <div class="def">
                                <h3 style="font-family: inherit;">{{$table->name}}</h3>
                                    @if(Request::is('order'))
                                    <input type="number" class="form-control" id="price" min="0" value="" name="{{$table->id}}" placeholder="How many?">
                                    @endif
                                    {{--                                <p>Lorem ipsum dolor sit.</p>--}}
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
