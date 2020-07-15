<?php
	session_start();
	$username = "";
	$email = "";
	$errors = array();
	// db connection

	$conn = mysqli_connect('localhost', 'root', "", 'ata') or die(mysqli_error());
	//if connection fail

	if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);  
}
	//if the register button is clicked

	if (isset($_POST['Register'])) {
		 if(!empty($_POST['gender'])) {

        $gender=$_POST['gender'];
        
}
		$image = $_POST['image'];
		$username = mysql_real_escape_string($_POST['username']);
		$first_name = mysql_real_escape_string($_POST['first_name']);
		$last_name = mysql_real_escape_string($_POST['last_name']);
		$email = mysql_real_escape_string($_POST['email']);
		$phone_number = mysql_real_escape_string($_POST['phone_number']);
		$address = mysql_real_escape_string($_POST['address']);
		$post = mysql_real_escape_string($_POST['post']);
		$password_1 = md5($_POST['password_1']);
		$password_2 = md5($_POST['password_2']);

	//ensure form fields are filled properly

		if (empty($image)) {
			array_push($errors, "Image is required");
		}

	if (empty($username)) {
			array_push($errors, "username is required");
		}
		
	if (empty($first_name)) {
			array_push($errors, "First Name is required");
		}
	if (empty($last_name)) {
			array_push($errors, "Last Name is required");
		}
	if (empty($gender)) {
			array_push($errors, "Please select gender");
		}	
	if (empty($email)) {
			array_push($errors, "Email is required");
		}	
	if (empty($phone_number)) {
			array_push($errors, "Phone Number is required");
		}
	if (empty($address)) {
			array_push($errors, "Address is required");
		}
	if (empty($password_1)) {
			array_push($errors, "password is required");
		}
	 if ($password_1 != $password_2) {
	 			array_push($errors, "Passwords do not match");
	 		}
	 // if there are no errors, save user to database
	$sql=mysqli_query($conn,"SELECT id from members where username='$username' OR email='$email'");
	if(mysqli_num_rows($sql) > 0)
	{
    echo "<script>alert('username already exist with another account. Please try with another');</script>";
}
else{

	 if (count($errors) == 0) {
	 	// list($type,$image) = explode(';',$image);
	 	// list(,$image) = explode(',',$image);
	 	$image=base64_decode($image);
	 	$image_name=time().'.png';
	 	file_put_contents('uploads/avatars/'.$image_name, $image);
	 	
	 	$password_1 = md5($password_1);
	 			$sql = "INSERT INTO members (username, first_name, last_name, gender, email, phone_number, address, post, password_1,posting_date,avatar) 
	 			 VALUES ('$username', '$first_name', '$last_name', '$gender', '$email', '$phone_number', '$address', '$post', '$password_1',date('Y-m-d h:i:sa'), '$image_name')";

	 			 if ($conn->query($sql) === TRUE) {
 	 echo "New record created successfully";
	} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
		$conn->close();


	$_SESSION['username'] = $username;
	$_SESSION ['success'] = "Registration Successful";
	 header('location: welcome.php');


	 		}		
	}
}

// logout
	
	if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: register.php");
}

// $conn->close();
 
?>