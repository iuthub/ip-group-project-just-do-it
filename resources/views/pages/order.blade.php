{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--    <head>--}}
{{--        <meta charset="UTF-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--        <link rel="stylesheet" href="css/bootstrap.min.css">--}}
{{--        <link rel="stylesheet" href="css/mdb.min.css">--}}
{{--        <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />--}}

{{--        <title>Restaurant</title>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        @include("message.orderError")--}}
{{--        <form action="/order" method="POST">--}}
{{--            @for ($i = 0; $i < count($Table); $i++)--}}
{{--                @if($i % 2 == 0)--}}
{{--                    <br>--}}
{{--                    <h1>{{$Table[$i]->category}}</h1>--}}
{{--                    @else--}}
{{--                    @foreach($Table[$i] as $table)--}}
{{--                        <label for="{{$table->id}}">{{$table->name}}</label>--}}
{{--                        <br>--}}
{{--                        <label for="{{$table->id}}">{{$table->price}}</label>--}}
{{--                        <br>--}}
{{--                        <input type="number" name="{{$table->id}}" value="0" step="1" min="0">--}}
{{--                        <hr>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            @endfor--}}
{{--            @csrf--}}
{{--            <input type="reset">--}}
{{--            <input type="submit" >--}}
{{--        </form>--}}

{{--  </body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- Bootstrap link and scripts ---->
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="css/mdb.min.css">--}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!----- New style ---->
    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
{{--    <link href="/css/prettify-1.0.css" rel="stylesheet">--}}
    <link href="/css/base.css" rel="stylesheet">
{{--    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">--}}
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>


    <title>Restaurant</title>
</head>
{{--  <body>--}}
{{--      @include("partials.menuList");--}}
<body id="menu-body">
@include("message.orderError")

@include('partials.navbar')

<form action="/order" method="POST">

@include("partials.menuList")

@csrf
<div class="d-flex justify-content-center pt-5">
    <input class="btn btn-success" type="submit" style="border: 2px solid white;">
</div>
</form>

@include('partials.footer')
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
