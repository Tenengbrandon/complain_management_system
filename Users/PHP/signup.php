<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="../css/signup.css">
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
            <div class="forms">
                <div class="form login">
                    <span class="title">SignUp</span>

                    <form action="#">
                        <div class="input-field">
                            <input type="text" placeholder="Enter First Name" reqiured />
                            <i class="fas fa-user fa-1x "></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter Last Name" reqiured />
                            <i class="fas fa-user fa-1x "></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter Username" reqiured />
                            <i class="fas fa-user-circle fa-1x "></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter Phone No" reqiured />
                            <i class="fas fa-phone fa-1x "></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter Your Email" reqiured />
                            <i class="fas fa-envelope fa-1x "></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter Your Password" reqiured />
                            <i class="fas fa-envelope fa-1x "></i>
                        </div>
                        <div class="input-field">
                            <input type="password" placeholder="Confirm Password" reqiured />
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
                            <input type="button" value="Signup Now" reqiured />
                        </div>
                        <div class="swap">
                            <span class="text">Already a member?
                                <a href="#" class="swap-content">Login Now</a>
                            </span>
                        </div>

                    </form>
                </div>
            </div>
        </div>



        <script src="../js/all.js"></script>
        <script src="../js/home.js"></script>

    </body>
</html>















