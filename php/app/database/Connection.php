<?php 

class Connection

{
	protected $config;

	public static function make($config)
	{
		try {
			return new SQLite3($config['name']);
		} catch (PDOException $e) {
			die($e->getMessage());
		}

	}
}