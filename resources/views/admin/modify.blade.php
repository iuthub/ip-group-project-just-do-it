<!DOCTYPE html>
<html>
<head>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>--}}
{{--    <link href="{{ asset('css/css.css') }}" rel="stylesheet">--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    {{--    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>--}}
    {{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>--}}
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{--    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />--}}
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <title>Restaurant</title>
</head>
    <body>

        @include("message.orderError")
        @include("message.Success")
        <div class="btn-group col-md-5 p-3" >
            <a href="{{ route('getAddFood') }}" class="btn btn-info {{ Request::is('admin/edit/addFood') ? 'active' : '' }}">Add new food</a>
            <a href="{{ route('getModify') }}" class="btn btn-info {{ Request::is('admin/edit/modify') ? 'active' : '' }}">Modify food details</a>
            <a href="{{ route('getDelete') }}" class="btn btn-info {{ Request::is('admin/edit/delete') ? 'active' : '' }}" >Delete food</a>
            <a href="{{ route('admin.comment') }}" class="btn btn-info {{ Request::is('admin/edit/comment') ? 'active' : '' }}" >Back to admin</a>
        </div>

        <div class="container">
        <form enctype="multipart/form-data" action="{{ route('postModify') }}" method="POST">
        <table class="table table-hover ta ble-responsive table-striped table-condensed" >
            <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Category</th>
                <th class="text-center">Price</th>
            </thead>
            <tbody class="table-body">
            @foreach($Food as $food)
                <tr>
                    <input type="hidden" name="{{$food->id}}" value = "{{$food->id}}">
                    <td>
                        <input class="form-control" type="text" name="{{$food->id}}_name" value="{{$food->name}}">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="{{$food->id}}_category" value="{{$food->category}}">
                    </td>
                    <td>
                        <input class="form-control" type="number" name="{{$food->id}}_price" value="{{$food->price}}">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="p-4">
            <input type="submit" class="btn btn-success" value="Submit">
            @csrf
        </div>
        </form>
        </div>
    </body>
</html>
