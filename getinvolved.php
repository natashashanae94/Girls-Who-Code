<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/1eadafd9bb.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/script.js"></script>
	
	<script>
		// Applied globally on all textareas with the "autoExpand" class
$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });

	</script>

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
          <div class="landing-img-get-involved">
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
                            <h1 id="page-title" class="page-title">Get Involved</h1>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </header>

	<div class="container">
	
		<form class="signup_form" method="POST" action="../includes/signup_form.php">
			
			<div class="col-md-12 form_box mt-5">
				<div class="formSolidBackgroundStripe"></div>
				<div class="form_box_title">
					<h1 class="form_header header">Girls Who Code, Baltimore<br>Sign-up Form</h1>
				</div>
				<p class="form_required mt-5">Required *</p>
			</div>

			<div class="col-md-12 form_box1 box1">
				<div class="form_box_title">
					<h2>First Name *</h2>
				</div>
				<div class="form_box_text_wrapper">
					<div class="form_box_text_input">
						<input type="text" class="form_input firstName" name="fname" placeholder="Your answer">
            			<div class="form_input_line"><div class="change_line_color1"></div></div>
					</div>
				</div>
       		  <div class="error1"></div>
			</div>

			<div class="col-md-12 form_box2 box2">
				<div class="form_box_title">
					<h2>Last Name *</h2>
				</div>
				<div class="form_box_text_wrapper">
					<div class="form_box_text_input">
						<input type="text" class="form_input lastName" name="lname" placeholder="Your answer">
						<div class="form_input_line"><div class="change_line_color2"></div></div>
					</div>
				</div>
				<div class="error2"></div>
			</div>

			<div class="col-md-12 form_box3 box3">
				<div class="form_box_title">
					<h2>Email Address *</h2>
				</div>
				<div class="form_box_text_wrapper">
					<div class="form_box_text_input">
						<input type="text" class="form_input email" name="email" placeholder="Your email">
						<div class="form_input_line"><div class="change_line_color3"></div></div>
					</div>
				</div>
				<div class="error3"></div>
			</div>

			<div class="col-md-12 form_box4 box4">
				<div class="form_box_title">
					<h2>Phone Number *</h2>
				</div>
				<div class="form_box_text_wrapper">
					<div class="form_box_text_input">
						<input type="text" class="form_input phone" name="phone" placeholder="Your phone">
						<div class="form_input_line"><div class="change_line_color4"></div></div>
					</div>
				</div>
				<div class="error4"></div>
			</div>

			<div class="col-md-12 form_box5 box5">
				<div class="form_box_title">
					<h2>I am interested in becoming a *</h2>
				</div>
				<div class="form_box_text_wrapper">
					<select class="select_input form-control" id="gwc_role" name="role">
						<option value="-Please Select-"> -Please Select- </option>
						<option value="Student">Student</option>
						<option value="Volunteer">Volunteer</option>
						<option value="Guest Speaker">Guest Speaker</option>
					</select>
				</div>
			  <div class="error5"></div>
			</div>

			<div class="col-md-12 form_box6 box6 text_expand">
				<div class="form_box_title">
					<h2>What programming languages do you know? *</h2>
				</div>
				<div class="form_box_text_wrapper text_expand">
					<div class="form_box_text_input">
						<textarea class='languages autoExpand' data-min-rows='2' placeholder='Your answer'></textarea>
						<div class="form_input_line"><div class="change_line_color6"></div>
					</div>
				</div>
			</div>
			<div class="error6"></div>
		  </div>

			<div class="col-md-12 form_box7 box7 experience">
				<div class="form_box_title">
					<h2>What is your technical skill level? *</h2>
				</div>
					<label class="radio">
						<input id="radio2" type="radio" name="radios" value="Beginner / No Experience">
						<span class="outer">
							<span class="inner"></span>
						</span>
						Beginner / No Experience
					</label>
					<label class="radio">
						<input id="radio2" type="radio" name="radios" value="1-2 years">
						<span class="outer">
							<span class="inner"></span>
						</span>
						1-2 years
					</label>
					<label class="radio">
						<input id="radio2" type="radio" name="radios" value="3-5 years">
						<span class="outer">
							<span class="inner"></span>
						</span>
						3-5 years
					</label>
					<label class="radio">
						<input id="radio2" type="radio" name="radios" value="5-9 years">
						<span class="outer">
							<span class="inner"></span>
						</span>
						5-9 years
					</label>
					<label class="radio">
						<input id="radio2" type="radio" name="radios" value="10+ years">
						<span class="outer">
							<span class="inner"></span>
						</span>
						10+ years
					</label>
				<div class="error7"></div>
			</div>
			
			<div class="col-md-12 form_box text_expand">
				<div class="form_box_title">
					<h2>How did you hear about GWC Baltimore?</h2>
				</div>
				<div class="form_box_text_wrapper text-expand">
					<div class="form_box_text_input">
						<textarea class='autoExpand' data-min-rows='2' placeholder='Your answer'></textarea>
						<div class="form_input_line"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 form_box text_expand">
				<div class="form_box_title">
					<h2>What impact do you hope GWC Baltimore would have on you or your community?</h2>
				</div>
				<div class="form_box_text_wrapper text_expand">
					<div class="form_box_text_input">
						<textarea class='autoExpand' data-min-rows='2' placeholder='Your answer'></textarea>
						<div class="form_input_line"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 form_box text_expand">
				<div class="form_box_title">
					<h2>Anything else you'd like to share about yourself?</h2>
				</div>
				<div class="form_box_text_wrapper text_expand">
					<div class="form_box_text_input">
						<textarea class='autoExpand' data-min-rows='2' placeholder='Your answer'></textarea>
						<div class="form_input_line"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 form_box">
				<div class="form_box_title">
					<h2>Github Username (if you have one)</h2>
				</div>
				<div class="form_box_text_wrapper">
					<div class="form_box_text_input">
						<input type="text" class="form_input email" name="email" placeholder="Your answer">
						<div class="form_input_line"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 form_box">
				<div class="form_box_title">
					<h2>Link to your LinkedIn Profile (if you have one)</h2>
				</div>
				<div class="form_box_text_wrapper">
					<div class="form_box_text_input">
						<input type="text" class="form_input email" name="email" placeholder="Your answer">
						<div class="form_input_line"></div>
					</div>
				</div>
			</div>
			<input class="submit_btn mt-3 mb-3 btn btn-danger" type="submit" value="Submit" name="submit">
			<div class="error8 mb-3"></div>
		</form>
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
      
      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
  </html>
