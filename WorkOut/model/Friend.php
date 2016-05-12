<?php

class Friend
{
	private $id_user;
	private $id_user_friend;
	
	public function __construct($id_user, $id_user_friend)
	{
		$this->id_user = $id_user;
		$this->id_user_friend = $id_user_friend;
	}

	public function getIdUser()
	{
		return $this->id_user;
	}
	public function getIdUserFriend()
	{
		return $this->id_user_friend;
	}

}