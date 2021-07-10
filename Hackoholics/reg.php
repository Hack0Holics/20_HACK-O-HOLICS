<html> 
    <head>
        <title>Admission Form</title>
       
<body>  
    
      <div class="admission-form"><h1><center>Admission Form</center></h1></div>
        <div class="main">
          <form>
              <div id="name">
              <h2 class="name" >Student name <span style="color:red">*</span></h2>
              <input class="name" type="text" name="first name" required>
                           
                  <h2 class="name" >Father Name <span style="color:red">*</span></h2>
                  <input class="fathername" type="text" name="Father Name" required>

                  <h2 class="name" >Mother Name <span style="color:red">*</span></h2>
                  <input class="mothername" type="text" name="Mother Name" required>
                  
                  <h2 class="name" >Date of Birth <span style="color:red">*</span></h2>
                  <input class="dob" type="date" name="Date of Birth" required>
              
                  <h2 class="name" >Residence Address</h2>
                  <input class="address" type="text" name="Residence Address" required>

                  <h2 class="name"> Standard <span style="color:red">*</span></h2>
                  <input class="standard" type="text" name="Standard" required>

                  <h2 class="name" > Blood Group <span style="color:red">*</span></h2>
                  <select class="name" onchange="validateBlood()" onblur="validateBlood()" id="blood" required>
                    <option value="">-- Select --</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                     <option value="B+">B+</option>
                     <option value="B-">B-</option>
                       <option value="O+">O+</option>
                       <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                       <option value="AB-">AB-</option>
                    </select>

                  <h2 class="name" required>School <span style="color:red">*</span></h2>
                  <select class="name" onchange="validateBlood()" onblur="validateBlood()" id="blood" required>
                    <option value="">-- Select --</option>
                    <option value="">Mary Immaculate Girls High School</option>
                    <option value=""> BGS Sri Venkateshwara Vidya Mandira</option>
                     <option value="">Sri Adichunchanagiri shiskshana trust</option>
                     <option value="">Swamy Vivekananada English School</option>
                       <option value="">Nachiketa Vidya Samste</option>
                       <option value="">Sharda Vidya Mandira</option>
                        <option value="">Sacred heart School</option>
                       <option value="">Delhi Public School</option>
                       <option value="">National Public School</option>
                    </select>
          
               
                <h2 class="name" > Gender <span style="color:red">*</span></h2>
                <input type="radio" id="html" name="fav_language" value="HTML" required>
                <label for="html">Male</label><br>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label for="css">Female</label><br>
                </br>

                <h2 for="phone" >Mobile Number <span style="color:red">*</span></h2>
              <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
               

                  <h2 class="name"> Email Id(optional)</h2>
                  <input class="emaiid" type="email" name="email Id">
                <br> <br> <br>
               <center>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="showSection3()">
                  Submit
                </button>
               </center>
              </div>
              </div>
          </form>
        <br>
        

<style>
   

body{
  background-image: url(./images/11.jpg);
  background-size: cover;
  margin-top: 30px;
  background-position: center;
  font-family: Times New Roman;
}
.admission-form
{
   width: 800px;
  background-color:rgb(0,0,0,0.6);
  margin:auto;
  color:#FFFFFF;
  padding: 5px 0px 5px 0px;
  text-align:center;
  border-radius: 5px 5px 0px 0px;
}
.main
{
  background-color: rgb(0,0,0,0.5);
  width:800px;
  margin:auto;
  font-size: 16px;
  color:#FFFFFF;
  
  left: 200px;
   top: -37px;
   line-height: 20px;
   width: 532px;
   border-radius: 0px 0px 5px 5px;
   padding: 21px 248px 22px 22px;
 }
 a
 {
     position: relative;
     display: inline-block;
     padding: 15px 30px;
     text-decoration: none;
     overflow: hidden;
     transition: 0.2s;
     
 }

 input[type=text]
 {
   width: 50%;
   border: 2px solid #aaa;
   border-radius: 4px;
   margin: 8px 0;
   outline: none;
   padding: 8px;
   box-sizing: border-box;
 }

 input[type=checkbox]
 {
   font-size: 110%; margin: 0px;  width: 30px;
 }
 button{
   background-color: #ffffff;
  font-size: large;
  font-weight: 200;
  text-align: center;
  
  font-family: 'Times New Roman', Times, serif;
}
 
h2{
  font-size: large;
  font-family: 'Times New Roman', Times, serif;
  color:black;
}
</style>






































