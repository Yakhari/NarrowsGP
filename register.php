<?php
    session_start();
    include"conn.php";
?>

<?php
//Run when the SignUp button on the form is hit 
  if(isset($_POST['SignUp'])) {	
//Assign a variable to each of the fields on the form. Ensure the values match the form field names exactly
	$FName = $_POST['FirstName'];
	$LName = $_POST['LastName'];
	$User = $_POST['UserName'];
	$Email = $_POST['Email'];	
	$Password = $_POST['Password'];
    $Bio = $_POST['Bio'];
	//$file = $_FILES['file']['name'];

//Use the INSERT INTO statement to insert each of the values from the form to a new record in the members table 
	$sql = $conn->query("INSERT INTO members (first_name, last_name, user_name, email, password, bio) Values('$FName','$LName','$User','$Email','$Password','$Bio')");
	
//specify the directory where the file is going to be placed	
//	$target_path = "uploads/"; 
//$target_file specifies the path of the file to be uploaded	
//	$target_file = $target_path . basename($_FILES['file']['name']); 
// if everything is ok, try to upload file	
//	move_uploaded_file($_FILES['file']['tmp_name'], $target_file); 

//Use the header function to redirect users to the login page	
	header('Location: login.php');
  }  
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
                <a href="Login.php">Log-in</a>
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
                <form id="RegisterForm" name="RegisterForm" method="post" action="" enctype="multipart/form-data">
                <h2>Welcome!</h2>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
                <div class="FirstName"><input name="FirstName" type="text" required="required" class="textfield" id="FirstName" placeholder="First Name"></div>
                <div class="LastName"><input name="LastName" type="text" required="required" class="textfield" id="LastName" placeholder="Last Name"></div>
                <div class="Email"><input name="Email" type="text" required="required" class="textfield" id="Email" placeholder="Email"></div>         
                <div class="UserName"><input name="UserName" type="text" required="required" class="textfield" id="UserName" placeholder="Username"></div>
                <div class="Password"><input name="Password" type="password" required="required" class="textfield" id="password" placeholder="Password"></div>
                <div class="Bio"><input name="Bio" type="text" class="textfield" id="Bio" placeholder="Bio"></div>
                <!-- <div class="Avatar"><input name="file" type="file" id="avatar"></div> -->
                <div class="Login"><input name="SignUp" type="submit" class="button" id="SignUp" value="Sign Up"></div>    
                </form>
                <h5>Already have an account?</h5>
                <div class="link">
                    <h5>Log in with it <a href="login.php">here!</a></h5>
                </div>
            </div>
            <div class="Footer">
                <p>Narrows GP Racing - 2021</p>
            </div>
        </div>
    </body>






</html>

