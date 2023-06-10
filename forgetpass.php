<!DOCTYPE html>

<html>

<head>

    <title>HarvestHQ</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="logo-no-background.png"/>

</head>

<body>

     <form action="login.php" method="post">
     <div class="header__logo">
                    <img src="logo-no-background.png" width=200px height= auto alt="Logo">
                </div>
        <h2>Reset Password</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Old Password</label>
        <input type="password" name="password" placeholder="Password"><br> 
        <label>New Password</label>
        <input type="password" name="password" placeholder="Password"><br> 
        <input type="checkbox" onclick="showPassword()"><span class="checkbox-label"></span>
            <button type="submit">Update</button>
        <div class="form-links">
        <a href="signup.php">Sign Up</a> | <a href="index.php">Login</a>
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

