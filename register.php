<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         // Include the database configuration file to establish a connection
         include("php/config.php");// Config.php

         // Check if the form is submitted
         if(isset($_POST['submit'])){
             // Retrieve form data and assign it to variables
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
        // If the email exists in the database, display an error message
         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
                  // Provide a button to navigate back to the registration form
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{
           // Insert the user's information into the database 
            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");
            // Display a success message and provide a login button
            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>
<!-- HTML for the registration form -->
            <header>Sign Up</header>
            <form action="" method="post">
                <!--Username Input -->
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
                 <!--Email Input -->
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                 <!--Age Input -->
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                 <!--Password Input -->
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                 <!--Submit button -->
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                 <!-- Link to sign-in page -->
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>