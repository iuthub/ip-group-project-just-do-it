<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <title>Restaurant</title>
</head>
<body id="body">
<div class="bg-image"></div>
<div class="form_space">
    @include('partials.errors')
    @include('partials.navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12" style="margin: auto">
                <form action="{{route('pages.book')}}" class="form1" method="post">
                    <h1>Booking table</h1>
                    <div class="form-group">
                        <label for="name">Full name:</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number:</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                               value="{{ old('phone') }}">
                    </div>
                    <!--  time   -->
                    <div class="d-flex row">
                        <div class="item col-md-6">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='datetime' class="form-control" name="toDate"
                                           value="{{ old('toDate') }}"/>
                                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker({
                                    // format: 'DD-MM-YYYY HH:mm:ss',
                                    format: 'YYYY-MM-DD HH:mm:ss',
                                    minDate: new Date()
                                });
                            });
                        </script>
                        <!--  time   -->
                        <div class="form-group col-md-3">
                            <select class="form-control" name="numOfPeople" id="">
                                <option selected value="1">1 person</option>
                                <option value="2">2 people</option>
                                <option value="3">3 people</option>
                                <option value="4">4 people</option>
                                <option value="5">5 people</option>
                                <option value="6">6 people</option>
                                <option value="7">7 people</option>
                                <option value="8">8 people</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <select class="form-control" name="numOfTable">
                                @for($i=1;$i<=30;$i++)
                                    @if($tables[$i]==0)
                                        <option value="{{$i}}">{{$i}} table</option>
                                    @else
                                        <option value="{{$i}}" disabled>{{$i}} table</option>
                                    @endif
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-outline-light" style="border: 1px white solid" value="Book">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
