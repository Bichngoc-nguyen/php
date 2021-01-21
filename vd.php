<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="submit">
</form>
<?php 
	if(isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['submit'])){
    
    
    $a = $_POST['name'];
    if(is_int($a)){
    	echo "int";
    }
    else{
    	echo "lll";
    }
    }
?>
</body>
</html>

