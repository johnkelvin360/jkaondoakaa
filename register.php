<?php include('server.php'); ?>

<!DOCTYPE html>
        <html><meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>ATA Membership Registration</title>
                  
                  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
                   <link rel="stylesheet" href="wow/css/styles.css" type="text/css">
            </head>
                  <body>

                        <!-- Nav Bar -->

      <div class="custom-padding">
            <nav>
                  <div class="logo"><a href="register.php"><img src="images/logo.jpg"  alt="" ></a></div>
                  <ul class="menu-area">
                       
                       <li><a href="register.php">Register</a></li>
                       <li><a href="index.php">Login</a></li>
                       <li><a href="contact.php">Contact</a></li>
                  </ul>
            </nav>
      </div>
            	     <div class="header">
					 
            		    <h2>Register</h2>
		

					 </div>
					 
            	     <form method="post" action="register.php" name="Register">
					 
            	     <!-- display validation errors here -->
					 <?php include('errors.php'); ?>

                        <div style = "text-align:center">
                                          <div style = "display:inline-block;">
                                                <img id="avat-image" src="images/avatar.png" alt="Avatar"/>
                                          </div>
                                    </div> 
                                    <!-- The two divs I used to wrap the image helped me to float it to the center you can see the first div says text-align center
                                    * The second div then sets display to inline-block which helps push the image to the center as directed by the first div. 
                                    *Consider adding bootstrap to the project it will help reduce the stress of writing some of these css. But move at your own pace though. All the best
                                     -->
                        <center><input type="file" name="image" id="fileToUpload"></center>
					 
                        <div class="input-group">
                              <label>Username</label>
                              <input type="text" name="username" value="<?php echo $username; ?>">
                        </div>
            		<div class="input-group">
            			<label>First Name</label>
            			<input type="text" name="first_name">
            		</div>
            		<div class="input-group">
            			<label>Last Name</label>
            			<input type="text" name="last_name">
            		</div>
                        <div class="radio">
                              <label>Gender:</label>
                   
                        <input type="radio" name="gender"
                  <?php if (isset($gender) && $gender=="male") echo "checked";?>
                  value="male">    Male
                  <input type="radio" name="gender"
                  <?php if (isset($gender) && $gender=="female") echo "checked";?>
                  value="female">    Female
                  <input type="radio" name="gender"
                  <?php if (isset($gender) && $gender=="male") echo "checked";?>
                  value="male">    Other
                        </div>
            		<div class="input-group">
            			<label>Email</label>
            			<input type="text" name="email" value="<?php echo $email; ?>" >
            		</div>
            		<div class="input-group">
            			<label>Phone</label>
            			<input type="text" name="phone_number">
            		</div>
            		<div class="input-group">
            			<label>Address</label>
            			<input type="text" name="address">
            		</div>
            		<div class="input-group">
            			<label>Post</label>
            			<input type="text" name="post" >
            		</div>
            		<div class="input-group">
            			<label>Password</label>
            			<input type="text" name="password_1">
            		</div>
            		<div class="input-group">
            			<label>Comfirm Password</label>
            			<input type="text" name="password_2">
            		</div>
            		<div class="input-group">
            			<button type="submit" name="Register" class="btn">Register</button>
            		</div>
            		<p>Login as Admin <a href="index.php"> Click here</a></p>
            	</form>
            	<br></br>
            	<br></br>
            	<div class="footer">&copy;ATA, Nigeria. 2020</div>
            </body>
     </html>