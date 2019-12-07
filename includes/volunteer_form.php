
	<div class="container">
		<div class="info-title title mb-5 mt-5"><h1>Volunteer/Guest Speaker Registration</h1></div>

		<form class="signup_form" method="POST" action="../girlswhocode/includes/signup_form.php">

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
				<option value = ""> -Please Select- </option>
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
			</div>
			<div class="col-md-3 mb-3">
			  <label for="Zip Code">Zip</label>
			  <input type="text" class="zip form-control" name="zip">
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
				<label for="School">School (Optional)
					<input type="text" class="school form-control" name="school">
				</label>
			</div>
			<div class="col-md-6 mb-3">
				<label for="education">Education Level:</label>
				<select class="education form-control" name="education">
				  <option> -Please Select- </option>
				  <option>High School</option>
				  <option>Certificate</option>
				  <option>Associates</option>
				  <option>Bachelors</option>
				  <option>Masters</option>
				  <option>Doctorate</option>
				  <option>Self-Taught</option>
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

     
