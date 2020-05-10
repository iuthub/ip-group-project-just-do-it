<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- new style -->
    <link rel="stylesheet" type="text/css" media="screen"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
    <title>Restaurant</title>
</head>
<body>
@include('partials.errors')
@include('message.Success')
<div class="btn-group col-md-8 p-3">
    <a href="{{ route('admin.comment') }}" class="btn btn-info {{ Request::is('admin/comment') ? 'active' : '' }}">Comments</a>
    <a href="{{ route('admin.permitteduser') }}"
       class="btn btn-info {{ Request::is('admin/permitteduser') ? 'active' : '' }}">PermittedUsers</a>
    <a href="{{ route('admin.index') }}" class="btn btn-info {{ Request::is('admin/booktable') ? 'active' : '' }}">Booking
        table</a>
    <a href="{{ route('adminGetOrder') }}" class="btn btn-info {{ Request::is('admin/order') ? 'active' : '' }}">Ordering
        food</a>
    <a href="{{ route('getAddFood') }}" class="btn btn-info">Food</a>
</div>

<div class="d-flex justify-content-end p-3">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" class="btn btn-success" value="Logout"/>
    </form>
</div>

<div class="d-flex justify-content-center">
    <form class="form-inline">
        <input type="text" class="form-control mb-2 mr-sm-2" name="email" placeholder="Email address"/>
        {{ csrf_field() }}
        <input type="submit" formaction="{{ route('adminEmail.search') }}" formmethod="GET"
               class="btn btn-primary mb-2 mr-sm-2" value="Search">
        <input type="submit" formaction="{{ route('adminEmail.create') }}" formmethod="POST"
               class="btn btn-primary mb-2 mr-sm-2" value="Create">
    </form>
</div>

<div class="container" style="width: 60%;">
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">&#8470;</th>
            <th class="text-center">Email</th>
            <th class="text-center">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @php
            if(Request::has('page'))
                $i=(Request::get('page')-1)*10+1
        @endphp
        @foreach($emails as $email)
            <tr>
                <td class="text-center">{{ $i }}</td>
                <td class="text-center">{{ $email->email }}</td>
                <td class="text-center"><a href="{{route('adminEmail.delete',['id'=>$email->id])}}"><i
                            class="fa fa-trash-alt"></i></a></td>
            </tr>
            @php
                $i++
            @endphp
        @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
    {{ $emails->appends(request()->query())->links() }}
</div>
</body>
</html>
