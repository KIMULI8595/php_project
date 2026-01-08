<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee_Registration_form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h2>KIMOX HOSPITAL</h2>
        <nav>
            <a href="index.php"><button>Home</button></a>
            <a href="#"><button>Services</button></a>
            <a href="#"><button>About Us</button></a>
            <a href="index.php"><button>Login</button></a>
        </nav>
    </header>
    <div class="container">
        <form action="" method="POST">
        <h1 id="heading">REGISTRATION FORM</h1>
        <input type="text" name="user_id" placeholder="User ID" required>
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="date" name="date_of_birth" placeholder="Date of Birth" required>
        <input type="email" name="email" placeholder="Email address" required>
        <input type="text" name="mobile_number" placeholder="Mobile Number" required>
        <input type="text" name="physical_address" placeholder="Physical Address" required>
        <input type="text" name="department" placeholder="Department" required>
        <input type="password" name="password" placeholder="New Password" required>
        <input type="submit" value="Register" id="btn" required>

        <p>Already have an account? <a href="index.php">Sign in</a></p>
    </form>
    </div>
</body>
</html>


<?php
    include 'dbConnect.php';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        // Input Data From HTML form
        $user = $_POST["user_id"];
        $fullName = $_POST["full_name"];
        $DOB = $_POST["date_of_birth"];
        $email = $_POST["email"];
        $mobileNumber = $_POST["mobile_number"];
        $address = $_POST["physical_address"];
        $department = $_POST["department"];
        $newPassword = $_POST["password"];
        
        // Prepared statement prevents SQL injection attack
        $stmt = $dbConnect->prepare("INSERT INTO registration_data (user_id, full_name, date_of_birth, email, mobile_number, physical_address, department, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $user, $fullName, $DOB, $email, $mobileNumber, $address, $department, $newPassword);

        if ($stmt->execute()){
            header("LOCATION:dashboard.php");
            exit;
        }
        else{
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

?>
