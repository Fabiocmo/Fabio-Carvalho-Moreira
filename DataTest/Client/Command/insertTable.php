<?php

include ('httpful.phar');

$url = "http://localhost/WorkOut/chartexercise/?email=".$_POST['email']."&expire_date=".$_POST['expire_date']."&chart_exercise=".$_POST['chart_exercise']."&segunda_feira=".$_POST['segunda_feira']."&terca_feira=".$_POST['terca_feira']."&quarta_feira=".$_POST['quarta_feira']."&quinta_feira=".$_POST['quinta_feira']."&sexta_feira=".$_POST['sexta_feira']."&sabado=".$_POST['sabado'];

$response = \Httpful\Request::post($url)->send();


header('location:../index.php');