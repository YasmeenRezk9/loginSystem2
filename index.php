<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <form action="login.php" method="post">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">><?php echo $_GET['error']; ?></p>

            <?php } ?>
  
            <label>Email</label>
            <input type="text" name="email" placeholder="example@gmail.com"><br>
            <label>Password</label>
            <input type="password"  name="password" placeholder="Password"><br>
            <a href="forgot passwod?"><h4>Forgot password?</h4></a><br>
            <br>
            <br>
            <button type="submit" value="Login">Login</button>
            
        </form>
       
    </body>
</html>

