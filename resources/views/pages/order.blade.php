<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mdb.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        
        <title>Restaurant</title>
    </head>
    <body>
        @include("message.orderError")
        <form action="/order" method="POST">
            @for ($i = 0; $i < count($Table); $i++)
                @if($i % 2 == 0)
                    <br>
                    <h1>{{$Table[$i]->category}}</h1>
                    @else
                    @foreach($Table[$i] as $table)
                        <label for="{{$table->id}}">{{$table->name}}</label>
                        <br>
                        <label for="{{$table->id}}">{{$table->price}}</label>
                        <br>
                        <input type="number" name="{{$table->id}}" value="0" step="1" min="0">
                        <hr>
                    @endforeach
                @endif
            @endfor
            @csrf
            <input type="reset">
            <input type="submit" >
        </form>
        
  </body>
</html>