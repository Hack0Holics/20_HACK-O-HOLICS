<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./clg_ad.css" />
    <title>Admission</title>
</head>

<body>
    <h2>Online Admission Form</h2><br>
    <h4>Basic Information</h4>
    <div class="card">
        <table class="table">
            <tr>
                <td>
                    <label for="fname">First Name:&nbsp;<sup>*</sup></label>
                    <input type="text" name="fname" required/>
                </td>
                <td>
                    <label for="lname">Last Name :&nbsp;<sup>*</sup></label>
                    <input type="text" name="lname" required />
                </td>
                <td>
                    <label for="father_name">Father Name :&nbsp;<sup>*</sup></label>
                    <input type="text" name="father_name"  required/>
                </td>
                <td>
                    <label for="m_name">Mother name :&nbsp;<sup>*</sup></label>
                    <input type="text" name="m_name"required />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="phone">Mobile :&nbsp;<sup>*</sup></label><span style="padding-left: 25px;"></span>
                    <input type="number" name="pnumber1"required />
                </td>
                <td>
                    <label for="email">Email :</label><span style="padding-left: 37px;"></span>
                    <input type="email" name="email" />
                </td>
                <td>
                    <label for="dob">DOB :&nbsp;<sup>*</sup></label><span style="padding-left: 10px;"></span>
                    <input type="date" name="dob" required/>
                </td>
                <td>
                    <label for="gender">Gender :&nbsp;<sup>*</sup></label><span style="padding-left: 8px;"></span>
                    <select name="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Unknown</option>
                    </select>

                </td>
            </tr>
        </table>
    </div><br>
    <h4>Contact Information</h4>
    <div class="card">
        <table class="table">
            <tr>
                <td>
                    <label for="country">Country :</label><span style="padding-left: 10px;"></span>
                    <input type="text" name="country" />
                </td>
                <td>
                    <label for="state">State :</label><span style="padding-left: 20px;"></span>
                    <input type="text" name="state" />
                </td>
                <td>
                    <label for="city">City :</label><span style="padding-left: 40px;"></span>
                    <input type="text" name="city" />
                </td>
                <td>
                    <label for="pin_code">Pin code :&nbsp;<sup>*</sup></label><span style="padding-left: 8px;"></span>
                    <input type="number" name="pincode" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Mobile 2:</label>&nbsp;&nbsp;
                    <input type="number" name="pnumber2" />
                </td>
                <td>
                    <label for="email">Email 2:</label>&nbsp;&nbsp;
                    <input type="email" name="email2" />
                </td>
                <td>
                    <label for="addr">Address 1 :</label>
                    <input type="text" name="addr1" />
                </td>
                <td>
                    <label for="addr">Address 2:</label><span style="padding-left: 6px;"></span>
                    <input type="text" name="addr2">
                </td>
            </tr>
        </table>


    </div>


    <h4>Admission details</h4>
    <div class="card">
        <table class="table">
            <tr>
                <td>
                    <label for="c_name">College name:&nbsp;<sup>*</sup></label>
                    <!--<input list="c_name" name="c_name" id="c" required>-->
                    <select name="c_name">
                        <!--<option>JNN Collge of Engineering</option>
                        <option>PES Institute of Technology</option>
                        <option>Malnad Collge of Engineering</option>
                        <option>RV College of Engineering</option>
                        <option>SDM College of Engineering </option>-->
						<?php
										include 'connection.php';
										$query="select college_name from college";
										$run=mysqli_query($conn,$query);
										while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['college_name'].">".$row['college_name']."</option>";
										}
									?>
                    </select>
                </td>
                <td>
                    <label for="course">Course :&nbsp;<sup>*</sup></label><span style="padding-left: 80px;"></span>
                    <select name="course" required>
                        <option>B.E</option>
                        <option>B.Tech</option>
                    </select>
                </td>
                <td>
                    <label for="branch">Department :&nbsp;<sup>*</sup></label>
                    <select name="branch" required>
                        <option>CIVIL</option>
                        <option>MECHANICAL</option>
                        <option>EEE</option>
                        <option>TCE</option>
                        <option>ISE</option>
                        <option>CSE</option>
                        <option>ECE</option>
                    </select>
                    
                </td>
                <td>
                    <label for="puc">PUC % :&nbsp;<sup>*</sup></label>
                    <input type="number" name="puc" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="sslc">SSLC %:&nbsp;<sup>*</sup></label><span style="padding-left: 45px;"></span>
                    <input type="number" name="sslc" required/>
                </td>
                <td>
                    <label for="aq">Admission Quota:&nbsp;<sup>*</sup></label>&nbsp;&nbsp;
                    <select name="aq">
                        <option>K-CET</option>
                        <option>COMEDK</option>
                        <option>MANAGEMENT</option>
                    </select>
                </td>
            </tr>
        </table>
        </div><br>
        <div class="p-4">
            <center><input type="submit" name="submit" value="SUBMIT" id="send"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name ="reset" value="RESET" id="reset"/>
            </center>

        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>