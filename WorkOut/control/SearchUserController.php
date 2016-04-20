<?php

include_once "model/Request.php";
include_once "model/SearchUser.php";

class SearchUserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new SearchUser($params["name"],
							   $params["last_name"],
				               $params["email"];
				 

		return var_dump($user);
	}
}