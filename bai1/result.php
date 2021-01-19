<?php include_once 'head.php'; ?>
<?php 
if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['phone'])  && isset($_SESSION['gender']) && isset($_SESSION['day']) && isset($_SESSION['month']) && isset($_SESSION['year']) && isset($_SESSION['password']) && isset($_SESSION['hobbies'])) {

	if (isset($_SESSION['gender'])  && $_SESSION['gender'] == 'male') {
		$gender = $_SESSION['gender'];
	} elseif (isset($_SESSION['gender']) && $_SESSION['gender']== 'female') {
		$gender = $_SESSION['gender'];
	}	
	else{
		$gender = $_SESSION['gender'];
	}				
}
?>
<div class="form_register">
	<h3>Register Confirm</h3>
	<form action="home.php" method="post">
		<label>UserName: </label> 
		<input type="text" class="form-control" name="uname" value="<?php echo(trim(strtolower($_SESSION['name']))); ?>"> <br> 
		<label>Email: </label>
		<input type="text" class="form-control" name="email" value="<?php echo($_SESSION['email']);?>"> <br> 
		<label>Password:</label>
		<input type="password" class="form-control" name="password" value="<?php echo($_SESSION['password']);?>"> <br>
		<label>Gender: </label>
		<input type="text" name="gender" class="form-control gender" value="<?php echo($gender); ?>"> <br><br>
		<label>Birthday:</label>
		<input type="text" name="day" class="form-control birthday" value="<?php echo($_SESSION['day']); ?>">
		<input type="text" name="day" class="form-control birthday" value="<?php echo($_SESSION['month']); ?>">
		<input type="text" name="day" class="form-control birthday" value="<?php echo($_SESSION['year']); ?>"> <br>
		<label>Telephone: </label>
		<input type="text" class="form-control" name="phone" value="<?php echo($_SESSION['phone']); ?>"><br>
		<label class="hobbies">Hobbies:</label>
		<?php 
			if (isset($_SESSION['hobbies'])) {
				foreach ( $_SESSION['hobbies']as $value) {
					echo $value.",";
				}
			}
		 ?>
		

		<button class="btn btn-success" name="submit">Register</button>
	</form>
</div>
<?php include_once 'footer.php'; ?>