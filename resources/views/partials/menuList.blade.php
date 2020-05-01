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