<?php
session.start();
include 'connection.php';


if(isset($_POST['submit']))
{
    $first_name=$_POST["firstname"];
    $last_name=$_POST["lastname"];
    $gender=$_POST["gender"];
    $dob=$_POST["dateob"];
    $age=$_POST["age"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $query="Insert into student(fname,lname,gender,dob,age,address,phone,email)values('$first_name','$last_name','$gender','$dob','$age','$address','$phone','$email')";
 		$run=mysqli_query($con, $query);
 		if ($run) {
 			echo "Your Data has been submitted";
 		}
 		else {
 			echo "Your Data has not been submitted";
 		}
}
?>