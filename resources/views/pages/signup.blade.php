<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

    <title>Restaurant</title>
</head>
<body>
{{--  @include('partials.errors')--}}
@if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
    </div>
@endif
@include("partials.errors")
@include("partials.navbar")
<div class="container">
    {{--       -------------------------------------------}}
    <div id="signupbox" style="margin-top:30px" class="mainbox mx-auto col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading my-3">
                <div class="panel-title">Sign Up</div>

            </div>
            <div class="panel-body" >
                <form id="signupform" class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Fullname</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Fullname" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="col-md-4 control-label">Confirm password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat your password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9" style="diplay: flex;justify-content: space-between;" >
                            {{ csrf_field() }}
                            <button  id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                            <div style="float: right;margin-top: 1rem; margin-left: 0 !important"><a href="{{route('login')}}" ><i>already have an account</i></a></div>
                        </div>
                    </div>

                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include("partials.footer")

</body>
</html>
