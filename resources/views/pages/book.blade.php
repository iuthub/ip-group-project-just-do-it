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
    <!----- New style ---->

    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="./css/prettify-1.0.css" rel="stylesheet">
    <link href="./css/base.css" rel="stylesheet">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>


    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>



    <title>Restaurant</title>
</head>
<body>
@include('partials.errors');
@if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
    </div>
@endif

<form action="{{route('pages.book')}}" method="post">
<div class="container">

    <h1>Booking table</h1>

    <div class="form-group">
        <label for="name">Full name:</label>
        <input type="name" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="phone">Phone number:</label>
        <input type="text" class="form-control" name="phone">
    </div>
    <!--  time   -->
    <div class="container">
{{--        <div class='col-md-5'>--}}
{{--            <div class="form-group">--}}
{{--                <div class='input-group date' id='datetimepicker6'>--}}
{{--                    <input type='text' class="form-control" />--}}
{{--                    <span class="input-group-addon">--}}
{{--                    <span class="glyphicon glyphicon-calendar"></span>--}}
{{--                </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class='col-md-5'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='datetime' class="form-control" name="toDate" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                // format: 'DD-MM-YYYY HH:mm:ss',
                format: 'YYYY-MM-DD HH:mm:ss',
                minDate: new Date()
            });
        });
    </script>
    <!--  time   -->


    <div>
        <select name="numOfPeople" id="">
            <option selected value="1">1 person</option>
            <option value="2">2 people</option>
            <option value="3">3 people</option>
            <option value="4">4 people</option>
            <option value="5">5 people</option>
            <option value="6">6 people</option>
            <option value="7">7 people</option>
            <option value="8">8 people</option>
        </select>
    </div>

    <div>
        <select name="numOfTable">
            @for($i=1;$i<=30;$i++)
                @if($tables[$i]==0)
                    <option value="{{$i}}">{{$i}} table</option>
                @else
                    <option value="{{$i}}" disabled>{{$i}} table</option>
                @endif
            @endfor
{{--            <option value="2">2 table</option>--}}
{{--            <option value="3">3 table</option>--}}
{{--            <option value="4">4 table</option>--}}
{{--            <option value="5">5 table</option>--}}
{{--            <option value="6">6 table</option>--}}
{{--            <option value="7">7 table</option>--}}
{{--            <option value="8">8 table</option>--}}
        </select>
    </div>
    {{csrf_field()}}
    <input type="submit" value="Book">
</form>
</body>
</html>
