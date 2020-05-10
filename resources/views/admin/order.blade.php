<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <title>Restaurant</title>
</head>
<body>
@include('partials.errors')
@include('message.Success')
<div class="btn-group col-md-8 p-3">
    <a href="{{ route('admin.comment') }}" class="btn btn-info {{ Request::is('admin/comment') ? 'active' : '' }}">Comments</a>
    <a href="{{ route('admin.permitteduser') }}"
       class="btn btn-info {{ Request::is('admin/permitteduser') ? 'active' : '' }}">PermittedUsers</a>
    <a href="{{ route('admin.index') }}" class="btn btn-info {{ Request::is('admin/booktable') ? 'active' : '' }}">Booking
        table</a>
    <a href="{{ route('adminGetOrder') }}" class="btn btn-info {{ Request::is('admin/order') ? 'active' : '' }}">Ordering
        food</a>
    <a href="{{ route('getAddFood') }}" class="btn btn-info">Food</a>
</div>
<div class="d-flex justify-content-end p-3">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" class="btn btn-success" value="Logout"/>
    </form>
</div>

<div class="d-flex justify-content-center orderAdminForm">
    <form action="{{ route('adminPostOrder') }}" method="POST" class="form-inline" style="flex-wrap: nowrap;">
        <input type="text" class="form-control mb-2 mr-sm-2" name="name" placeholder="Full name"/>
        <input type="text" class="form-control mb-2 mr-sm-2" name="phone" placeholder="Phone number"/>
        <input type="text" class="form-control col-md-4 mb-2 mr-sm-2" name="comment"
               placeholder="Comment about delivery place"/>
        @csrf
        <input type="submit" class="btn btn-primary mb-2 mr-sm-2" value="Search">
        {{--            <a href="{{ route('adminGetOrder') }}" class="btn btn-primary mb-2 mr-sm-2">Full list</a>--}}
    </form>
</div>

<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">&#8470;</th>
            <th class="col-xs-2 col-md-2 text-center">Name</th>
            <th class="col-xs-1 col-md-2 text-center">Phone number</th>
            <th class="col-xs-1 col-md-2 text-center">latitude / longitude</th>
            <th class="col-xs-3 col-md-3 text-center">Comment about delivery place</th>
            <th class="col-xs-3 col-md-3 text-center">Order</th>
            <th class="text-center">&nbsp;</th>

        </thead>
        <tbody class="table-body">
        @for ($i = 0; $i < count($Table); $i++)
            @if($i % 2 == 0)
                <tr>
                    <td class="text-center">{{ $i/2+1 }}</td>
                    <td class="text-center">{{$Table[$i]->name}}</td>
                    <td class="text-center">{{$Table[$i]->phoneNumber}}</td>
                    <td class="text-center">{{$Table[$i]->latitude}} / {{$Table[$i]->longitude}}</td>
                    <td class="text-center">{{$Table[$i]->comment}}</td>
                    @else
                        <td class="orderAdminForm text-center">
                            <div class="btn-group text-center">
                                <button type="button" class="btn btn-default btn-transparent btn-sm dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Order
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach($Table[$i] as $table)
                                        <li><a>{{$table->name}} &emsp; {{$table->price}} x {{$table->value}}</a>
                                        </li>
                                    @endforeach
                                    <?php
                                    $total = 0;
                                    foreach ($Table[$i] as $table)
                                        $total += $table->price * $table->value;
                                    ?>
                                    <li><a><b>Total price is <?php echo $total; ?></b></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="text-center"><a href="{{route('adminOrderDelete',['id'=>$Table[$i-1]->id])}}"><i
                                    class="fa fa-trash-alt"></i></a></td>
                </tr>
            @endif
        @endfor
        </tbody>
    </table>
</div>
</body>
</html>
