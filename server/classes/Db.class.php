<?php
class Db
{
	public $host = '';
	public $username = '';
	public $passwd = '';
	public $dbname = '';
	public $port = '';
	public $socket = '';
	public $flags = '';
	
	public function __construct($host, $username, $passwd, $dbname, $port)
	{
		$this->host = $host;
		$this->username = $username;
		$this->passwd = $passwd;
		$this->dbname = $dbname;
		$this->port = $port;
	}
	
	public function __destruct()
	{
	}
	
	public function real_connect()
	{
		$this->mysqli = mysqli_init();
		if (!$this->mysqli)
		{
			die('mysqli_init failed');
		}
		if (!$this->mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 1'))
		{
			die('Setting MYSQLI_INIT_COMMAND failed');
		}
		if (!$this->mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5))
		{
			die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
		}
		$this->mysqli->real_connect($this->host, $this->username, $this->passwd, $this->dbname, $this->port);
		if (mysqli_connect_errno())
		{
			die("ERROR: ".mysqli_connect_error());
		}
		return $this->mysqli;
	}
}
?>