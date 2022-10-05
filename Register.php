<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Member LaundryMan</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
    
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on">
          <h2>Registrasi Member </h2>
        <!--Username-->
    		<div class="box">
          <label for="Username" class="fl fontLabel"> UserName</label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="username" placeholder="Username"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Username-->


        <!--Alamat-->
    		<div class="box">
          <label for="alamat" class="fl fontLabel"> Alamat </label>
    			<div class="fl iconBox"><i class="fa fa-home" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="alamat"
              placeholder="alamat" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Alamat-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> No. Telephone </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="number" required name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---KTP---->
    		<div class="box">
          <label for="ktp" class="fl fontLabel"> No. KTP</label> 
    			<div class="fl iconBox"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="ktp" placeholder="No. KTP" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--KTP----->

    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<div class="fa fa-male"><input type="radio" name="Gender" value="Male" required> Male </div>&nbsp; &nbsp; &nbsp; &nbsp;
    				<div class="fa fa-female"><input type="radio" name="Gender" value="Female" required> Female</div>
    		</div>
    		<!---Gender--->


    		<!--Terms and Conditions------>
    		<div class="box terms">
    				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
    		</div>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: #70f8ff">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>


    <script src="js.js"></script>
</body>
</html>