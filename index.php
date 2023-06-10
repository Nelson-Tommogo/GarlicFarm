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
        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 
        <input type="checkbox" checked="checked"> Remember me
        <button type="submit">Login</button>
        <label>OR</label> 
            <br>
            <button type="button"><a href="signup.html">SignUp</a></button> 
            <br><br>  
            <a href="forgotpassword.html">Forgot password? </a>
     </form>

</body>

</html>

