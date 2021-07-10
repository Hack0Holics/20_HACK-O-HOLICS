<?php

	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname="registration";
	
	$conn = mysqli_connect($servername, $username, $password,$dbname);

    $first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$father_name=$_POST["father_name"];
$mother_name=$_POST["m_name"];
$gender=$_POST["gender"];
$dob=date('Y-m-d',strtotime($_POST["dob"]));
$country=$_POST["country"];
$State=$_POST["state"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$address1=$_POST["addr1"];
$phone1=$_POST["pnumber1"];
$email1=$_POST["email1"];
$address2=$_POST["addr2"];
$phone2=$_POST["pnumber2"];
$email2=$_POST["email2"];
$college=$_POST["c_name"];
$course=$_POST["course"];
$branch=$_POST["branch"];
$puc=$_POST["puc"];
$sslc=$_POST["sslc"];
$aq=$_POST["aq"];



$sql="INSERT INTO college_admission (F_NAME, L_NAME, FA_NAME, M_NAME, MOBILE, EMAIL,DOB, GENDER, COUNTRY,STATE,CITY, PIN, MOBILE_2, EMAIL_2, ADDR_1, ADDR_2, CLG_NAME, COURSE, DEPT, PUC, SSLC, AD_QT) VALUES ('$first_name','$last_name','$father_name','$mother_name','$phone1','$email1','$dob','$gender','$country','$State','$city','$pincode','$phone2','$email2','$address1','$address2','$college','$course','$branch','$puc','$sslc','$aq')";

 /*   $sql="INSERT INTO name (S_name,section,sem) VALUES ('$name','$sec','$sem')";*/
    if($conn->query($sql)===TRUE)
    {
        echo "inserted Successfully";
    }
    else{
        echo "Not Inserted".$sql."<br>".$conn->error;
    }
    $conn->close();



?>