<!DOCTYPE html>
<html>
<head>
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

        <div class="btn-group col-md-5 p-3" >
            <a href="{{ route('getAddFood') }}" class="btn btn-info {{ Request::is('admin/edit/addFood') ? 'active' : '' }}">Add new food</a>
            <a href="{{ route('getModify') }}" class="btn btn-info {{ Request::is('admin/edit/modify') ? 'active' : '' }}">Modify food details</a>
            <a href="{{ route('getDelete') }}" class="btn btn-info {{ Request::is('admin/edit/delete') ? 'active' : '' }}" >Delete food</a>
            <a href="{{ route('admin.comment') }}" class="btn btn-info {{ Request::is('admin/edit/comment') ? 'active' : '' }}" >Back to admin</a>
        </div>


        <div class="container col-md-5">
        <form enctype="multipart/form-data" action="{{ route('postAddFood') }}" method="POST">
            <div class="form-group">
                <label for="name">Food name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter new food name" name="name">
            </div>
            <div class="form-group">
                <label for="category">Food category:</label>
                <select name="category" class="form-control">
                    <option disabled selected value> -- select an option -- </option>
                @foreach($category as $value)
                        <option>
                            {{$value}}
                        </option>
                    @endforeach
                </select>
            </div>
{{--                <input list="categoryList" class="form-control" id="category" placeholder="Enter food category" name="category">--}}
{{--                <datalist id="categoryList">--}}
{{--                    @foreach($category as $value)--}}
{{--                    <option value="{{$value}}">--}}
{{--                    @endforeach--}}
{{--                </datalist>--}}
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" min="0" value="" name="price" placeholder="Enter price">
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="img">Upload photo:</label>--}}
{{--                <input type="file" accept="image/*" class="form-control" id="img" name="img" required>--}}
{{--            </div>--}}
            <div class="mb-2">Upload photo:</div>
            <div class="custom-file mb-3">
                Upload photo:
                <input type="file" accept="image/*" class="custom-file-input" id="customFile" name="img">
                <label class="custom-file-label" for="img">Choose file</label>
            </div>

                <input type="submit" class="btn btn-success" value="Submit">
                @csrf
        </form>
        </div>
    </body>
</html>
