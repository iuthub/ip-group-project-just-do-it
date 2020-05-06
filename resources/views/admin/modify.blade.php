<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <title>Restaurant</title>
</head>
    <body>

        @include("message.orderError")
        @include("message.Success")
        <form enctype="multipart/form-data" action="{{ route('postModify') }}" method="POST">
        <table class="table table-hover ta ble-responsive table-striped table-condensed" >
            <thead>
            <tr>
                <th class="col-xs-4 col-md-4">Name</th>
                <th class="col-xs-4 col-md-4">Category</th>
                <th class="col-xs-4 col-md-4">Price</th>                    
            </thead>
            <tbody class="table-body">
            @foreach($Food as $food)
                <tr>
                    <input type="hidden" name="{{$food->id}}" value = "{{$food->id}}">
                    <td>
                        <input type="text" name="{{$food->id}}_name" value="{{$food->name}}">
                    </td>
                    <td>
                        <input type="text" name="{{$food->id}}_category" value="{{$food->category}}">
                    </td>
                    <td>
                        <input type="number" name="{{$food->id}}_price" value="{{$food->price}}">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <input type="submit" class="btn btn-success" value="Submit">
        @csrf
        </form>

    </body>
</html>
