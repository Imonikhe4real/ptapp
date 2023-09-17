<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
   <link rel="stylesheet" type="text/css" href="/css/w3.css">
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="sidenav">
   <a href="/dashboard">Dashboard</a>
   <a href="/profile">Profile</a>
   <a href="/test">Test</a>
   <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>
</div>
<div class="main">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="font-weight:bolder;">{{ __('Dashboard') }}</div>
                <div align="center">
                <br>
                    <b>Username:</b> {{ Auth::user()->username }}<br><br>
                    <b>Email:</b> {{ Auth::user()->email }}  
                </div> 
                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <center>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf 

    </form>
        </center>
            </div>
        </div>
    </div>
</div>
<br><br>
<b>
@if(\Session::has('fullname'))
                        <div class="alert alert-success">
                             <br>
                                <center><p>Full Name : {!! \Session::get('fullname') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer1'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question1 : {!! \Session::get('answer1') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer2'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question2 : {!! \Session::get('answer2') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer3'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question3 : {!! \Session::get('answer3') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer4'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question4 : {!! \Session::get('answer4') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer5'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question5 : {!! \Session::get('answer5') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer6'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question6 : {!! \Session::get('answer6') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>

                        <b>
                @if(\Session::has('answer7'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question7 : {!! \Session::get('answer7') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer8'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question8 : {!! \Session::get('answer8') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer9'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question9 : {!! \Session::get('answer9') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
                        <b>
                @if(\Session::has('answer10'))
                        <div class="alert alert-success">
                             <br>
                            <center><p>Answer to your Question10 : {!! \Session::get('answer10') !!}</p></center>
                             
                        </div>
                        @endif
                        </b>
</div>
</body>
</html>
