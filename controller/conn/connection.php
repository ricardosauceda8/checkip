<?php
class connection{

	private $server = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "services";
	
	public function connections(){
		$conn=mysqli_connect($this->server,
							$this->username,
							$this->password,
							$this->dbname);
		mysqli_query($conn,"SET CHARACTER SET 'utf8'");
		return $conn;
	}
}
?>