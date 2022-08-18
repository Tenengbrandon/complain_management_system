<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/totalcomplaints.css">
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
            <a href="index.php">
                <span> <i class="fab fa-dashboard"></i></span>
                <h3>Dashboard</h3>
            </a>
            <a href="managecomplain.php">     <!--------dropdown menu----->
                    <span> <i class="fas fa-clock"></i></span>
                    <h3>Manage-Complaint</h3>
                </a>
            <a href="manageusers.php">
                <span> <i class="fas fa-users"></i></span>
                <h3>Manage-Users</h3>
            </a>
            <a href="addcategory.php">
                <span> <i class="fas fa-clock"></i></span>
                <h3>Add-Category</h3>
            </a>
            <a href="changepassword.php">
                <span> <i class="fas fa-lock"></i></span>
                <h3>Change-password</h3>
            </a>
            <a href="login.php">
                <span> <i class="fas fa-sign-out-alt"></i></span>
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
                <a href="index.php">
                    <span> <i class="fab fa-dasboard"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="managecomplain.php">     <!--------dropdown menu----->
                    <span> <i class="fas fa-clock"></i></span>
                    <h3 class="dropbtn">Manage-Complaint</h3>
                </a>
                <a href="manageusers.php">
                    <span> <i class="fas fa-users"></i></span>
                    <h3>Manage-Users</h3>
                </a>
                <a href="addcategory.php">
                    <span> <i class="fas fa-clock"></i></span>
                    <h3>Add-Category</h3>
                </a>
                <a href="changepassword.php">
                    <span> <i class="fas fa-lock"></i></span>
                    <h3>Change-password</h3>
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
                <div class="table-responsive">
                    <div class="table-scroll">
                        <table class="table table-bordered table-hover table-stripped" style="table-layout: fixed;">
                            <h2>Total Complaints Reg</h2>
                            <thead class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Complaint-Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bisynerd</td>
                                    <td class="selected">brandon@gmail.com</td>
                                    <td>Database problem</td>
                                    <td>Molyko-Buea</td>
                                    <td>11/08/2022</td>
                                    <td>
                                        <button class="success">View</button>
                                        <button class="danger">Delete</button>
                                    </td> 
                                </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- End of main description -->

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
        </div>
        <!-- End of main section -->
    </div>


    <script src="../js/all.js"></script>
    <script src="../js/home.js"></script>
</body>

</html>