<?php 

class UserController
{
	public $name;
	public $email;
	protected $admin;

	public function __construct($name, $email, $admin=null)
	{
		$this->name = $name;
		$this->email = $email;
	}

	public function index()
	{

	}

	public function create()
	{
		return $this->name;
	}
}