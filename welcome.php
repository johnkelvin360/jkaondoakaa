<?php include ('server.php'); 
//if user is not logged in, they cannot access this page

if (empty($_SESSION['username'])) {
      header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	       <title>homepage</title>
                  <link href="wow/font-awesome/css/font-awesome.css" rel="stylesheet" />
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

	<!-- Container -->
                  <br></br>
                  <br></br>
	<div class="header">
		
                    <h2>ATA Membership</h2>
                </div>
            
                <div class="content">
                  
                  <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
			<?php endif ?>

               
                    <?php if (isset($_SESSION['username'])): ?>
                    <p> Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
                    <p><a href="register.php?logout='1' " style="color: red;">logout</a></p>
                <?php endif ?>
                </div> 
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                    <div class="footer">&copy;ATA, Nigeria. 2020</div>	

</body>
</html>