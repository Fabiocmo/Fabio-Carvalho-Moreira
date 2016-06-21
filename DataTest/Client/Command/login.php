<?php
session_start();
include('httpful.phar');
include_once "DatabaseConnector.php";

$campos = "../addService.php";
$ident = 0;

if (isset($_POST['submitted'])) { // Check if the form has been submitted.
	$u = $_POST['user_id'];
	$p = $_POST['pass'];
	
	$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");
	$conn = $db->getConnection();
	$result = $conn->query("SELECT id, email FROM user WHERE email = '" . $u . "' AND pass = '" . $p . "'");
	$query = $result->fetchAll(PDO::FETCH_ASSOC);
	$i = $query[0]['id'];
	
	if($query != null){
		$_SESSION['CurrentUser'] = $i;
	} else {
		$_SESSION['CurrentUser'] = null;
		echo "Senha ou usuário invalidos";
	}
	


	// $ident += $_SESSION['CurrentUser'];

	// echo $ident;
	



	
}
else Echo "Digite seu login e senha!";
	
	//////mostrando os dados do usuario
	// if (!empty($_GET['user_id']) ){

	$response = \Httpful\Request::get("http://localhost/WorkOut/user/?id=".$_SESSION['CurrentUser'])->send();
$request_response = json_decode($response->body);
?>

		<h1> Seja bem vindo ao WorkOut!</h1>
		<h3>Perfil</h3>
<?php
// var_dump($request_response);
		foreach($request_response as $value)
		{?>
 		<p>Nome: <?php echo $value->name;?>
 		<p>Sobrenome: <?php echo $value->last_name;?>
 		<p>Email: <?php echo $value->email;?>
 		<p>Data de Nascimento: <?php echo $value->birthdate;?>
 		<p>Telefone: <?php echo $value->phone;
		}


// }
// else Echo "nenhum dado";

?>

<li><a href="../registerTableExercise.php">Registrar Tabela</a></li>
  
<?php
$response = \Httpful\Request::get("http://localhost/WorkOut/chartexercise/?email=".$_POST['user_id'])->send();
$request_response = json_decode($response->body);
?>

<h1> Tabela de Exerícios</h1>
<?php
		foreach($request_response as $value)
		{?>
<table border="1">
<tr>
	<th>Segunda-Feira</th>
	<th>Terça-Feira</th>
	<th>Quarta-Feira</th>
	<th>Quinta-Feira</th>
	<th>Sexta-Feira</th>
	<th>Sábado</th>
</tr>


		
<tr>
	<td><?php echo $value->segunda_feira; ?></td>
	<td><?php echo $value->terca_feira; ?></td>
	<td><?php echo $value->quarta_feira; ?></td>
	<td><?php echo $value->quinta_feira; ?></td>
	<td><?php echo $value->sexta_feira; ?></td>
	<td><?php echo $value->sabado; }?></td>
</tr>


</table>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>::.WorkOut.::</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/signin.css" rel="stylesheet">
	
  </head>
  <body>
	
	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          
				
        </div>
      
       </div>
      </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>
