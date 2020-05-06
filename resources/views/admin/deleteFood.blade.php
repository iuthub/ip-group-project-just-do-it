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
        <div class="container">
        <form action="{{ route('postDelete') }}" method="POST">
            
            <div class="form-group">
                <label for="food">Choose food in order to delete:</label>
                <select id="food" name="food">
                    <option disabled selected value> -- select an option -- </option>
                    @foreach($Food as $key)
                        <option>{{$key['name']}}</option>
                    @endforeach
                 </select>
            </div>

            <input type="submit" class="btn btn-danger" value="Delete">
            @csrf
        </form>
        <a href = "{{ route('getAdminEdit')}}"><button class="btn btn-success"> Go back</button></a>
        </div>
    </body>
</html>
