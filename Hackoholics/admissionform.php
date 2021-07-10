<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Online Registration form</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="admission.css">
        
    <head>
    <body>
        <?php
if(isset($_POST['submit']))
{
    include 'connection.php';
    $first_name=$_POST["firstname"];
    $last_name=$_POST["lastname"];
    $gender=$_POST["gender"];
    $dob=date('Y-m-d',strtotime($_POST["dateob"]));
    $age=$_POST["age"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $query="INSERT INTO student (fname,lname,gender,dob,age,maddress,phone,email) values('$first_name','$last_name','$gender','$dob','$age','$address','$phone','$email')";
    $sql="INSERT INTO name (S_name,section,sem) VALUES ('$name','$sec','$sem')";
    $run=mysqli_query($conn, $query);
 		if ($run) {
 			echo "Your Data has been submitted";
 		}
 		else {
 			echo "Your Data has not been submitted";
 		}
        
}
?>
        <section  class="main py-5" id="main">
            <div class="container-fluid">
                <div class="row pt-2">
                    <div class="col-xl-12 col-lg-12 col-md-12 w-100">
                        <h4 style="text-align: center;">Online Addmission Form</h4>
                    </div>
                </div>
                <div class="bg-img">
                    <div class="content">
                        <form action="admissionform.php" method="POST" enctype="multipart/form-data">
                           <!-- <fieldset>-->
                               <div>
                                    <label> Firstname </label>         
					                <input type="text" name="firstname" id="fname" size="15"/>    
					                <label> Lastname: </label>         
					                <input type="text" name="lastname" id ="lname" size="15"/> <br> <br>
                               </div>
                               <div>
                                    <label>Gender :</label><br>  
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="male">Male</label><br>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female">Female</label><br>
                                    <input type="radio" id="other" name="gender" value="other">
                                    <label for="other">Other</label><br> 
                               </div>
                               <div>
                                    <label for="date"> Date of Birth:</label>
                                    <input type="date" id="date" name="dateob"/><br><br>
                                </div>
                                <div>
                                    <label>Enter your age: </label>  
                                    <input type="number" name="age" max="80"/><br><br> 
                               </div>
                               <div>
                                    <label>Address:  </label><br>  
                                    <textarea cols="50" rows="5" name="address" value="address"> </textarea> <br> <br>  
                               </div>
                               <div>
                                    <label>Phone : </label>  
                               
                                    <input type="text" name="phone" size="10"/> <br> <br> 
                               </div>
                               <div>
                                    <label for="email">	Email: </label> 
                                    <input type="email" id="email" name="email"/> <br><br>
                               </div>
                               <div>
                                <input type="submit" name="submit" value="Submit"/>
                                <input type="reset" value="reset"/>
                               </div>

                           <!---</fieldset>-->
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>