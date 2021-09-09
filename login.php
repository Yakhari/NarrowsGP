<?php
    include"conn.php";
?>

<?php
//test whether the LogIn button on this form has been hit
  if(isset($_POST['LogIn'])){  
	  
//Assign variables to the Email and Password values entered on the form	  
	$LoginUser = $_POST['Username'];
	$LoginPassword = $_POST['Password'];

//Look for a matching record in the members table 
//and return the records as an array
	$result = $conn->query("select * from members 
	where user_name='$LoginUser' and password='$LoginPassword'");
	$row = $result->fetch_array();
	
//Assign the email, password and user_id from the array to variables	
	$Email=$row['email'];
    $user_name=$row['user_name'];
	$id=$row['user_id'];

//Assign a Session Variable to each field we want to reuse in this session 
	$_SESSION['UserID'] = $row['user_id'];	
	$_SESSION["FirstName"] = $row['first_name'];
	$_SESSION["LastName"] = $row['last_name'];	
	$_SESSION["MembersName"] = $row['first_name'];
	$_SESSION["Email"] = $row['email'];	
	$_SESSION["Bio"] = $row['bio'];
	$_SESSION["Password"] = $row['password'];	

	// $_SESSION["Avatar"] = $row['avatar'];

//Checking the values entered on the login form against the values in the database. 
//If they match direct the user to the members page, else generate an error
    if($LoginUser==$user_name && $LoginPassword==$password)
    {
?>
    <script>window.location ="home.php?id=<?php echo $row;?>";</script>
<?php
    }
    else{
?>
    <script>alert('User Name or Password is Incorrect');</script>
<?php
    }

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
                <form id="LogInForm" name="LogInForm" method="post" action="">  
                    <div class="Username"><input name="Username" type="text" required="required" class="textfield" id="Username" placeholder="Username"></div>
                    <div class="Password"><input name="Password" type="password" required="required" class="textfield" id="password" placeholder="Password"></div>
                    <div class="Login"><input name="LogIn" type="submit" class="button" id="LogIn" value="Log In"></div>    
                </form> 
                <h5>Dont have a account?</h5>
                <h5>Create one <a href="register.php">here!</a></h5>
            </div>
            <div class="Footer">
                <p>Narrows GP Racing - 2021</p>
            </div>
        </div>
    </body>






</html>

