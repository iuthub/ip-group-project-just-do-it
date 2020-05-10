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
@include('partials.errors')
@include('message.Success')
<div class="container">
    <a href="{{ route('getAddFood') }}">
        <button type="button" class="btn btn-success">Add new food</button>
    </a>
    <a href="{{ route('getModify') }}">
        <button type="button" class="btn btn-success">Modify food details</button>
    </a>
    <a href="{{ route('getDelete') }}">
        <button type="button" class="btn btn-success">Delete food</button>
    </a>
</div>
</body>
</html>
