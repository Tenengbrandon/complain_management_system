<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
</head>
<body>

        <!------------------begin of nav-------------->
        <nav>
            <div class="nav-left">
                <div class="logo">
                    <img src="./images/logo.jpg" alt="">
                    <h2>HARMO <span>NIZERS</span></h2>
                </div>
                <ul>
                    <li><img src="./images/email.png"></li>
                    <li><img src="./images/contact.png"></li>
                    <li><img src="./images/whatsapp.png"></li>
                </ul>
            </div>
    
            <div class="nav-right">
                <div class="search-box">
                    <img src="./images/search.png">
                    <input type="text" placeholder="search">
                </div>
                <div class="nav-icon">
                    <img src="images/profile.jpg">
                </div>
            </div>
        </nav>   <!----------------end of nav---------------->
    
        <div class="container">
            <aside>
                <!-------------begin of aside-------->
                <div class="top">
                    <div class="close" id="close-btn">
                        <span <i class="uil uil-times"></i></span>       
                    </div>
                </div>
                <div class="sidebar">
                    <a href="profile.php">
                        <span <i class="uil uil-user-circle"></i></span>
                        <h3>Profile</h3>
                    </a>
                    <a href="index.php">
                        <span <i class="uil uil-apps"></i></span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="index.php">
                        <span <i class="uil uil-home"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a href="#">
                        <span <i class="uil uil-history"></i></span>
                        <h3>Complain-history</h3>
                    </a>
                    <a href="#">
                        <span <i class="uil uil-key-skeleton-alt"></i></span>
                        <h3>Change-password</h3>
                    </a>
                    <a href="#">
                        <span <i class="uil uil-phone"></i></span>
                        <h3>Contact</h3>
                    </a>
                    <a href="#">
                        <span <i class="uil uil-award"></i></span>
                        <h3>About</h3>
                    </a>
                    <a href="signup.html" class="active">
                        <span <i class="uil uil-user"></i></span>
                        <h3>Register</h3>
                    </a>
                    <a href="#">
                        <span <i class="uil uil-setting"></i></span>
                        <h3>Setting</h3>
                    </a>
                    <a href="#">
                        <span <i class="uil uil-sign-out-alt"></i></span>
                        <h3>Logout</h3>
                    </a>
                </div>
            
            </aside>
            <!-------------end of aside-------->

            <div class="main-secton">
                <!-------------begin of main section---------->
                <div class="first">
                    <a href="#">
                        <span <i class="uil uil-edit"></i></span>
                        <h1>Account</h1>
                    </a>
                </div>
                <div class="text">
                    <a href="#">
                        <span <i class="uil uil-user-circle"></i></span>
                        <h1>Edit-Profile</h1>
                    </a>
                </div>
            </div>
            <section>
                <div class="row">
                    <form class="col s6">
                        <div class="row-1">
                            <div class="input-field">
                                <label class="custom-field">
                                    <input type="text" required/>
                                    <span class="placeholder">First Name</span>
                                </label>
                                <label class="custom-field">
                                    <input type="text" required/>
                                    <span class="placeholder">Last Name</span>
                                </label>
                                <label class="custom-field">
                                    <input type="contact" required/>
                                    <span class="placeholder">Contact</span>
                                </label>
                                <label class="custom-field">
                                    <input type="email" required/>
                                    <span class="placeholder">Email</span>
                                </label>
                                <label class="custom-field">
                                    <input type="text" required/>
                                    <span class="placeholder">Username</span>
                                </label>
                                <div class="submit">
                                    <button>Save Changes</button>
                                </div>
                            </div>
                            <div class="picture">
                                <img src="./images/password.webp">
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </section>
        </div>
    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>