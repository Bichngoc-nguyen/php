
<?php include_once 'action_register.php'; ?>
<div class="form_register">
	<form action="index.php" method="post">
		<h3>Form Register</h3>
		<label>UserName: </label> 
		<span class="error">*<?php echo $_SESSION['nameErr']; ?></span>
		<input type="text" class="form-control" name="uname" value=""> <br> 
		<label>Email: </label>
		<span class="error">*<?php echo $_SESSION['emailErr']; ?></span>
		<input type="text" class="form-control" name="email" value=""> <br> 
		<label>Password:</label>
		<span class="error">*<?php echo $_SESSION['passwordErr']; ?></span>
		<input type="password" class="form-control" name="password"> <br>
		<label>Gender: </label>
		<select name="gender" id="">
			<option value="other">Other</option>
			<option value="male">Male</option>	
			<option value="female">Female</option>		
		</select> <br>

		<label>Birthday:</label>
		<select name="day">
			<option disabled>Day</option>
			<?php 
			$day = 1;
			for ($day=1; $day <= 31; $day++) { 
				echo "<option>";
				echo $day;
				echo "</option>";
			}
			?>
		</select>
		<select name="month">
			<option disabled>Month</option>
			<?php 
			$month = 1;
			for ($month=1; $month <= 12; $month++) { 
				echo "<option>";
				echo $month;
				echo "</option>";
			}
			?>
		</select>
		<select name="year">
			<option disabled>year</option>
			<?php 
			$year = 1990;
			for ($year=1990; $year <= 2021; $year++) { 
				echo "<option>";
				echo $year;
				echo "</option>";
			}
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
