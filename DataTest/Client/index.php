<?php include('navbar.php') ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>index</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
	
	<style>
	
	.col-md-4 > a {
	color: inherit; 
	text-decoration: none;
	}
	
	</style>
	
  </head>
  <body>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <center><h1>WorkOut</h1></center>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Description</h2>
          <p> track your series of exercises by computer, phone or tablet. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
        <!--   <h1>Not Here yet?</h1> -->
		 <!--  <h2>Register!</h2> -->
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

    </div> 
         <!--  <a  href="Register.php" ><button class="btn btn-lg btn-primary btn-block">Register</button></a>
        </div>
        <div class="col-md-4">
          <h2>Or Register via:</h2> -->
		
        </div>
       </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 WorkOut, All Rights Reserveds</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>