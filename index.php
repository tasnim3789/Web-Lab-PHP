<?php
if(isset($_POST['register'])) {
	$firstname=$_POST['f_name'];
	$lastname=$_POST['l_roll'];
	$password=$_POST['p_word'];	
	$gmail=$_POST['gmail'];	
	$cgpa=$_POST['cgpa'];	
	$roll=$_POST['roll'];
    
	$con=mysqli_connect('localhost','root','','diu');
	//con variable call korbo database connect kora lagle
	
	$query=mysqli_query($con,"insert into cse(firstname,lastname,password,gmail,cgpa,roll) 
	values('$firstname','$lastname','$password','$gmail','$cgpa','$roll')");
	//table er sathe connect //$con, mane database er vitore table e
	
	if($query){ //qery sotto hoy
		echo "Data inserted Successfully";
	}
	else{
		echo "Data inserted failed";
	}
}
?>

<html>
	<head>
	</head>
	<body>

	<form method="post" action="">
		<input type="text" name="f_name" placeholder="Enter Your First Name"><br></br>
		<input type="text" name="l_roll" placeholder="Enter Your Last Name"><br></br>
		<input type="text" name="p_word" placeholder="Enter Your Password"><br></br>
		<input type="text" name="gmail" placeholder="Enter Your Gmail"><br></br>	
		<input type="text" name="cgpa" placeholder="Enter Your Cgpa"><br></br>
		<input type="text" name="roll" placeholder="Enter Your Roll"><br></br>		
		<input type="submit" name="register"  value="Register"><br></br>
	</form>
	</body>
	
</html>
