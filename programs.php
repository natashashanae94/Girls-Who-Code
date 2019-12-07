<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/1eadafd9bb.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Get Involved - Girls Who Code, Baltimore</title>

    <style>
        .page-title::after {
            content: none;
            position: static;
            left: 0;
            right: 0;
            bottom: 0;
            background: none;
            height: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="landing-img">
            <div class="hero">
                <div class="hero-inner row">
                    <div class="nav">
                        <input type="checkbox" id="nav-check">
                        <div class="nav-btn">
                            <label for="nav-check">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </label>
                        </div>
                        <div class="nav-wrapper">
                            <div class="nav-header">
                                <a href="index.php"><img class="nav-logo" src="images/GWC_logo_2016_.png" alt="girls who code website"></a>
                            </div>
                            <div class="navlinks">
                                <ul>
                                    <li><a href="programs.php">Who We Are</a></li>
                                    <li><a href="#">Student Projects</a></li>
                                    <li><a href="getinvolved.php">Get Involved</a></li>
                                    <li><a href="#">Donate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hero-copy expanded" style="width: 50%;">
                        <div class="hero-copy-content">
                            <h1 id="page-title" class="page-title">Our Programs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="row info-tabs mb-5">
        <div class="col-md-4 tab1"><a class="tab" href="?page=students">Students</a></div>
        <div class="col-md-4 tab2"><a class="tab" href="?page=parents">Parent/Guardian</a></div>
        <div class="col-md-4 tab3"><a class="tab" href="?page=volunteers">Volunteer/Guest Speaker</a></div>
    </div>

  
    <?php
			if(isset($_GET['page'])) {

			$page = $_GET["page"];
			$filename = "includes/" . $page . '.php';

			if (file_exists($filename)) {
			    include $filename;
			} else {
                include 'includes/students.php';
            }
			} else {
			    include 'includes/students.php';
            }
    ?>


    <footer class="footer">
        <div class="container" id="footer-content">
            <div class="stay-connected">
                <div class="row">
                    <div class="follow-us span3 col-lg-3">
                        <h3 class="epsilon footer-title mb-2">Follow Us</h3>
                        <ul class="socials text-center">
                            <li><a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="www.pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="newsletter span6 col-lg-6" style="display: block;">
                        <div class="footer-newsletter-signup clearfix">
                            <h3 class="epsilon footer-title mb-4">Get in the loop</h3>
                            <div class="footer-newsletter-form-hldr">
                                <form class="newsletter_footer_form" method="POST">
                                    <input class="subscribe-input mb-4" type="text" name="subscribe-email" placeholder="Email">
                                    <button class="subscribe-btn" value="submit">Go</button>
                                </form>
                            </div>
                            <p class="subscribe-text text-center mb-3 text">Sign  up for news, giveaways and more!</p>
                        </div>
                    </div>
                    <div class="blog-preview span3 col-lg-3">
                        <h3 class="epsilon footer-title mb-3">Support Our Mission</h3>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
