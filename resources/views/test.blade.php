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
</div>
<br>
<div class="w3-row">
    <center>
   <div class="w3-half">
       <div class="w3-bordere-0" style="height:200px;width:50%;background-color:orange">
           <br><br>
           <p style="font-weight:bolder;">HTML</p>
           <br>
           <a href="/html" style="color:white;font-weight:bolder;text-decoration:none;background-color:black;" class="btn btn-default">Start</a>
       </div>
   </div>
   <div class="w3-half">
       <div class="w3-bordere-0" style="height:200px;width:50%;background-color:green">
       <br><br>
           <p style="font-weight:bolder;color:white">CSS</p>
           <br>
           <a href="/cssfile" style="color:white;font-weight:bolder;text-decoration:none;background-color:black;" class="btn btn-default">Start</a>
       </div>
   </div>
</div>
</center>
<br>
<div class="w3-row">
    <center>
   <div class="w3-half">
       <div class="w3-bordere-0" style="height:200px;width:50%;background-color:purple">
       <br><br>
           <p style="font-weight:bolder;color:white">Javascript</p>
           <br>
           <a href="/javascript" style="color:white;font-weight:bolder;text-decoration:none;background-color:black;" class="btn btn-default">Start</a>
       </div>
   </div>
   <div class="w3-half">
       <div class="w3-bordere-0" style="height:200px;width:50%;background-color:red">
       <br><br>
           <p style="font-weight:bolder;color:white">PHP</p>
           <br>
           <a href="/php" style="color:white;font-weight:bolder;text-decoration:none;background-color:black;" class="btn btn-default">Start</a>
       </div>
   </div>
</div>
</center>
</div>
</div>
</body>
</html>