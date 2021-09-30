<?php
    include "conn.php";
    session_start()
?>


<!DOCTYPE html>
<html lang="eng">
<head>
        <meta charset="utf-8">
        <title>Narrows GP Forums</title>
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
                <a href="Gallery.php">Forums home page</a>
                <a href="create_topic.php">Create Topic</a>
                <a href="create_cat.php">Create Catagory</a>
                <a href="Contacts.php">Contacts</a>
                <a href="logout.php">Log-out</a>
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
                <div class="textbox">
                    <?php
              	        if(isset($_SESSION["loggedin"]))
              	        {
              	 	    echo '<h4>Hello ' . $_SESSION['username'] . '. Not you? <a href="logout.php">Log out</a></h4>';
              	        }
              	        else
              	        {
                        ?>
              		    <script>
                            if (window.confirm('To use the Forums, please Log-In.')) 
                            {
                            window.location.href='login.php';
                            }
                            else
                            {
                            window.location.href='home.php';
                            }
                        </script>
              	        <?php
                        }
                    ?>
                </div>
                <!-- <div id="userbar">
             
                </div>
		    <div id="content"> --> 