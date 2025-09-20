<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>KIMOX HOSPITAL</h2>
        <nav>
            <a href="#"><button>Home</button></a>
            <a href="#"><button>Services</button></a>
            <a href="#"><button>About Us</button></a>
            <a href="register.php"><button>Register</button></a>
        </nav>
        
    </div>
    <div class="container">
        <form action="" method="POST">
        <h1 id="login">LOGIN</h1>
        <input type="text" name="user_id" placeholder="User ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" id="btn" required>

        <p>New user? <a href="register.php">Register</a></p>
    </form>
    </div>
</body>
</html>

<?php

    include 'dbConnect.php';


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        // Input Data From HTML form
        $userId = $_POST["user_id"];
        $userPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // Prepared statement prevents SQL injection attack
        $stmt = $dbConnect->prepare("SELECT user_id, password FROM registration_data WHERE user_id = ? AND password = ?");
        $stmt->bind_param("ss", $userId, $userPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()){
            header("LOCATION:dashboard.php");
        }
        else{
            echo "Wrong Credentials";
        }
        $stmt->close();
    }
?>

