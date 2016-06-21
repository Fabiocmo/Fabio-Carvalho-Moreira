<?php include('navbar.php') ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
  </head>
  <body>

    <div class="container">

    <form class="form-signin" action="Command/insertuser.php" method="post">
        <h2 class="form-signin-heading">Please sign up</h2>
        
        <input type="text" name="name" id="inputUserName" class="form-control" placeholder="First Name" required autofocus>

        <input type="text" name="last_name" id="inputLastName" class="form-control" placeholder="Last Name" required autofocus>
		
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		<input type="date" name="birthdate" id="inputBithDate" class="form-control" placeholder="BirthDate" required autofocus>
        
        <input type="text" name="phone" id="inputPhone" class="form-control" placeholder="Phone" required autofocus>
        
        
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>