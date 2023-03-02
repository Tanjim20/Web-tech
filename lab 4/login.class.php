<?php 
class LoginUser{
	private $email;
	private $password;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users;

	public function __construct($email, $password){
		$this->email = $email;
		$this->password = $password;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
		$this->login();
	}


	private function login(){
		foreach ($this->stored_users as $user) {
			if($user['Email'] == $this->email){
				if(password_verify($this->password, $user['Password'])){
					session_start();
					$_SESSION['email'] = $this->email;
					header("location: account.php"); exit();
				}
			}
		}
		return $this->error = "Invalid Email or Password!!! Please Try Again...";
	}

}