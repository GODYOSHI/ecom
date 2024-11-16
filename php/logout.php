<?php
 // Start the session to allow access to session data
      session_start();
 // Destroy all session data, effectively logging the user out
      session_destroy();
 // Redirect the user to the homepage (index.php) in the parent directory
      header("Location: ../index.php");
      
?>