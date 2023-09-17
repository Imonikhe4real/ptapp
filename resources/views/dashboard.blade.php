<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
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

<a href="#" class="btn btn-default" style="background-color:yellow;font-weight:bolder;">Edit</a>
<div class="w3-border-0" align="center">
    <br>
    <table class="table table-bordered table-striped">
    <tr>
    <td align="center"><b>Firstname :</b> {{ Auth::user()->firstname }}</td>
    </tr>
    <tr>
    <td align="center"><b>Middlename:</b> {{ Auth::user()->middlename }}</td>
    </tr>
    <tr>
    <td align="center"><b>Lastname :</b> {{ Auth::user()->lastname }}</td>
    </tr>
    <tr>
    <td align="center"><b>Email :</b> {{ Auth::user()->email }}</td>
    </tr>
    <tr>
    <td align="center"><b>Phone :</b> {{ Auth::user()->phone }}</td> 
    </tr>
    <tr>
    <td align="center"><b>Username :</b> {{ Auth::user()->username }}</td> 
    </tr>
    <tr>
    <td align="center"><b>Address :</b> {{ Auth::user()->address }}</td>
    </tr>
    </table>
</div>
</div>
</body>
</html>
