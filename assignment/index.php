
<!DOCTYPE html>
<html>
<head>
	<style>
		p
		{
               background: rgb(0,0,0,0.2);
        	   color:white;
        	   position: absolute; 

               top: 150px; 
               left: 700px;
               width: 300px; 
         }
        
         .form
         {

            background-color: #d4dade;
            margin-top: -25px;
            width: 1000px;
            
          }
          input[type=submit]
          {
          	background-color: #eea29a;
            color: black;
           height: 40px;
           width: 90px;

          }
          #rcorners
          {
          	border-radius: 25px;
          	border: 2px solid white;
          	
          }
         
      </style>
      <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
<body>


	<div class="sub">
<img src="damian-zaleski-RYyr-k3Ysqg-unsplash.jpg" height="300px" width="1000px">

<p><b>EMPLOYMENT APPLICATION</b><br><br>
<i>Fill the form below<br>
accurately indicating<br>
potentials and suitability<br>
job application for<br></i><br>

</P>

</div>
<body>
	<div class="form">
    <form action="connect.php" method="post">
		<center><h2><strong>Create</strong>&nbsp;an account</h2></center>
	<b><label for="name">Name:<span style="color: red">*</span></label><br><br></b>
	&emsp;<input type="name" name="firstname" id="firstname" required/>&emsp;
    <input type="name" name="lastname" id="lastname" required/><br>
    &emsp;<label for="name">First name</label>
   <label for="name">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Last name</label><br><br><br>
   
   <b><label for="text">Birth date:</label><br><br></b>
   &emsp;<input type="date" name="month" id="month"><br><br>
   <b><label for="text">Mobile Number:<span style="color: red">*</span></label></b><br><br>
   &emsp;<input type="tel" name="mobilenumber"id="mobilenumber"  pattern="[0-9]{10}"><br><br>
   <b><label for="text">Email Address:<span style="color: red">*</span></label></b><br><br>
   &emsp;<input type="Email" name="email" id="email" required/><br><br>
   <b><label for="text">Address:<span style="color: red">*</span></label></b><br><br>
   &emsp;<input type="text" name="address" id="address"  size="60"><br>
   &emsp;<span class="small">street address</span><br><br>
   &emsp;<input type="text" name="address1"  size="20">&emsp;
   &emsp;<input type="text" name="address2" size="20">&emsp;<br>
   &emsp;<span class="small">city</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
   &emsp;<span class="small">state</span><br><br>
   <b><label for="text">How were you reffred to us?</label></b><br><br>
   &emsp;<input type="checkbox" name="walk in">
   <label for="text">Walk in</label><br>
   &emsp;<input type="checkbox" name="newspaper">
   <label for="checkbox">newspaper</label><br><br><br>
   <input type="checkbox" required/>&nbsp;I agree to the license terms.<br><br><br>

   <b><label for="text">Upload resume</label></b><br><br>
   
   <input type="file"><br><br>
<div class="g-recaptcha" data-sitekey="6LdbdgOTAAAAAI7KAf72Q6uagbWzWecTeBWmrCpj"></div>

 <center><a href="view.php"><input type="submit" value="submit" id="rcorners"></a></center>	
  </div>
   </form>
</body>
</body>
</html>