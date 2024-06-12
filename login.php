<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Build it Matsulu</title>
    <link rel="stylesheet" href="sign-up-login.css">
</head>
<body>
    
    <!-- Main Content of the page -->
        <div class="outer-sqr">
            <div class="inner-sqr">

                <div class="logo-sign-up">
                    <a href="#" class="logo"><img src="images\BM-Logo.png"></a>
                    <h1>LOGIN</h1>
                </div>
                
                <?php
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo '<p style="color: white;">That username or password is not registered</p>';
                }
                ?> 

                <form id="login-form" class="flex-item" action="user_login.php" method="post">
                    
                    <label for="username">Username:</label>
                    <input type="text" id="login-username" name="username" placeholder="Username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="login-password" name="password" placeholder="Password">

                    <button type="submit" id="login-btn" value="Login">Login</button>

                    <a id="register-url" href="sign-up.html">Don't have an account? Register</a>

                </form>

            </div>
        </div>

</body>
</html>