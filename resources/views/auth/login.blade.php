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
  <center>Munique Programming Computer Based Test App</center>
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
  <a href="{{ url('/') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
  @if (Route::has('login'))
  @auth
  @else
  <a href="{{ route('login') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Login</a>
  @if (Route::has('register'))
  <a href="{{ route('register') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Register</a>
  @endif
@endauth
@endif
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
<div class="w3-border-0" style="height:200px;width:100%">

</div>
<br>
<div class="w3-row">
<div class="w3-half">
  <img src="/images/program9.jpg"  style="width:100%;height:380px;">
</div>
<div class="w3-half">
<center>
<div class="w3-border w3-black w3-text-white" style="width:100%;height:30px;font-weight:bolder;">{{ __('Login') }}</div>
        <div class="w3-border-0  w3-purple w3-text-white"  style="height:350px;width:100%;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <div>
                            <label for="email" style="font-weight:bolder">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="w3-input w3-border @error('email') is-invalid @enderror" name="email" style="width:40%;" value="{{ old('email') }}" required="required" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" style="font-weight:bolder;">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="w3-input w3-border @error('password') is-invalid @enderror" name="password" style="width
                                :40%" required="required" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div>
                                <button type="submit" class="btn btn-primary" style="background-color:black;color:white;font-weight:bolder">
                                
                                    {{ __('Login') }}
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<div class="w3-border-0" style="height:200px;width:100%;">

</div>
 <div class="w3-border-0" style="height:20px;width:100%;background-color:black">

</div>
<footer class="w3-border-0 w3-purple"  style="height:400px;width:100%;">
<br><br><br><br><br><br>
     <center>
		 <b>Copyright &copy 2023 - 2025</b>
	 </center>
     <br><br><br><br><br>
	 <hr>
	 <center><b>Developed by Nafiu Sunday Imonikhe using Laravel Framework</b></center>
</footer>


</body>
</html>
