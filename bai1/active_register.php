<?php 
	
	// birthday
	/**
	 * 
	 */
	class Birthday 
	{
		
		// day
		public function getDay()
		{
			for ($day=1; $day <= 31; $day++) { 
				$selected = '';
				if (isset($_POST['day']) && $_POST['day']== $day) {
					$selected = "selected";
				}
					echo "<option $selected >".$day."</option>";
			}
		}

		// month
		public function getMonth()
		{
			for ($month=1; $month <= 12; $month++) { 
				$selected = '';
				if (isset($_POST['month']) && $_POST['month'] == $month) {
					$selected = "selected";
				}
				echo "<option $selected >".$month."</option>";
			}
		}

		// year
		public function getYear()
		{
			for ($year=1990; $year <= 2013; $year++) { 
				$selected = '';
				if (isset($_POST['year']) && $_POST['year'] == $year) {
					$selected = "selected";
				}
				echo "<option $selected >".$year."</option>";
			}
		}
	}

 ?>