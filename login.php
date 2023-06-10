<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['uname'];
    $password = $_POST['password'];

    // Database connection
    $host = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'genius';
    $dbName = 'HarvestHQ';

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if user credentials are valid
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Successful login
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Redirect to dashboard.php or any other desired page
        exit();
    } else {
        // Invalid login credentials
        $error = "Invalid username or password";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HarvestHQ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="logo-no-background.png"/>
</head>
<body>
     <form action="" method="post">
     <div class="header__logo">
         <img src="logo-no-background.png" width="200px" height="auto" alt="Logo">
     </div>
     <h2>LOGIN</h2>
     
     <?php if (isset($error)) { ?>
         <p class="error"><?php echo $error; ?></p>
     <?php } ?>
     
     <label>User Name</label>
     <input type="text" id="uname" name="uname" placeholder="User Name"><br>
     
     <label>Password</label>
     <input type="password" id="pass" name="password" placeholder="Password">
     <input type="checkbox" onclick="showPassword()"><span class="checkbox-label">Show Password</span><br>
     
     <button type="submit">Login</button>
     
     <div class="form-links">
         <a href="signup.php">Sign Up</a> | <a href="forgetpass.php">Forgot Password?</a>
     </div>
     </form>
     
<script>
    function showPassword() {
        var passwordInput = document.querySelector('input[name="password"]');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
</body>
</html>
