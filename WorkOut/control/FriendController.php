<?php

include_once "model/Request.php";
include_once "model/Friend.php";

class FriendController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new Friend($params["name"],
				           $params["friend_name"];
				           
		return var_dump($user);
	}
}