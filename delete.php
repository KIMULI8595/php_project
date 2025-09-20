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
            <a href="index.php"><button>Login</button></a>
        </nav>
    </header>

    <div class="container">
        <h1 class="dash_h">WELCOME TO THE DASHBOARD</h1>
        <form action="" method="POST">
        <h1 id="login">DELETE USER DATA</h1>
        <input type="text" name="user_id" placeholder="User ID" required>
        <input type="submit" value="Delete" id="btn" required>

        <p>Want to register? <a href="register.php">Register</a></p>
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
         
        // Prepared statement prevents SQL injection attack
        $stmt = $dbConnect->prepare("DELETE FROM registration_data WHERE user_id = ?");
        $stmt->bind_param("s", $user);

        if ($stmt->execute()){
            echo "Record deleted sucessfully!!";
        }
        else{
            echo "Error". $stmt->error;
        }
    }
?>