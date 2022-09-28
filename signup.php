<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="login_signup.css">
    <?php session_start(); ?>
</head>
<body> 

    <div class="form_container">
        <form action="/backend/register.backend.php" method="post">
            <h3>Registration Form</h3>
            <?php if(isset($_SESSION['massage'])): ?>
                <div><?php echo  $_SESSION['massage'] ?></div>
            <?php 
                unset($_SESSION['massage']);
                endif  
            ?>
            <input type="text" name="name" required placeholder="Enter Your Name">
            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="number" name="number" required placeholder="Enter Your Phone no.">
            <input type="text" name="username" required placeholder="Enter Your Username">
            <input type="password" name="password" required placeholder="Enter Your Password">
            <input type="password" name="cpassword" required placeholder="Confirm Your Password">
            <input type="submit" name="submit" onclick="openPopup()" value="Register Now" class="form-btn">
            <div class="popup" id="popup">
                <img src="/images/Bisnerd-tick.jpg" alt="">
                <h2>Thank You!</h2>
                <p>Your Details Have Been Successfully Submitted, Thanks!</p>
                <button type="button" onclick="closePopup()">OK</button>
            </div>
            <p>Already have an acount? <a href="login.php">Login Now</a></p>
        </form>
    </div>

    <script>
        let popup = document.getElementById("popup")
        function openPopup() {
            popup.classList.add("open-popup");
        }
        function closePopup() {
            popup.classList.remove("open-popup");
        }
    </script>
</body>
</html>