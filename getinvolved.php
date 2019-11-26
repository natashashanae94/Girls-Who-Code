<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/1eadafd9bb.js"></script>
	<script src="js/script.js"></script>
    <title>Get Involved - Girls Who Code, Baltimore</title>
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
                                      <li><a href="programs.php">About</a></li>
                                      <li><a href="#">Student Projects</a></li>
                                      <li><a href="getinvolved.php">Get Involved</a></li>
                                      <li><a href="#">Donate</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="hero-copy expanded" style="width: 50%;">
                          <div class="hero-copy-content">
                              <h1 id="page-title" class="page-title">Get Involved!</h1>

                          </div>
                      </div>
                  </div>
              </div>
      </div>
    </header>
	<div class="container">
		<div class="info-title title mb-5 mt-5"><h1>Sign Up</h1></div>

		<form class="signup_form" method="POST" action="../girlswhocode/signup_form.php">

		  <div class="form-row">
			<div class="col-md-6 mb-3">
			  <label for="first name">First name</label>
			  <input type="text" class="firstName form-control" name="fname">
			</div>
			<div class="col-md-6 mb-3">
			  <label for="last name">Last name</label>
			  <input type="text" class="lastName form-control" name="lname">
			</div>
		  </div>
		  <div class="form-row">
			<div class="col-md-12">
			<label for="address">Address</label>
			  <input type="text" class="address form-control" name="address">
			</div>
		  </div>
		  <div class="form-row">
			<div class="col-md-6 mb-3">
			  <label for="city">City</label>
			  <input type="text" class="city form-control" name="city">
			</div>
			<div class="col-md-3 mb-3">
			  <label for="State">State</label>
			  <select class="state form-control" name="state">
				<option> -Please Select- </option>
				<option value="AL">Alabama</option>
          		<option value="AK">Alaska</option>
          		<option value="AZ">Arizona</option>
          		<option value="AR">Arkansas</option>
          		<option value="CA">California</option>
          		<option value="CO">Colorado</option>
          		<option value="CT">Connecticut</option>
          		<option value="DE">Delaware</option>
          		<option value="DC">District Of Columbia</option>
          		<option value="FL">Florida</option>
          		<option value="GA">Georgia</option>
          		<option value="HI">Hawaii</option>
          		<option value="ID">Idaho</option>
          		<option value="IL">Illinois</option>
          		<option value="IN">Indiana</option>
          		<option value="IA">Iowa</option>
          		<option value="KS">Kansas</option>
          		<option value="KY">Kentucky</option>
          		<option value="LA">Louisiana</option>
          		<option value="ME">Maine</option>
          		<option value="MD">Maryland</option>
          		<option value="MA">Massachusetts</option>
          		<option value="MI">Michigan</option>
          		<option value="MN">Minnesota</option>
          		<option value="MS">Mississippi</option>
          		<option value="MO">Missouri</option>
          		<option value="MT">Montana</option>
          		<option value="NE">Nebraska</option>
          		<option value="NV">Nevada</option>
          		<option value="NH">New Hampshire</option>
          		<option value="NJ">New Jersey</option>
          		<option value="NM">New Mexico</option>
          		<option value="NY">New York</option>
          		<option value="NC">North Carolina</option>
          		<option value="ND">North Dakota</option>
          		<option value="OH">Ohio</option>
          		<option value="OK">Oklahoma</option>
          		<option value="OR">Oregon</option>
          		<option value="PA">Pennsylvania</option>
          		<option value="RI">Rhode Island</option>
          		<option value="SC">South Carolina</option>
          		<option value="SD">South Dakota</option>
          		<option value="TN">Tennessee</option>
          		<option value="TX">Texas</option>
          		<option value="UT">Utah</option>
          		<option value="VT">Vermont</option>
          		<option value="VA">Virginia</option>
          		<option value="WA">Washington</option>
          		<option value="WV">West Virginia</option>
          		<option value="WI">Wisconsin</option>
          		<option value="WY">Wyoming</option>
			  </select>
			  <div class="invalid-tooltip">
				Please provide a valid state.
			  </div>
			</div>
			<div class="col-md-3 mb-3">
			  <label for="Zip Code">Zip</label>
			  <input type="text" class="zip form-control" name="zip">
			  <div class="invalid-tooltip">
				Please provide a valid zip.
			  </div>
			</div>
		  </div>
			<div class="form-row">
			  <div class="col-md-6 mb-3">
				<label for="Phone">Phone</label>
				<input type="tel" class="phone form-control" name="phone" placeholder="000-000-0000">
			  </div>
			  <div class="col-md-6 mb-3">
				<label for="Email">Email</label>
				<input type="email" class="email form-control" name="email" placeholder="email@example.com">
			  </div>
			</div>

		  <hr>
		  <div class="form-row">
			<div class="col-md-6 mb-3">
			  <label for="role">I would like to be a:</label>
			  <select class="gwc_role form-control" name="gwc_role">
				<option> -Please Select- </option>
				<option>Student</option>
				<option>Volunteer</option>
				<option>Guest Speaker</option>
			  </select>
			</div>
			<div class="col-md-6 mb-3">
				<label for="experience">Programming Experience (Years)</label>
				<select class="experience form-control" name="experience">
				  <option> -Please Select- </option>
				  <option>0</option>
				  <option>1-3</option>
				  <option>3-5</option>
				  <option>5-10</option>
				  <option>10+</option>
				</select>
			</div>
		  </div>

		  <div class="form-row">
			<div class="col-md-6 mb-3">
				<label for="School">School
					<input type="text" class="school form-control" name="school">
				</label>
			</div>
			<div class="col-md-6 mb-3">
				<label for="education">Education Level:</label>
				<select class="education form-control" name="education">
				  <option> -Please Select- </option>
				  <option>Kindergarten</option>
				  <option>Grade 1</option>
				  <option>Grade 2</option>
				  <option>Grade 3</option>
				  <option>Grade 4</option>
				  <option>Grade 5</option>
				  <option>Middle School (6-8)</option>
				  <option>High School (9-12)</option>
				  <option>Some College</option>
				  <option>Certificate</option>
				  <option>Associates</option>
				  <option>Bachelors</option>
				  <option>Masters</option>
				  <option>Doctorate</option>
				  <option>Self-Taught/Home-schooled</option>
				</select>
			</div>
		  </div>
		  <div class="form-row">
			<div class="col-md-12 mb-3">
				<label for="Company">Company
					<input type="text" class="company form-control" name="company">
				</label>
			</div>
		  </div>

		  <hr>
		  
		  <div class="form-row">
			<div class="col-md-12 mb-3">
				<label for="profile-summary"> Tell Us About Yourself
					<textarea class="form-control" name="message" maxlength="200"></textarea>
				</label>
			</div>
		  </div>
		  <input class="submit_btn mb-5 btn btn-danger" type="submit" value="Submit" name="submit">
		</form>
	</div><!--container-->

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
