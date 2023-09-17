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
<form method="POST" action="/cssconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">CSS Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1) What does CSS mean   ?</p><br>
    A. <input type="radio" name="answer1" value="Cascading style sheet"> Cascading style sheet <br>
    B. <input type="radio" name="answer1" value="Crosss style sheet"> Crosss style sheet <br>
    C. <input type="radio" name="answer1" value="Computer style sheet"> Computer style sheet <br>
    D. <input type="radio" name="answer1" value="Command style sheet"> Command style sheet <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) Which of the following is does not belong to CSS stylings ?</p><br>
    A. <input type="radio" name="answer2" value="inline styling"> inline styling <br>
    B. <input type="radio" name="answer2" value="internal styling"> internal styling <br>
    C. <input type="radio" name="answer2" value="external styling"> external styling <br>
    D. <input type="radio" name="answer2" value="reverse styling"> reverse styling <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) which of the following does not belong to the margin family ? </p><br>
    A. <input type="radio" name="answer3" value="margin-top"> margin-top <br>
    B. <input type="radio" name="answer3" value="margin-right"> margin-right  <br>
    C. <input type="radio" name="answer3" value="margin-bottom"> margin-bottom  <br>
    D. <input type="radio" name="answer3" value="margin-out">  margin-out <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) which of the following does not belown to the font family ? </p><br>
    A. <input type="radio" name="answer4" value="font-weight"> font-weight <br>
    B. <input type="radio" name="answer4" value="font-size"> font-size <br>
    C. <input type="radio" name="answer4" value="font-color"> font-color <br>
    D. <input type="radio" name="answer4" value="font-fade"> font-fade  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) whic of the following does not belong to the background family ?</p><br>
    A. <input type="radio" name="answer5" value="background-color"> background-color <br>
    B. <input type="radio" name="answer5" value="background-image"> background-image <br>
    C. <input type="radio" name="answer5" value="background-repeat"> background-repeat <br>
    D. <input type="radio" name="answer5" value="color"> color  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) which of the following does not belong to the padding family ?</p><br>
    A. <input type="radio" name="answer6" value="padding-top"> padding-top <br>
    B. <input type="radio" name="answer6" value="padding-left"> padding-left <br>
    C. <input type="radio" name="answer6" value="padding-right"> padding-right  <br>
    D. <input type="radio" name="answer6" value="padding-fade"> padding-fade  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) which of the following does not belong to the border style ?  </p><br>
    A. <input type="radio" name="answer7" value="solid"> solid <br>
    B. <input type="radio" name="answer7" value="dotted"> dotted <br>
    C. <input type="radio" name="answer7" value="dashed"> dashed <br>
    D. <input type="radio" name="answer7" value="reverse"> reverse <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) which of the following does not belong to the  text family ? </p><br>
    A. <input type="radio" name="answer8" value="text-align"> text-align <br>
    B. <input type="radio" name="answer8" value="text-decoration"> text-decoration <br>
    C. <input type="radio" name="answer8" value="text-anchor"> text-anchor <br>
    D. <input type="radio" name="answer8" value="text-base"> text-base <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9) what does the # selector represent  in css ? </p><br>
    A. <input type="radio" name="answer9" value="id"> id  <br>
    B. <input type="radio" name="answer9" value="class"> class  <br>
    C. <input type="radio" name="answer9" value="align"> align <br>
    D. <input type="radio" name="answer9" value="style"> style <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) what does the . selector represent in css ?  </p><br>
    A. <input type="radio" name="answer10" value="id"> id <br>
    B. <input type="radio" name="answer10" value="class"> class  <br>
    C. <input type="radio" name="answer10" value="align"> align  <br>
    D. <input type="radio" name="answer10" value="style"> style   <br>
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
