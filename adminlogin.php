<?php
session_start();
?>
<head>
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
<?php
include "function/database_functions.php";
if(isset($_POST['login'])){
    $sql = "SELECT * FROM sekarwangiadmin 
    where admin_email='".$_POST['email']."' and
    admin_password='".$_POST['password']."'";
    
    $stmt = mysqlx_query($sql);

    if($row = $stmt ->fetch()){
        $_SESSION["email"]=$_POST["password"];
        header('Location: testindex.php');
    }
    else {
        echo "Wrong login or Password!";
        header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ');
    }
    }
?>
<html>
    <body>
        <div class="container">
            <div class="rectangle">
                <div class="loginform">
                    <h2 class="formtitle">Admin</h2>
                    <form method="post" action="adminlogin.php" >
                        <p class="textboxtitle">Admin Username:</p>
                        <input type="text" name="email" class="textbox" required placeholder="Enter your email">
                        <br/>
                        <p class="textboxtitle">Admin Password:</p>
                        <input type="password" name="password" class="textbox" required placeholder="Enter the Password">
                        <br/><br/><br/><br/>
                        <input type="submit" class="loginbutton" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>