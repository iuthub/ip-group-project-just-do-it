<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <title>Restaurant</title>
</head>
<body>
@include('partials.errors')
@include('message.Success')
<div class="btn-group col-md-5 p-3">
    <a href="{{ route('getAddFood') }}" class="btn btn-info {{ Request::is('admin/edit/addFood') ? 'active' : '' }}">Add
        new food</a>
    <a href="{{ route('getModify') }}" class="btn btn-info {{ Request::is('admin/edit/modify') ? 'active' : '' }}">Modify
        food details</a>
    <a href="{{ route('getDelete') }}" class="btn btn-info {{ Request::is('admin/edit/delete') ? 'active' : '' }}">Delete
        food</a>
    <a href="{{ route('admin.comment') }}" class="btn btn-info {{ Request::is('admin/edit/comment') ? 'active' : '' }}">Back
        to admin</a>
</div>

<div class="container col-md-5 p-5">
    <form action="{{ route('postDelete') }}" method="POST">
        <div class="form-group">
            <label for="food">Choose food in order to delete:</label>
            <select id="food" name="food" class="form-control">
                <option disabled selected value> -- select an option --</option>
                @foreach($Food as $key)
                    <option>{{$key['name']}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-danger" value="Delete">
        @csrf
    </form>
</div>
</body>
</html>
