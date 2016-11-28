<?php

class User
{
	//protected $table = $users;

	protected function isAdmin()
	{
		if($this->admin)
		{
			true;
		}
		else
		{
			false;
		}
	}
}