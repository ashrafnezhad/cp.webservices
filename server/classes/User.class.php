<?php
include_once("/Applications/XAMPP/xamppfiles/htdocs/www/pachabhaiya.com/c/source.code/cp.webservices/server/configuration.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/www/pachabhaiya.com/c/source.code/cp.webservices/server/classes/Db.class.php");
class User extends Db
{
	public function __construct()
	{
		parent::__construct(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME, PORT);
		$this->mysqli = $this->real_connect();
	}
	
	public function AddUser($user_id, $user_name, $user_pswd, $fullname)
	{
		$sql = "INSERT INTO tbl_user (user_id, user_name, user_pswd, fullname) VALUES ($user_id, '$user_name', '$user_pswd', '$fullname')";
		$res = $this->mysqli->query($sql, MYSQLI_STORE_RESULT);
		if ($this->mysqli->affected_rows > 0)
		{
			$return = "SUCCESS";
		}
		else
		{
			$return = "FAILED";
		}
		return $return;
	}
	
	public function GetUser($user_id = NULL)
	{
		$return = array();
		$sql = "SELECT user_id, user_name, user_pswd, fullname";
		$sql .= " FROM tbl_user";
		if ($user_id != NULL)
		{
			$sql .= " WHERE user_id = $user_id";
		}
		$res = $this->mysqli->query($sql, MYSQLI_STORE_RESULT);
		if ($res->num_rows > 0)
		{
			while ($row = $res->fetch_object())
			{
				$data = array('user_id' => $row->user_id,
				'user_name' => $row->user_name,
				'user_pswd' => $row->user_pswd,
				'fullname' => $row->fullname);
				array_push($return, $data);
			}
		}
		$res->free();
		return $return;
	}
}
?>