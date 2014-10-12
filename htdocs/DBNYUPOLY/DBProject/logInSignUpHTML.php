<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            h1{
                color: white;
                font-family: "Comic Sans MS";
            }
            h2{
                color: indigo;
                font-family: Comic Sans MS;
            }
            h3{
                color: skyblue;
                font-family: "Buxton Sketch";
            }
            input[type="text"]{
                width:150px;
                margin-bottom:10px;
                background-color:whitesmoke;
                text-shadow: 1px 0px 15px rgba(0, 16, 255, 0.5);
            }
            input[type="submit"]{
                width:150px;
                height: 50px;
                font-size: 22px;
                color: white;
                font-family: "Buxton Sketch";
                background-color:greenyellow;
                text-shadow: 1px 0px 15px rgba(0, 16, 255, 0.5);
            }
        </style>
        <meta charset="UTF-8">
        <title>v2 Adventures</title>
    </head>
    <body style="background-color: windowframe;">
        <h1 style="background-color: skyblue;"><b> v2 adventures</b></h1>
        <h3 style="background-color: whitesmoke;"><b>connect with friends and the world around you</b></h3>
        <br><br>
        
        <form action ="logInPHP_HTML.php" method="POST">
            <input type="text" name= "username" value="Username" required>
            <input type="text" name="upass" value="Password" required>
            <br>
            <input type="submit" name="login" value="Log In">
            <br><br>
        </form>
        
        <form action ="signUpPHP_HTML.php" method="POST">
            <h2 style="background-color: whitesmoke;">Sign Up</h2>
            <input type="text" name= "ufname" value= "First Name" required>
            <input type="text" name="ulname" value="Last Name" required>
            <input type="text" name="uage" value="Age" required>
            <br><br>
            <input type="text" name="ucity" value="City" required>
            <input type="text" name="ustate" value="State" required>
            <input type="text" name="ucountry" value="Country" required>
            <br><br>
            <input type="text" name="username" value="Username" required>
            <input type="text" name="upass" value="Password" required>
            <br>
            <input type="submit" name="signup" value="Sign Up">
        </form>
    </body>
</html>