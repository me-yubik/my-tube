<!DOCTYPE html>
<html lang="en">
<head>
    <title>YouTube Signin</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        
        <div class="logo">
            <img src="https://cdn.mos.cms.futurecdn.net/8gzcr6RpGStvZFA2qRt4v6.jpg" alt="YouTube Logo">
        </div>
        <h1>Sign in</h1>
        <br> 
        <form action="yt_signin.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign in</button>
            <p>Don't have an account? <a href="signup.php">Create account</a></p>
        </form>
        <p>Forgot password? <a href="#">Reset password</a></p>
    </div>
</body>
</html>