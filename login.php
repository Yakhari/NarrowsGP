<?php
    include"conn.php";
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <title>Narrows GP</title>
        <link rel="stylesheet" href ="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=STIX+Two+Text&display=swap" rel="stylesheet">
        <link rel="icon" type="image/ico" href="logo.ico"/>
    </head>
    <body style="background-color:black;">
        <div class="container">
            <div class="Title-Left">
                <h1>Narrows</h1>
            </div>
            <div class="Title-Right">
                <h1>Racing</h1>
            </div>
            <div class="Logo">
                <img src="logo.png">
            </div>
            
            <div class="Navbar">
                <a href="Home.php">Home</a>
                <a href="Gallery.php">Gallery</a>
                <a href="Careers.php">Careers</a>
                <a href="Forums.php">Forums</a>
                <a href="Contacts.php">Contacts</a>
                <a class ="active" href="login.php">Register/Log-in</a>
            </div>
            <div class="Arrow-Right">
                <div class="arrow">
                    <div class="line"></div>
                    <div class="point"></div>
                </div>
            </div>
            <div class="Arrow-Left">
                <div class="arrowL">
                    <div class="lineL"></div>
                    <div class="pointL"></div>
                </div>
            </div>
            <div class="Article">
                <h2>Please Log-In</h2>
                <div class="Email"><input name="Email" type="text" required="required" class="textfield" id="email" placeholder="Email"></div>
                <div class="Password"><input name="Password" type="password" required="required" class="textfield" id="password" placeholder="Password"></div>
                <div class="Login"><input name="LogIn" type="submit" class="button" id="LogIn" value="Log In"></div>    
                <h5>Dont have a account?</h5>
                <h5>Create one <a href="register.php">here!</a></h5>
            </div>
            <div class="Footer">
                <p>Narrows GP Racing - 2021</p>
            </div>
        </div>
    </body>






</html>

