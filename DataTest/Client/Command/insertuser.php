<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost/WorkOut/user/?name=".$_POST['name'].
									"&last_name=".$_POST['last_name'].
									"&email=".$_POST['email'].
									"&birthdate=".$_POST['birthdate'].
									"&phone=".$_POST['phone'].
									"&pass=".$_POST['pass'];
$response = \Httpful\Request::post($url)->send();
//var_dump($response);
header('location:../index.php');
// And you're ready to go!
//$response = \Httpful\Request::get('http://localhost/request/user/?first_name=sorte')->send();
//$request_response = json_decode($response->body);
//foreach($request_response as $value)
//{
//	echo $value->first_name . '<br>';
//	echo '<div class="checkbox">
 //         <label>
//            <input type="checkbox" value="remember-me"> Remember me
 //         </label>
//        </div>';
//}