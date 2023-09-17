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
<form method="POST" action="/htmlconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">HTML Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1) Which of the following denotes HyperText Markup Language  ?</p><br>
    A. <input type="radio" name="answer1" value="HTTML"> HTTML  <br>
    B. <input type="radio" name="answer1" value="HTML"> HTML <br>
    C. <input type="radio" name="answer1" value="HML"> HML <br>
    D. <input type="radio" name="answer1" value="HTL"> HTL <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) Where do we place html syntax in our text editor  ?</p><br>
    A. <input type="radio" name="answer2" value="top and bottom">top and end of whole syntax<br>
    B. <input type="radio" name="answer2" value="in between the body">in between the body <br>
    C. <input type="radio" name="answer2" value="none"> none of the above <br>
    D. <input type="radio" name="answer2" value="all"> all of the above <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) which of the following does not belong to the font family ?</p><br>
    A. <input type="radio" name="answer3" value="font weight"> font weight <br>
    B. <input type="radio" name="answer3" value="font size"> font size  <br>
    C. <input type="radio" name="answer3" value="font border"> font border  <br>
    D. <input type="radio" name="answer3" value="font color"> font color  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) Which of the following is true break tag ? </p><br>
    A. <input type="radio" name="answer4" value="it is used for next line">it is used for next line  <br>
    B. <input type="radio" name="answer4" value="it is used for putting quote"> it is used for putting quote <br>
    C. <input type="radio" name="answer4" value="none"> none of the above <br>
    D. <input type="radio" name="answer4" value="all"> all of the above  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) What is bgcolor used for in HTMl ? </p><br>
    A. <input type="radio" name="answer5" value="used for text color"> used for text color <br>
    B. <input type="radio" name="answer5" value="used for background color"> used for background color  <br>
    C. <input type="radio" name="answer5" value="none"> none of the above  <br>
    D. <input type="radio" name="answer5" value="all"> all of the above <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) What is section used for in HTML  ? </p><br>
    A. <input type="radio" name="answer6" value="To divide written text"> To divide written text <br>
    B. <input type="radio" name="answer6" value="To combine written text"> To combine written text <br>
    C. <input type="radio" name="answer6" value="none"> none of the above  <br>
    D. <input type="radio" name="answer6" value="all"> all of the above  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) What is the attribute for img used for image in HTML  ? </p><br>
    A. <input type="radio" name="answer7" value="src"> src <br>
    B. <input type="radio" name="answer7" value="script"> script <br>
    C. <input type="radio" name="answer7" value="type"> type <br>
    D. <input type="radio" name="answer7" value="link"> link <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) how types of Heading do with have in HTMl ?  </p><br>
    A. <input type="radio" name="answer8" value="6"> 6 <br>
    B. <input type="radio" name="answer8" value="8"> 8 <br>
    C. <input type="radio" name="answer8" value="9"> 9 <br>
    D. <input type="radio" name="answer8" value="10"> 10 <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9) What is the meaning of the s in https  ? </p><br>
    A. <input type="radio" name="answer9" value="secured"> secured <br>
    B. <input type="radio" name="answer9" value="sealed"> sealed <br>
    C. <input type="radio" name="answer9" value="sell"> sell <br>
    D. <input type="radio" name="answer9" value="stitch"> stitch <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) What does the p in https stands for ?  </p><br>
    A. <input type="radio" name="answer10" value="post"> post <br>
    B. <input type="radio" name="answer10" value="protocol"> protocol <br>
    C. <input type="radio" name="answer10" value="present"> present  <br>
    D. <input type="radio" name="answer10" value="prematurely"> prematurely   <br>
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