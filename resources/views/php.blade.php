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
<form method="POST" action="/phpconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">PHP Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1) What does OOP stands mean  ?</p><br>
    A. <input type="radio" name="answer1" value="Object Oriented Programming"> Object Oriented Programming <br>
    B. <input type="radio" name="answer1" value="Object Oriented Pascal"> Object Oriented Pascal <br>
    C. <input type="radio" name="answer1" value="Object Oriented Perl"> Object Oriented Perl <br>
    D. <input type="radio" name="answer1" value="Object Oriented Pawn"> Object Oriented Pawn  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) what is echo used for in php ? </p><br>
    A. <input type="radio" name="answer2" value="Ouptut information"> Ouptut information <br>
    B. <input type="radio" name="answer2" value="Echo sounds"> Echo sounds <br>
    C. <input type="radio" name="answer2" value="none"> none of the above  <br>
    D. <input type="radio" name="answer2" value="all"> all of the above  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) Which of this method is not in php ? </p><br>
    A. <input type="radio" name="answer3" value="GET"> GET <br>
    B. <input type="radio" name="answer3" value="POST"> POST  <br>
    C. <input type="radio" name="answer3" value="PUT"> PUT <br>
    D. <input type="radio" name="answer3" value="COME"> COME   <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) What does PDO  mean ?</p><br>
    A. <input type="radio" name="answer4" value="PHP Data Objects"> PHP Data Objects  <br>
    B. <input type="radio" name="answer4" value="Pascal Data Objects"> Pascal Data Objects <br>
    C. <input type="radio" name="answer4" value="Perl Data Objects"> Perl Data Objects  <br>
    D. <input type="radio" name="answer4" value="Pawn Data Objects"> Pawn Data Objects  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) How many database system can PDO work on ? </p><br>
    A. <input type="radio" name="answer5" value="9"> 9 <br>
    B. <input type="radio" name="answer5" value="12"> 12 <br>
    C. <input type="radio" name="answer5" value="15"> 15  <br>
    D. <input type="radio" name="answer5" value="15"> 15 <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) What does MySQL mean ?</p><br>
    A. <input type="radio" name="answer6" value="My Structured Query Language"> My Structured Query Language <br>
    B. <input type="radio" name="answer6" value="My Standard Query Language"> My Standard Query Language  <br>
    C. <input type="radio" name="answer6" value="My Subdomain Query Language"> My Subdomain Query Language <br>
    D. <input type="radio" name="answer6" value="My Steady Query Language"> My Steady Query Language  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) How many types of MySQL do we have ?  </p><br>
    A. <input type="radio" name="answer7" value="3"> 3 <br>
    B. <input type="radio" name="answer7" value="4"> 4 <br>
    C. <input type="radio" name="answer7" value="5"> 5 <br>
    D. <input type="radio" name="answer7" value="6"> 6 <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) Which of the following is used for database in PHP </p><br>
    A. <input type="radio" name="answer8" value="MySQL Workbench"> MySQL Workbench <br>
    B. <input type="radio" name="answer8" value="phpMyAdmin"> phpMyAdmin  <br>
    C. <input type="radio" name="answer8" value="none"> none of the above  <br>
    D. <input type="radio" name="answer8" value="all"> all of the above <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9) Which of the following is not part of the PHP frameworks ? </p><br>
    A. <input type="radio" name="answer9" value="Laravel"> Laravel  <br>
    B. <input type="radio" name="answer9" value="Symfony"> Symfony  <br>
    C. <input type="radio" name="answer9" value="Codeigniter"> Codeigniter <br>
    D. <input type="radio" name="answer9" value="Tester"> Tester <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) Which of the following is not true about PHP ?  </p><br>
    A. <input type="radio" name="answer10" value="server side language"> server side language<br>
    B. <input type="radio" name="answer10" value="backend language"> backend language <br>
    C. <input type="radio" name="answer10" value="frontend language"> frontend language  <br>
    D. <input type="radio" name="answer10" value="none of the above"> none of the above  <br>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
    <input type="submit" name="submit" value="Submit" class="btn btn-success" style="font-weight:bolder
    ;"><br>
</form>
</div>
</body>
</html>
