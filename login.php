<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="login_signup.css">
</head>
<body>

    <div class="form_container">
        <form action="/Backend/login.backend.php" method="post">
            <h3>Login Form</h3>
            <select name="user_type"> 
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="password" name="password" required placeholder="Enter Your Password">
            <input type="submit" name="submit" value="Login Now" class="form-btn">
            <p>Not yet having an acount? <a href="signup.php">SignUp Now</a></p>
        </form>
    </div>


    
</body>
</html>