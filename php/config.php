<?php
 // Establish a connection to the MySQL database
    // Parameters:
    // "localhost" - The hostname where the database server is running
    // "root" - The username for the database
    // "" - The password for the database user (empty in this case)
    // "login2" - The name of the database to connect to 
 
 $con = mysqli_connect("localhost","root","","login2") or die("Couldn't connect");

?>