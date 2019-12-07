<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1eadafd9bb.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>Home - Girls Who Code, Baltimore</title>

    <script>
        function onSelect() {
            var urlmenu = document.getElementById( 'cta_menu' );
            window.open('programs.php?page=' + urlmenu.options[urlmenu.selectedIndex].value);
        };
            
    </script>
</head>
  <body>
      <header>
          <div class="hero-img">
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
                      <div class="hero-copy expanded">
                          <div class="hero-copy-content">
                              <h1 id="page-title" class="page-title">Join Girls Who Code,<br /> Baltimore!</h1>
                              <form class="self-identity" action="" method="get">
                                  <div class="segment self-identify" style="width: 100%;">
                                     <div class="self-identify-section self-identify-label" style="font-weight: bold;">I am a:</div>
                                     <div class="self-identify-section">
                                         <label>
                                            <span class="show-for-sr"></span>
                                               <select id="cta_menu" class="no-empty" name="cta_menu" onchange="onSelect()">
                                                  <option>- Select Option -</option>
                                                  <option value="students">Student</option>
                                                  <option value="parents">Parent/Guardian</option>
                                                  <option value="volunteers">Volunteer</option>
                                                  <option value="volunteers">Guest Speaker</option>
                                               </select>
                                            <input type='hidden' name='checkIndx' id='checkIndx'>
                                         </label>
                                     </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <main>
          <div class="container">
              <div class="eeEasyStepsSectionBody">
                  <div class="info-title title mb-5 mt-5"><h1>Be a Part of Something Big</h1></div>
                  <div class="row eeSteps hideme">
                      <div class="col-md-6">
                          <div class="eeImage">
                              <img src="images/wifi (1).svg" alt="atom" class="images">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="eeText">
                              <h2 class="mb-3">Express Your Creativity.</h2>
                              <p class="text">Spicy jalapeno bacon ipsum dolor amet kielbasa leberkas beef shankle spare ribs chicken tri-tip sausage bresaola pork loin pancetta buffalo.</p>
                          </div>
                      </div>
                  </div>
                  <div class="row eeSteps reversed hideme">
                      <div class="col-md-6 item2">
                          <div class="eeText">
                              <h2 class="mb-3">Boost Your Confidence.</h2>
                              <p class="text">Spicy jalapeno bacon ipsum dolor amet kielbasa leberkas beef shankle spare ribs chicken tri-tip sausage bresaola pork loin pancetta buffalo.</p>
                          </div>
                      </div>
                      <div class="col-md-6 item1">
                          <div class="eeImage"><img src="images/cloud (1).svg" alt="cloud" class="images"></div>
                      </div>
                  </div>
                  <div class="row eeSteps hideme">
                      <div class="col-md-6">
                          <div class="eeImage"><img src="images/hologram (1).svg" alt="hologram" class="images"></div>
                      </div>
                      <div class="col-md-6">
                          <div class="eeText">
                              <h2 class="mb-3">Make a Difference.</h2>
                              <p class="text">Spicy jalapeno bacon ipsum dolor amet kielbasa leberkas beef shankle spare ribs chicken tri-tip sausage bresaola pork loin pancetta buffalo.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="cta-secondary-btn mb-5">
                  <button onclick="window.location.href = '../girlswhocode/getinvolved.php';" class="btn text">Join Us Today!</button>
              </div>
          </div>
      </main>

      <div class="container testimonial mb-5">
          <div class="info-title title mt-5 mb-5"><h1>What Our Fans Say</h1></div>
          <div class="row hideme">
              <div class="col-md-4 text-center">
                  <div class="profile">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" alt="human" class="user" />
                      <blockquote>Spicy jalapeno bacon ipsum dolor amet tail burgdoggen hamburger, spare ribs beef ribs strip steak boudin shankle tenderloin doner t-bone. Landjaeger cow filet mignon, picanha bacon kielbasa jowl kevin.</blockquote>
                      <h3>Marie Kate<span> Co-Founder at XYZ</span></h3>
                  </div>
              </div>
              <div class="col-md-4 text-center">
                  <div class="profile">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" alt="human" class="user" />
                      <blockquote>Spicy jalapeno bacon ipsum dolor amet tail burgdoggen hamburger, spare ribs beef ribs strip steak boudin shankle tenderloin doner t-bone. Landjaeger cow filet mignon, picanha bacon kielbasa jowl kevin.</blockquote>
                      <h3>John Smith<span> Manager at XYZ</span></h3>
                  </div>
              </div>
              <div class="col-md-4 text-center">
                  <div class="profile">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="human" class="user" />
                      <blockquote>Spicy jalapeno bacon ipsum dolor amet tail burgdoggen hamburger, spare ribs beef ribs strip steak boudin shankle tenderloin doner t-bone. Landjaeger cow filet mignon, picanha bacon kielbasa jowl kevin.</blockquote>
                      <h3>Kat Von Dee<span> CEO at XYZ</span></h3>
                  </div>
              </div>
          </div>
      </div>
      <div class="cta-secondary-btn mb-5">
          <button onclick="window.location.href = '../girlswhocode/getinvolved.php';" class="btn text">Get Involved</button>
      </div>
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
                                  <form class="newsletter_footer_form" method="POST" name="subscribe_news" action="../girlswhocode/subscribe_news.php">
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          /* Every time the window is scrolled ... */
           $(window).scroll(function() {
              /* Check the location of each desired element */
              $('.hideme').each(function(i) {

                  var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                  var bottom_of_window = $(window).scrollTop() + $(window).height();

                  /* If the object is completely visible in the window, hide-me it it */
                  if( bottom_of_window > bottom_of_object ){
                    $(this).animate({'opacity':'1'},250);
                  }
              });

           });

        });
      </script>
  </body>
</html>
