<?php
$did=$_GET['deleteid'];
$con=mysqli_connect('localhost','root','','buet');
$result=mysqli_query($con,"delete from cse where id='$did'");
if ($result){
	echo "delete successfully";
}
else{
	echo "failed";
}

?>