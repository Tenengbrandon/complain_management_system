<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href ="home.css">
</head>

<body>

    <!-- Start of navbar -->

    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="navbar-brand">
                <img src="\images\logo.jpg" alt="Logo">
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
                <img src="/images/profile.jpg" alt="Profile">
            </div>
            <a href="javascript:void(0);" class="bar-icon" onclick="showNavMenu()">
                <i class="fas fa-bars"></i>
            </a>
        </div>

        <!-- This is the menu that is displayed on smaller screens -->
        <div class="nav-menu d-none" id="nav-menu">
            <a href="/Users/PHP/profile.php">
                <span> <i class="fas fa-user-circle"></i></span>
                <h3>Profile</h3>
            </a>
            <a href="/Users/PHP/index.php">
                <span> <i class="uil uil-apps"></i></span>
                <h3>Dashboard</h3>
            </a>
            <a href="/">
                <span> <i class="fas fa-home"></i></span>
                <h3>Home</h3>
            </a>
            <a href="/Users/PHP/lodgecomplain.php">
                <span> <i class="fas fa-clock"></i></span>
                <h3>Lodge-Complain</h3>
            </a>
            <a href="/Users/PHP/complainhistory.php">
                <span> <i class="uil uil-history"></i></span>
                <h3>Complain-history</h3>
            </a>
            <a href="changepassword.php">
                <span> <i class="uil uil-key-skeleton-alt"></i></span>
                <h3>Change-password</h3>
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
                <a href="/Users/PHP/profile.php">
                    <span> <i class="fas fa-user-circle"></i></span>
                    <h3>Profile</h3>
                </a>
                <a href="/Users/PHP/index.php">
                    <span> <i class="fab fa-dashcube"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/">
                    <span> <i class="fas fa-home"></i></span>
                    <h3>Home</h3>
                </a>
                <a href="/Users/PHP/lodgecomplain.php">
                    <span> <i class="fas fa-clock"></i></span>
                    <h3>Lodge-Complain</h3>
                </a>
                <a href="/Users/PHP/complainhistory.php">
                    <span> <i class="fas fa-clock"></i></span>
                    <h3>Complain-history</h3>
                </a>
                <a href="changepassword.php">
                    <span> <i class="fas fa-lock"></i></span>
                    <h3>Change-password</h3>
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
        <div id="main">
            <div class="inside-main">

                <!-- Start of main description section -->
                <div class="small-main">
                    <div class="container">
                        <h1 class="title">Welcome! To A Complain Management System.</h1>
                        <h2>How To Lodge a Complain?</h2>
                    </div>
                    <div class="row">
                        <div class="card-text">
                            <!-- start of card description -->
                            <div class="text">
                                <h3>Method 1</h3>
                                <p>The first way is the best way<br><br> to a complain to us is by<br><br> navigating to the lodge<br><br> complain page form
                                which you<br><br> will be easily replied by our<br><br> teem</p>
                            </div>     <!-----end of description--->
                        </div>
                        <div class="card-text">
                            <!-- start of card description -->
                            <div class="text">
                                <h3>Method 2</h3>
                                <p>The second way to a complain<br><br> to us is by contacting us<br><br> through the means on the nav<br><br> bar
                                which are: whatsapp, email,<br><br> or phone. But your response<br><br> will be slow and less care<br><br> will be considered</p>
                            </div>     <!-----end of description--->
                        </div>
                        <div class="card-text">
                            <!-- start of card description -->
                            <div class="text">
                                <h3>Method 3</h3>
                                <p>The third way to a complain<br><br> to us is by visiting our office<br><br>
                                which will be slow and might<br><br> not be taken care of due to<br><br> other reasons.</p>
                            </div>     <!-----end of description--->
                        </div>
                        <h3>Once your complain is lodged or submitted, please kindly wait for our response..</h3>
                    </div>
                </div>
                <!-- End of main description -->

                <!---Start of footer -->
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
                <!-- End of footer----->
            </div>
        </div>
        <!-- End of main section -->
    </div>


    <script src="/js/all.js"></script>
    <script src="/js/home.js"></script>
</body>

</html>