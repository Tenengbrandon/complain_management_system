<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
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
                <div class="search-box">
                    <img src="./images/search.png">
                    <input type="text" placeholder="search">
                </div>
                <div class="close" id="close-btn">
                    <span <i class="uil uil-times"></i></span>       
                </div>
            </div>
            <div class="sidebar">
                <a href="#">
                    <span <i class="uil uil-user-circle"></i></span>
                    <h3>Profile</h3>
                </a>
                <a href="#">
                    <span <i class="uil uil-apps"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="index.php">
                    <span <i class="uil uil-home"></i></span>
                    <h3>Home</h3>
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
                <h1>Welcome! To The Harmonizers Cooperation.</h1>
                <p><b>Harmonizers Cooperation</b> is an association of engineers, medical doctors as well as medical and engineering students in the varios states engineering and medical schoolin the country. <br>Our primary gaol is to <b>orientate, prepare and guide young cameroonains</b> who desire to build their careers in the medicine or engineering schools/p>
                <div class="register">
                    <button><a href="./login.html">Login</a></button>
                    <button><a href="./signup.html">Sign Up</a></button>
                </div>
            </div>
            <h1 class="title">Our Expert Staff Members</h1>
        <section>
            <div class="container">   <!-----------image slider-------->
                <div class="content">
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <img src="images/image1.jfif">
                            </div>
                            <div class="text">
                                <h4>Eng. OJONGAKPA ASSAM</h4>
                                <P>President of the harmonizers Cooperation and A-Level Physics Examiner</P>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <img src="images/image3.jpeg">
                            </div>
                            <div class="text">
                                <h4>Dr. NKAI GIDEON</h4>
                                <P>Medicne coodinator in Limbe branch</P>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <img src="images/image2.jpeg">
                            </div>
                            <div class="text">
                                <h4>Eng. EMEH ZADOCK</h4>
                                <P>Engineering coodinator in Douala branch </P>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <img src="images/image4.jpeg">
                            </div>
                            <div class="text">
                                <h4>TENENG BRANDON</h4>
                                <P>The builder of this site, level-300 student in COT</P>University of Buea
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <img src="images/image5.jpg">
                            </div>
                            <div class="text">
                                <h4>JEFF MOFOR ALLO</h4>
                                <P>25PTS in GCE A-Level, level-300 student in FET</P>University of Buea
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <img src="images/image4.jpeg">
                            </div>
                            <div class="text">
                                <h4>TENENG BRANDON</h4>
                                <P>the builder of this site, level-300 student in COT</P>University of Buea
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>

    <div class="footer">
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="github.com/Tenengbrandon">Contact Us</a></li> 
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
        </ul>
    </div>
</body>
</html>