<?php

class UserIdentity extends CUserIdentity
{
	private $_id;
	public function authenticate()
	{
		$user = User::model()->find('username="'.$this->username.'" and password="'. $this->password.'"');
		
		if($user === null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(empty($user->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else {
			$this->username = $user->username;  // Yii::app()->user->name
			$this->_id = $user->id;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	public function getId() // get user_id, Yii::app()->user->id
	{
		return $this->_id;
	}
}