<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['uname'];
    $email = $_POST['email'];
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

    // Insert sign-up data into database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Sign-up successful!";
        // Redirect to the login page after successful sign-up
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
     <h2>Sign Up</h2>
     
     <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?>
     
     <label>User Name</label>
     <input type="text" name="uname" placeholder="User Name"><br>
     
     <label>Email</label>
     <input type="email" name="email" placeholder="Email"><br>
     
     <label>Password</label>
     <input type="password" name="password" placeholder="Password"><br>
     
     <input type="checkbox" onclick="showPassword()"><span class="checkbox-label">Show Password</span><br>
     
     <button type="submit">Sign Up</button>
     
     <div class="form-links">
         <a href="index.php">Sign in</a> | <a href="forgetpass.php">Forgot Password?</a>
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
