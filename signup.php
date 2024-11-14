<!DOCTYPE html>
<html lang="en">
<head>
    <title>YouTube Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://cdn.mos.cms.futurecdn.net/8gzcr6RpGStvZFA2qRt4v6.jpg" alt="YouTube Logo">
        </div>
        <h1>Create your account</h1>
        <br>
        <form action="yt_signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required placeholder="Enter your username">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm your password">

            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">I agree to the YouTube terms of service</label>

            <button type="submit">Create account</button>
        </form>
        <h3>Already have an account? <a href="signin.php">Sign in</a></h3>
    </div>

    
</body>
</html>
