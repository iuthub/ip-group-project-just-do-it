<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Restaurant</title>
  </head>
  <body>
      <!--<form action="/order" method="POST">
      category
      <input type="text" name="category">
      <br>
      name
      <input type="text" name="name">
      <br>
      price
      <input type="number" name="price">
      <br>
      @csrf
      <input type="submit">
      </form>-->
      
      @for ($i = 0; $i < count($Table); $i++)
        @if($i % 2 == 0)
            <br>
            <h1>{{$Table[$i]->category}}</h1>
            @else
            @foreach($Table[$i] as $table)
                <p>{{$table->name}}.....{{$table->price}}</p>
             @endforeach
        @endif
      @endfor

      
  </body>
</html>
