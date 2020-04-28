<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- Bootstrap link and scripts ---->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Restaurant</title>
</head>
<body>
@include('partials.errors')
@if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
    </div>
@endif
<div class="myHeader">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" class="myBtn" value="Logout"/>
    </form>
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Fullname</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>ToDate</th>
        <th>People number</th>
        <th>№Table</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
@foreach($books as $book)
    <tr>
        <td>{{ $book->name }}</td>
        <td>{{ $book->email }}</td>
        <td>{{ $book->phone }}</td>
        <td>{{ $book->toDate }}</td>
        <td>{{ $book->numOfPeople }}</td>
        <td>{{ $book->numOfTable }}</td>
        @if($book->confirmed==1)
        <td>ok</td>
        @else
        <td>none</td>
        @endif
        <td><a href="{{route('admin.delete',['id'=>$book->id])}}">Del</a></td>
    </tr>
@endforeach
    </tbody>
</table>

</body>
</html>
