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
        <form enctype="multipart/form-data" action="{{ route('postAddFood') }}" method="POST">
            <div class="form-group">
                <label for="name">Food name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter new food name" name="name">
            </div>
            <div class="form-group">
                <label for="category">Food category:</label>
                <input list="categoryList" class="form-control" id="category" placeholder="Enter food category" name="category">
                <datalist id="categoryList">
                    @foreach($category as $value)
                    <option value="{{$value}}">
                    @endforeach
                </datalist>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" min="0" value="" name="price">
            </div>

            <div class="form-group">
            <label for="img">Upload photo:</label>
                <input type="file" accept="image/*" class="form-control" id="img" name="img" required>
            </div>

                <input type="submit" class="btn btn-success" value="Submit">
                @csrf
        </form>
        </div>
    </body>
</html>
