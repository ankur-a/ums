<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="../css/loginStyle.css">


</head>

<body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
		<li class="tab"><a href="#a_login">Log In(Admin)</a></li>
      </ul>
		<div class="tab-content">
        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="loginValidation.php" method="post">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>

          <button class="button button-block"/>Log In</button>

          </form>

        </div>
		
		<div id="a_login">   
          <h1>Admin Login!</h1>
          
          <form action="../admin/adminLoginValidation.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name='email1' required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name ='password1' required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
     

      </div><!-- tab-content -->
	

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/loginIndex.js"></script>

</body>
</html>
