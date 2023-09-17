tml>
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
<form method="POST" action="/javascriptconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">Javascript Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1) What is the extension for Javascript   ?</p><br>
    A. <input type="radio" name="answer1" value=".js"> .js <br>
    B. <input type="radio" name="answer1" value=".sj"> .sj <br>
    C. <input type="radio" name="answer1" value=".jss"> .jss <br>
    D. <input type="radio" name="answer1" value=".j">  .j<br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) How manys can javascript be written ? </p><br>
    A. <input type="radio" name="answer2" value="2"> 2 <br>
    B. <input type="radio" name="answer2" value="3"> 3<br>
    C. <input type="radio" name="answer2" value="4"> 4 <br>
    D. <input type="radio" name="answer2" value="5"> 5 <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) which does not belong to the javascript scripting patterns ? </p><br>
    A. <input type="radio" name="answer3" value="internal scripting"> internal scripting <br>
    B. <input type="radio" name="answer3" value="external scripting"> external scripting  <br>
    C. <input type="radio" name="answer3" value="inline scripting"> inline scripting <br>
    D. <input type="radio" name="answer3" value="none "> none of the above  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) Which of this does not belong to javascript framework ?</p><br>
    A. <input type="radio" name="answer4" value="React">React  Framework<br>
    B. <input type="radio" name="answer4" value="Vue">  Vue Framework<br>
    C. <input type="radio" name="answer4" value="Angular"> Angular  Framework<br>
    D. <input type="radio" name="answer4" value="Grace">  Grace Framework<br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) which of the following is not true about Javascript ? </p><br>
    A. <input type="radio" name="answer5" value="backend language"> backend language  <br>
    B. <input type="radio" name="answer5" value="frontend language"> frontend language <br>
    C. <input type="radio" name="answer5" value="used for web development"> used for web development <br>
    D. <input type="radio" name="answer5" value="none"> none <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) Which of the following does not belong to the attribute of the script tag ?</p><br>
    A. <input type="radio" name="answer6" value="src"> src <br>
    B. <input type="radio" name="answer6" value="type"> type  <br>
    C. <input type="radio" name="answer6" value="link"> link <br>
    D. <input type="radio" name="answer6" value="none"> none <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) which of this is not used for out in javascript ? </p><br>
    A. <input type="radio" name="answer7" value="alert"> alert <br>
    B. <input type="radio" name="answer7" value="document.write"> document.write <br>
    C. <input type="radio" name="answer7" value="document.getElementById"> document.getElementById <br>
    D. <input type="radio" name="answer7" value="echo"> echo  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) What can javascript be used for ? </p><br>
    A. <input type="radio" name="answer8" value="Games"> Games <br>
    B. <input type="radio" name="answer8" value="Web development">  Web development <br>
    C. <input type="radio" name="answer8" value="Mobile development"> Mobile development  <br>
    D. <input type="radio" name="answer8" value="all of the above"> all of the above <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9)  Who invented Javascript ? </p><br>
    A. <input type="radio" name="answer9" value="Nicolas Cage"> Nicolas Cage  <br>
    B. <input type="radio" name="answer9" value="Brenda Eich"> Brenda  Eich<br>
    C. <input type="radio" name="answer9" value="Lugard Cage"> Lugard Cage <br>
    D. <input type="radio" name="answer9" value="Ben waltson"> Ben waltson <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) Does javascript have a backend framework ? </p><br>
    A. <input type="radio" name="answer10" value="Yes"> Yes <br>
    B. <input type="radio" name="answer10" value="No"> No <br>
    C. <input type="radio" name="answer10" value="probability"> probability  <br>
    D. <input type="radio" name="answer10" value="not sure"> not sure  <br>
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