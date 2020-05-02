<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Restaurant</title>
</head>
    <body>
        <div >
        <table class="table table-hover table-responsive table-striped table-condensed" >
            <thead>
            <tr>
                <th class="col-xs-2 col-md-2">Name</th>
                <th class="col-xs-1 col-md-1">Phone number</th>
                <th class="col-xs-1 col-md-1">latitude</th>
                <th class="col-xs-1 col-md-1">longitude</th>
                <th class="col-xs-3 col-md-3">Comment about  delivery place</th>
                <th class="col-xs-3 col-md-3">Order</th>
                    
            </thead>
            <tbody class="table-body">
            @for ($i = 0; $i < count($Table); $i++)
                @if($i % 2 == 0)
                    <tr>
                        <td>{{$Table[$i]->name}}</td>
                        <td>{{$Table[$i]->phoneNumber}}</td>
                        <td>{{$Table[$i]->latitude}}</td>
                        <td>{{$Table[$i]->longitude}}</td>
                        <td>{{$Table[$i]->comment}}</td>
                @else
                        <td> 
                            <div class="btn-group">
                            <button type="button" class="btn btn-default btn-transparent btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="title-element-name">Order </span><span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                @foreach($Table[$i] as $table)
                                    <li><a>{{$table->name}} &emsp; {{$table->price}} x {{$table->value}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            </div>
                        </td>
                    </tr>
                @endif
            @endfor
            </tbody>
        </table>
        </div>

    </body>
</html>