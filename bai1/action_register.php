<!-- xử lý lệnh -->
	<?php 

	$_SESSION['nameErr']='';
	$_SESSION['emailErr']=
	$_SESSION['phoneErr']='';
	$_SESSION['passwordErr']='';
	$_SESSION['birthErr']='';
	$_SESSION['passErr']='';
	$_SESSION['hobbiesErr']='';
	if (isset($_POST['uname']) && isset($_POST['email']) &&  isset($_POST['password']) &&  isset($_POST['phone']) &&isset($_POST['gender'])&& isset($_POST['day'])&& isset($_POST['month'])&& isset($_POST['year']) && isset($_POST['hobbies'])) {
		$_SESSION['name'] = $_POST['uname'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['gender']= $_POST['gender'];
		$_SESSION['day'] = $_POST['day'];
		$_SESSION['month'] = $_POST['month'];
		$_SESSION['year'] = $_POST['year'];
		$_SESSION['phone'] = $_POST['phone'];
		$_SESSION['hobbies'] = $_POST['hobbies'];


			// username
		if (empty($_SESSION['name'])) {
			$_SESSION['nameErr'] = "Name is require";
		}elseif (!preg_match('/^[a-zA-Z0-9.\-]{6,24}+$/i', $_SESSION['name'])) {
			$_SESSION['nameErr'] = "username At least 6 characters, maximum 24 characters";
		}

			// email
		if (empty($_SESSION['email'])) {
			$_SESSION['emailErr'] = "Email is require";
		}elseif(!preg_match('/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i', $_SESSION['email'])){
			$_SESSION['emailErr'] = "email not right";
		}

			// password
		if (empty($_SESSION['password'])) {
			$_SESSION['passwordErr'] = "password is require";
		}elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,24}$/',$_SESSION['password']) ) {
			$_SESSION['passwordErr'] = " password At least 8 characters, must have alphanumeric characters, maximum 12 characters,no special characters";
		}

		// phone
		if (empty($_SESSION['phone'])) {
			$_SESSION['phoneErr'] = "phone is require";
		}elseif (!preg_match('/^[0-9]{10}+$/',$_SESSION['phone'])) {
			$_SESSION['phoneErr'] = "phone is 10 number not char";
		}

		if (!empty($_SESSION['nameErr'] || !empty($_SESSION['emailErr']) || !empty($_SESSION['passwordErr']) || !empty($_SESSION['phoneErr']))) {}
			else{
				header('location: result.php');
			}

		}

		?>