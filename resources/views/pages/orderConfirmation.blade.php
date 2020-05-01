
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/css.css">
        <title>Restaurant</title>
    </head>
    <body>
        @include("message.orderError")
        <form action="/orderConfirmation" method="POST">
            @foreach($Table as $table)
                
                <input type="hidden" name="{{$table->id}}" value="{{$table->value}}">
                <h4>{{$table->name}}</h4>
                <p>{{$table->value}} x {{$table->price}}</p>
            @endforeach
            <br>
            <h2>Total price is {{$priceSum}}</h2>
            <br>
            <br>
            <label for="name">Name</label>
            <input type="text" name="name" minlength="3" maxlength="45" required>
            <br>
            <label for="tel">Enter telephone number</label>
            <input type="tel" name="tel" value="+998" maxlength="13" minlength="13"required>
            <br>
            <label for="comment">Enter comment about your delivery place if you wish</label>
            <input type="text" name="comment">

            <input type="hidden" id="latitude" name="latitude" value="">
            <input type="hidden" id="longitude" name="longitude" value="">
            <input type="reset">
            <input type="submit">
            @csrf
        </form>
        <script type="text/javascript" src="js/geolocation.js"></script>
  </body>
</html>
