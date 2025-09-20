<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h2>KIMOX HOSPITAL</h2>
        <nav>
            <a href="index.php"><button>Home</button></a>
            <a href="#"><button>Services</button></a>
            <a href="register.php"><button>Register</button></a>
            <a href="delete.php"><button>Delete Records</button></a>
        </nav>
    </header>

    <div class="container">
        <h1 class="dash_h">WELCOME TO THE DASHBOARD</h1>
        <form action="" method="POST">
        <h1 id="login">UPDATE FORM</h1>
        <input type="text" name="user_id" placeholder="User ID" required>
        <input type="email" name="email" placeholder="Email address" required>
        <input type="text" name="mobile_number" placeholder="Mobile Number" required>
        <input type="text" name="physical_address" placeholder="Physical Address" required>
        <input type="password" name="password" placeholder="New Password" required>
        <input type="submit" value="Update" id="btn" required>

        <p>Want to delete records? <a href="delete.php">Click Here</a></p>
    </form>


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
        $email = $_POST["email"];
        $mobileNumber = $_POST["mobile_number"];
        $address = $_POST["physical_address"];
        $newPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
        
        
        // Prepared statement prevents SQL injection attack
        $stmt = $dbConnect->prepare("UPDATE registration_data SET email = ?, mobile_number = ?, physical_address = ? , password = ? WHERE user_id = ?");
        $stmt->bind_param("sssss", $email, $mobileNumber, $address, $newPassword, $user);

        if ($stmt->execute()){
            if($stmt->affected_rows > 0)
            {
                echo "Records updated sucessfully";
            }
            else{
                echo "No updates were updated";
            }
        }
        else{
            echo "Error". $stmt->error;
        }
    }
?>