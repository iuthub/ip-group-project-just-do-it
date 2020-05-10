<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <title>Restaurant</title>
</head>
<body class="bodyMenu">
@include("message.Success")
@include("partials.errors")
@include('partials.navbar')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-12" style="margin: auto">
            <form action="/orderConfirmation" method="post">
                <h1>Your orders for food</h1>
                <br>
                <div class="orderDetails">
                    @foreach($Table as $table)
                        <div>
                            <input type="hidden" name="{{$table->id}}" value="{{$table->value}}">
                            <h4>{{$table->name}}</h4>
                            <p>{{$table->value}} x {{$table->price}}</p>
                        </div>
                    @endforeach
                </div>
                <h3>Total price is {{$priceSum}}</h3>
                <br>
                <h1>Input your details</h1>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" minlength="3" maxlength="45" required>
                </div>
                <div class="form-group">
                    <label for="tel">Enter telephone number</label>
                    <input type="tel" class="form-control" name="tel" value="+998" maxlength="13" minlength="13"
                           required>
                </div>
                <div class="form-group">
                    <label for="comment">Enter comment about your delivery place if you wish</label>
                    <input type="text" class="form-control" name="comment">
                </div>
                <input type="hidden" id="latitude" name="latitude" value="">
                <input type="hidden" id="longitude" name="longitude" value="">
                <div class="d-flex justify-content-start">
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-outline-light" style="border: 1px white solid" value="Order">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="bodyMargin"></div>
<script type="text/javascript" src="js/geolocation.js"></script>
</body>
</html>
