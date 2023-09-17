<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/w3.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>        
    </head>
    <body>
    <div class="w3-top">
  <div id="header" class="w3-border-0 w3-purple" style="height:100px;width:auto;color:white;font-size:20px;font-weight:bolder;align-items:center;">
  <br>
  <center>Munique Porgramming School Test App</center>
</div>
  <div class="w3-bar w3-black">
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
  @if (Route::has('login'))
  @auth
  @else
  <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Login</a>
  @if (Route::has('register'))
  <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Register</a>
  @endif
@endauth
@endif
    <a href="/contact" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>
<div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
  <a href="{{ url('/home') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
  <a href="{{ route('login') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Login</a>
  <a href="{{ route('register') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Register</a>
<a href="/contact" class="w3-bar-item w3-button" style="font-weight:bolder;">Contact</a>
</div>
<script>
   function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</div>
<div  class="w3-border-0 w3-light-grey" style="height:300px;width:100%;">
  <br><br><br><br>
   <div id="greetings"></div>
   <div id="greetingswrt"></div>
</div>
<div class="w3-row">

<div class="w3-half">
  <div class="w3-border-0" style="height:300px;width:100%"> 
     <br><br>
     <center>
     <img src="/images/program1.jpg" alt="program1" style="height:200px;width:80%;">
     </center>
  </div>
</div>
<div class="w3-half">
<div class="w3-border-0" style="height:300px;width:100%;"> 
    <br><br><br><br>
    <div id="break"></div>
    <div id="breakwrt"></div>
</div>
</div>
</div>
<div class="w3-border-0" style="height:30px;width:100%;"></div>
<div class="w3-row">

<div class="w3-half">
  <div class="w3-border-0" style="height:300px;width:100%"> 
  <br><br><br><br>
    <div id="prepare"></div>
    <div id="preparewrt"></div>
  </div>
</div>
<div class="w3-half">
<div class="w3-border-0" style="height:300px;width:100%;"> 
<br><br>
     <center>
     <img src="/images/program3.jpg" alt="program1" style="height:200px;width:80%;">
     </center>
</div>
</div>
</div>
<div class="w3-border-0" style="height:30px;width:100%;"></div>
<div class="w3-row">

<div class="w3-half">
  <div class="w3-border-0" style="height:300px;width:100%"> 
     <br><br>
     <center>
     <img src="/images/program6.jpg" alt="program1" style="height:200px;width:80%;">
     </center>
  </div>
</div>
<div class="w3-half">
<div class="w3-border-0" style="height:300px;width:100%;"> 
<br><br><br><br>
  <div id="teach"></div>
  <div id="teachwrt"></div>
</div>
</div>
</div>
<div class="w3-border-0" style="height:30px;width:100%;"></div>

<div class="w3-border-0" style="height:200px;width:100%;">

</div>
<div class="w3-border-0" style="height:20px;width:100%;background-color:black"></div>
<footer class="w3-border-0 w3-purple"  style="height:400px;width:100%;">
<br><br><br><br><br><br>
 <center>
 <b>Copyright &copy 2023 - 2025</b>
</center>
 <br><br><br><br><br>
<hr>
<center><b>Developed by Nafiu Sunday Imonikhe using Laravel Framework</b></center>
</footer>

<script>
document.getElementById('header').innerHTML ='<center><b><br>Munique Programming Computer Based Test App</b></center>';
document.getElementById('greetings').innerHTML ='<br><br><br><center><b>About Us</b></center>';
document.getElementById('greetingswrt').innerHTML = '<center>Munique Programming  Test App is was designed and developed for the purpose of writing programming test through the means of computer system and developed by Nafiu Sunday Imonikhe .</center>';
 document.getElementById('break').innerHTML = '<center><b><u>Lisa on Break after Javascript Test</u></b></center>';
 document.getElementById('breakwrt').innerHTML = '<center>Lisa is a Javascript student who is on break after doing a lot of coding in javascript and she has taken the javascript test.</center>';
 document.getElementById('prepare').innerHTML = '<center><b><u>Kim Preparing for Test</u></b></center>';
 document.getElementById('preparewrt').innerHTML = '<center>Kim is a PHP  student who is seriously preparing for the  PHP Test</center>';
 document.getElementById('teach').innerHTML = '<center><b><u>Tricia teaching Tony <u></u></b></center>';
 document.getElementById('teachwrt').innerHTML = '<center>Tricia  teaching and preparing tony for the HTML and CSS test by explaining the basics and advanced aspect to tony.</center>';
</script>


</body>
</html>









