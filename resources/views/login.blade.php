<head>
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <style>
        html{
            background-color:#eeeeee;
            font-family:'DM Sans';        
        }
        .rectangle{
            display: flex;
            width: 936px;
            height:645px;
            margin:2rem;
            border-radius:10px;
            border-width: 3px;
            border-color: #830D98;
            border-style:solid;
            box-shadow: 3px 3px #830D98;
            background-color:#FFFFFF;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .loginform{
            padding-left:12%;
            text-align:center;
            vertical-align: center;
        }
        .formtitle{
            font-family:'Baloo';
            font-size:58px;
        }
        .textboxtitle{
            font-family:'DM Sans';
            font-size:24px;
            text-align:left;
        }
        .textbox{
            width:709px;
            height:68px;
            border-radius:20px;
            border-color:#C957F6;
            border-width:4px;
        }
        .loginbutton{
            width:110px;
            height:55px;
            font-family:'DM Sans';
            font-weight:bold;
            font-size:24px;
            color:#830D98;
            background-color:#E7A1D5;
            border-radius:24px;
            border-color:#830D98;
            border-width:3px;
            box-shadow:3px 3px #830D98;
            padding-left:1px;
        }
        ::placeholder{
            font-family:'DM Sans';
            font-size:24px;
            vertical-align:center;
        }
        input{
            font-size:24px;
            padding-left:15px;
            font-family:'DM Sans';
        }
        .loginbutton:hover{
            background-color:#b878a7;
        }
    </style>
</head>
<<<<<<< Updated upstream
<html>
    <body>
        <div class="container">
            <div class="rectangle">
                @if(session()->has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('loginError'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="loginform">
                    <h2 class="formtitle">Login Admin</h2>
                    <form method="post" action="/login" >
                        @csrf
                        <p class="textboxtitle">Username:</p>
                        <input type="text" name="username" class="textbox @error('username') is-invalid @enderror" required placeholder="Username" autofocus required>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ "Please type in your username" }}
                            </div>
                        @enderror
                        <br/>
                        <p class="textboxtitle">Password:</p>
                        <input type="password" name="password" class="textbox" required placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ "Please type in your password" }}
                            </div>
                        @enderror
                        <br/><br/><br/><br/>
                        <input type="submit" class="loginbutton" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
=======
<body>
    <h2>Admin Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
@endsection
@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.submitbtn {
  width: auto;
  margin-left: 45%;
  background-color: green;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

#form {
    justify-content: center;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<br>
<br>
<br>
<form action="/login" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <button type="button" class="submitbtn">Submit</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<br>
<br>
</body>
</html>

@endsection
>>>>>>> Stashed changes
