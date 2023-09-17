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

<div class="w3-border-0" style="height:50px;width:100%">
<br><br>
  <p align="center" style="font-weight:bolder">Take any of our test and test your knowledge.</p>
</div>
<div class="w3-row">

     <div class="w3-half">
        <div class="w3-border-0" style="height:200px;width:100%">
        <br><br>
        <center>
       <img src="/images/html.png" alt="mathematics" style="height:120px;width:80%">
       </center>
       </div>
     </div>
     <div class="w3-half">
     <div class="w3-border-0" style="height:200px;width:100%">
     <br><br>
     <center>
     <img src="/images/css.png" alt="mathematics" style="height:120px;width:80%">
     </center>
     </div>
     </div>
</div>
<br>
<div class="w3-row">

     <div class="w3-half">
        <div class="w3-border-0" style="height:200px;width:100%">
        <br><br>
        <center>
       <img src="/images/javascript.jpeg" alt="physics" style="height:120px;width:80%">
       </center>
       </div>
     </div>
     <div class="w3-half">
     <div class="w3-border-0" style="height:200px;width:100%">
     <br><br>
     <center>
     <img src="/images/php.png" alt="chemistry" style="height:120px;width:80%">
     </center>
     </div>
     </div>
</div>
</div>
</body>
</html>




