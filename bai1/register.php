
<?php require_once 'action_register.php'; ?>

<div class="form_register">
	<form action="index.php" method="post">
		<h3>Form Register</h3>
		<label>UserName: </label> 
		<span class="error">*<?php echo $_SESSION['nameErr']; ?></span>
		<input type="text" class="form-control" name="username" value="<?php echo $_SESSION['name']; ?>"> <br> 
		<label>Email: </label>
		<span class="error">*<?php echo $_SESSION['emailErr']; ?></span>
		<input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>"> <br> 
		<label>Password:</label>
		<span class="error">*<?php echo $_SESSION['passwordErr']; ?></span>
		<input type="password" class="form-control" name="password" value="<?php echo $_SESSION['password']; ?>"> <br>
		<label>Gender: </label>
		<select name="gender" id="">
			<option value="Other">Other</option>
			<option value="Male">Male</option>	
			<option value="Female">Female</option>	
		</select> <br>

		<label>Birthday:</label>
		<select name="day">
			<option disabled>Day</option>
			<?php 
			require_once 'active_register.php';
				$day = new Birthday();
				echo $day->getDay();
			?>
		</select>
		<select name="month">
			<option disabled>Month</option>
			<?php 
				require_once 'active_register.php';
				$month = new Birthday();
				echo $month->getMonth();
			?>
		</select>
		<select name="year">
			<option disabled>year</option>
			<?php 
				require_once 'active_register.php';
				$year = new Birthday();
				echo $year->getYear();
			?>
		</select> <br>
		<label>Telephone: </label>
		<span class="error">*<?php echo $_SESSION['phoneErr']; ?></span>
		<input type="text" class="form-control" name="phone"><br>
		<label>Hobbies: </label> <br>
		<input type="checkbox" name="hobbies[]" value="Music">
		<label>Music</label>
		<input type="checkbox" name="hobbies[]" value="Cook">
		<label>Cook</label>
		<input type="checkbox" name="hobbies[]" value="Watch TV">
		<label>Watch TV</label>
		<input type="checkbox" name="hobbies[]" value="Read Book">
		<label>Read Book</label>

		<button class="btn btn-success" name="submit">Register</button>
	</form>
</div>
