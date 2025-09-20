 <?php
 
 // Database variables
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "hospital_records";

    // Connects to the database.
    $dbConnect = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

    if($dbConnect->connect_error)
    {
        die("Connection failed: " . $dbConnect->connect_error);
    }
 ?>