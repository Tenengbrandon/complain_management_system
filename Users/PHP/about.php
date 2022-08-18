<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

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
                <a href="profile.html">
                    <span <i class="uil uil-user-circle"></i></span>
                    <h3>Profile</h3>
                </a>
                <a href="index.html">
                    <span <i class="uil uil-apps"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="index.html">
                    <span <i class="uil uil-home"></i></span>
                    <h3>Home</h3>
                </a>
                <a href="index.html">
                    <span <i class="uil uil-history"></i></span>
                    <h3>Complain-history</h3>
                </a>
                <a href="index.html">
                    <span <i class="uil uil-key-skeleton-alt"></i></span>
                    <h3>Change-password</h3>
                </a>
                <a href="contact.html">
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
            <div class="contact">
                <h1>Contact Us</h1>
                <form>
                    
                    <div class="input-group">
                        <input type="text" id="name" required>
                        <label for="name"><i class="uil uil-user"></i>Your name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="number" required>
                        <label for="number"><i class="uil uil-phone-alt"></i>Phone no.</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="email" required>
                        <label for="email"><i class="uil uil-envelope-alt"></i>Your Email</label>
                    </div>
                    <div class="input-group">
                        <textarea id="massage" rows="8" required></textarea>
                        <label for="name"><i class="uil uil-comments"></i>Your Massage</label>
                    </div>
                    <button type="submit"><i class="uil uil-location-arrow"></i>SUBMIT</button>
                </form>
                
            </div>
            
            </div>
</body>
</html>