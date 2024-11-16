<?php
//Starts the session for tracking user login 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 

             // Include the database configuration file for connection
              include("php/config.php");
              // Check if the login form is submitted 
              if(isset($_POST['submit'])){

                  // Get user input and Sanitize(security) to prevent SQL injection
                $email = mysqli_real_escape_string($con,$_POST['email']);// Clean the email input
                $password = mysqli_real_escape_string($con,$_POST['password']);//Clean the password

                // Search the database for a user with matching email and password
                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");

                // Get the resulting row as an associative array
                $row = mysqli_fetch_assoc($result);

                // Check if a user was found
                if(is_array($row) && !empty($row)){
                     // Save user details in session variables for future use
                    $_SESSION['valid'] = $row['Email'];//store email
                    $_SESSION['username'] = $row['Username'];//store username
                    $_SESSION['age'] = $row['Age'];//store age
                    $_SESSION['id'] = $row['Id'];// store user id
                }else{
                    // If no matching user is found, show an error message
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                    // Provide a button to go back to the login page
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                 // If login is successful and session variables are set, redirect to the home page
                if(isset($_SESSION['valid'])){
                    header("Location: home.php ");
                }
              }else{ // If the form hasn't been submitted yet, show the login form

            
            ?>
            <!-- Header for the login form -->
            <header>Login</header>
            <!-- The login form where users can enter their email and password -->
            <form action="" method="post">
                <!-- Input field for email -->
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <!-- Input field for password -->
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                 <!-- Submit button to send the form -->
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <!-- Link to the registration page for users without an account -->
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>