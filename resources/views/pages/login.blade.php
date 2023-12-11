<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <title>Admin Login</title>
    </head>
<style>
body {
    background: url('images/bg_3.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 250px;
    height: 36px;
    margin: 70px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ffd700;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff  20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff  20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff  20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff  20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ffd700;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ffd700;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid black;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ffbb2f;
}

</style>
    <body >
{{-- @if ($errors->any())
   <div class="bg-red-200 p-3">
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>
  </div> 
@endif --}}
<!--Login Section-->
<div>
    <div class="logo"></div>
    <div class="login-block">
        <h1>Login Admin</h1>
        <form action="/dashboard" method="">
         <label>Email </label>
        <input type="email" name="email" placeholder="Admin Email" id="username" />
        <label>Password </label>
        <input type="password" name="password" placeholder="Admin Password" id="password" />
        <button type="submit">Login</button>
        </form>
       
    </div>


</div>

<!---->

    </body>
</html>
