<?php

include_once "model/Request.php";
include_once "model/Publication.php";

class PublicationController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new Publication($params["name"],
				                $params["id_publication"],
				                $params["date_hour"];
				           
		return var_dump($user);
	}
}