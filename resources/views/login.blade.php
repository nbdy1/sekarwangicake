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