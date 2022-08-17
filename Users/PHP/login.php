<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
    <body>

    
        <!-- Start of navbar -->

        <nav class="navbar" id="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <img src="../images/logo.jpg" alt="Logo">
                    <div class="title">
                        <span class="brand-1">HARMO</span>
                        <span class="brand-2">NIZERS</span>
                    </div>
                </div>
                <div class="nav-icons">
                    <a href="#" class="icon">
                        <i class="fas fa-envelope fa-2x"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fas fa-phone-alt fa-2x"></i>
                    </a>
                    <a href="#" class="icon whatsapp">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
                <div class="nav-right">
                    <div class="search">
                        <input type="text" placeholder="Search" class="form-control">
                        <span class="search-icon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <img src="../images/profile.jpg" alt="Profile">
                </div>
                <a href="javascript:void(0);" class="bar-icon" onclick="showNavMenu()">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>

        <div class="registration">
            <div class="login">
                <div class="form login">
                    <span class="title">Login</span>

                    <form action="#">
                        <div class="input-field">
                            <input type="text" placeholder="Enter Your Email" reqiured />
                            <i class="fas fa-envelope fa-1x "></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Enter Your Password" reqiured />
                            <i class="fas fa-lock fa-1x "></i>
                            <!-- <i class="fas fa-eye-slash fa-1x showHidePw"></i> -->
                        </div>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Remember me</label>
                            </div>

                            <a href="#" class="text">Forgot Password?</a>
                        </div>

                        <div class="input-field">
                            <input type="button" value="Login Now" reqiured />
                        </div>
                    </form>
                    <div class="login-signup">
                            <span class="text">Not yet a member?
                                <a href="#" class="text signup-link">signup Now</a>
                            </span>
                        </div>
                </div>

                
            </div>
        </div>



        <script src="../js/all.js"></script>
        <script src="../js/home.js"></script>
        <script>
            
            // // js code for the registration form

            // const container = document.querySelector(".container");
            //     pwShowHide = document.querySelectorAll(".showHidePw");
            //     pwFields = document.querySelectorAll(".password");
            //     signUp = document.querySelector(".signup-link");
            //     login = document.querySelector(".login-link");


            //     //js code for login-signup  form to appear

            //     signUp.addEventListener("click", ( )=>{
            //         container.classList.add("active");
            //     });
            //     login.addEventListener("click", ( )=>{
            //         container.classList.remove("active");
            //     });
        </script>
    </body>
</html>















