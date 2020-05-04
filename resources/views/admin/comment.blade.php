<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="css/css.css">--}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- Bootstrap link and scripts ---->

    {{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
    {{--    <link rel="stylesheet" href="css/mdb.min.css">--}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- new style -->
    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    {{--    <link href="./css/prettify-1.0.css" rel="stylesheet">--}}
    {{--    <link href="./css/base.css" rel="stylesheet">--}}
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

    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}
    {{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

    <title>Restaurant</title>
</head>
<body>
@include('partials.errors')
@if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
    </div>
@endif
<div class="d-flex justify-content-end p-4">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" class="btn btn-success" value="Logout"/>
    </form>
</div>

<div class="d-flex justify-content-center">
    <form action="{{ route('adminComment.search') }}" method="GET" class="form-inline" >
        <input type="text" class="form-control mb-2 mr-sm-2" name="name" placeholder="Full name"/>
        <input type="text" class="form-control mb-2 mr-sm-2" name="email" placeholder="Email address" />
        <input type="text" class="form-control mb-2 mr-sm-2" name="comment" placeholder="Comment"/>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary mb-2 mr-sm-2" value="Search">
    </form>
</div>

<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">&#8470;</th>
            <th class="text-center">Fullname</th>
            <th class="text-center">Email</th>
            <th class="text-center  col-md-6">Comment</th>
        </tr>
        </thead>
        <tbody>
        @php
            if(Request::has('page'))
                $i=(Request::get('page')-1)*10+1
        @endphp
        @foreach($comments as $comment)
            <tr>
                <td class="text-center">{{ $i }}</td>
                <td class="text-center">{{ $comment->name }}</td>
                <td class="text-center">{{ $comment->email }}</td>
                <td class="col-md-6">{{ $comment->comment }}</td>
                <td class="text-center"><a href="{{route('adminComment.delete',['id'=>$comment->id])}}"><i class="fa fa-trash-alt"></i></a></td>
            </tr>
            @php
                $i++
            @endphp
        @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
    {{ $comments->appends(request()->query())->links() }}
</div>
</body>
</html>
