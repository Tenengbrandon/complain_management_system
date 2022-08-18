<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Page</title>
    <link rel="stylesheet" href="../css/lodgecomplain.css">
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

        <!-- This is the menu that is displayed on smaller screens -->
        <div class="nav-menu d-none" id="nav-menu">
            <a href="profile.php">
                <span> <i class="fas fa-user-circle"></i></span>
                <h3>Profile</h3>
            </a>
            <a href="index.php">
                <span> <i class="uil uil-apps"></i></span>
                <h3>Dashboard</h3>
            </a>
            <a href="home.php">
                <span> <i class="fas fa-home"></i></span>
                <h3>Home</h3>
            </a>
            <a href="lodgecomplain.php">
                <span> <i class="fas fa-clock"></i></span>
                <h3>Lodge-Complain</h3>
            </a>
            <a href="complainhistory.php">
                <span> <i class="uil uil-history"></i></span>
                <h3>Complain-history</h3>
            </a>
            <a href="changepassword.php">
                <span> <i class="uil uil-key-skeleton-alt"></i></span>
                <h3>Change-password</h3>
            </a>
            <a href="contact.php">
                <span> <i class="fas fa-phone-alt"></i></span>
                <h3>Contact</h3>
            </a>
            <a href="#">
                <span> <i class="fas fa-info-circle"></i></span>
                <h3>About</h3>
            </a>
            <a href="signup.php" class="active">
                <span> <i class="uil uil-user"></i></span>
                <h3>Register</h3>
            </a>
            <a href="login.php">
                <span> <i class="uil uil-sign-out-alt"></i></span>
                <h3>Logout</h3>
            </a>
        </div>
        <!-- End of menu -->
    </nav>

    <!-- End of navbar -->

    <div class="row">
        <!-- Start of sidebar -->
        <aside class="sidebar">
            <div class="container">
                <a href="profile.php">
                    <span> <i class="fas fa-user-circle"></i></span>
                    <h3>Profile</h3>
                </a>
                <a href="index.php">
                    <span> <i class="fab fa-dashcube"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="home.php">
                    <span> <i class="fas fa-home"></i></span>
                    <h3>Home</h3>
                </a>
                <a href="lodgecomplain.php">
                    <span> <i class="fas fa-clock"></i></span>
                    <h3>Lodge-Complain</h3>
                </a>
                <a href="complainhistory.php">
                    <span> <i class="fas fa-clock"></i></span>
                    <h3>Complain-history</h3>
                </a>
                <a href="changepassword.php">
                    <span> <i class="fas fa-lock"></i></span>
                    <h3>Change-password</h3>
                </a>
                <a href="contact.php">
                    <span> <i class="fas fa-phone-alt"></i></span>
                    <h3>Contact</h3>
                </a>
                <a href="#">
                    <span> <i class="fas fa-info-circle"></i></span>
                    <h3>About</h3>
                </a>
                <a href="signup.php" class="active">
                    <span> <i class="fas fa-sign-in-alt"></i></span>
                    <h3>Register</h3>
                </a>
                <a href="login.php">
                    <span> <i class="fas fa-sign-out-alt"></i></span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of sidebar -->

        <!-- Start of main section -->
        <div class="box">
            <div class="inner-box">
                <form action="">
                    <h2>Users Personal Info</h2>
                    <div class="input-field">
                        <input type="text" placeholder="First Name" required/>
                        <input type="address" placeholder="Address" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="State" required/>
                        <input type="phonenumber" placeholder="Phone num" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Username" required/>
                        <input type="email" placeholder="Email" required/>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Gender" required/>
                        <input type="date" placeholder="Date" required/>
                    </div>
                    <input type="submit" value="Complaint-Category" required/>
                </form>
            </div>
            <div class="input-title">
                <input type="text" placeholder="Complaint Title" required/>
            </div>
            <div class="input-comment">
                <textarea id="massage" rows="8" placeholder="Enter Your Complain...."  required></textarea>
            </div>
            <div class="submit-complain">
                <input type="text" placeholder="Lodge Complaint" required/>
            </div>
        </div>
        <!-- End of main section -->
        <!-- Start of footer -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="fr-4">
                        <h4>Company</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Our Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Terms And Conditions</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="fr-4">
                        <h4>Get Help</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Shipping</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Order Status</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Payment Options</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="fr-4">
                        <h4>Online Sale</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Cakes</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Bread</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square"></i>
                                    <span>Ice-Creams</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="fr-4">
                        <h4>Follow Us</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>WhatsApp</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-close">
                Copyright &copy; 2022 <span>Harmo Nizers</span>
            </div>
        </footer>
        <!-- End of footer -->
    </div>


    <script src="../js/all.js"></script>
    <script src="../js/home.js"></script>
</body>

</html>