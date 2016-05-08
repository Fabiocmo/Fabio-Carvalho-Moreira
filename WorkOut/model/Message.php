<?php

class Message
{
	private $id_user_send;
	private $id_user_receive;
	private $message;
	
	public function __construct($id_user_send, $id_user_receive, $message)
	{		
		$this->id_user_send = $id_user_send;
		$this->id_user_receive = $id_user_receive;
		$this->message = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}
	public function getIdUserSend()
	{
		return $this->id_user_send;
	}
	public function getIdUserReceive()
	{
		return $this->id_user_receive;
	}
	
	
}