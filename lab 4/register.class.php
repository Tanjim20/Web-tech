<?php 
class RegisterUser{
	private $name;
	private $email;
	private $raw_password;
	private $encrypted_password;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users;
	private $new_user; 


	public function __construct($name, $email, $password){

		$this->name = trim($this->name);
		$this->name = filter_var($name, FILTER_SANITIZE_STRING);

		$this->email = trim($this->email);
		$this->email = filter_var($email, FILTER_SANITIZE_STRING);

		$this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
		$this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);

		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->new_user = [
			"Name" => $this->name,
			"Email" => $this->email,
			"Password" => $this->encrypted_password,
		];

		if($this->checkFieldValues()){
			$this->insertUser();
		}
	}


	private function checkFieldValues(){
		if(empty($this->name) || empty($this->email) || empty($this->raw_password)){
			$this->error = "All Fields Are Required!!!";
			return false;
		}else{
			return true;
		}
	}


	private function emailExists(){
		foreach($this->stored_users as $user){
			if($this->email == $user['Email']){
				$this->error = "This Email Already Taken!!! Please Try Different One...";
				return true;
			}
		}
		return false;
	}


	private function insertUser(){
		if($this->emailExists() == FALSE){
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "Registration Successfully Done...";
			}else{
				return $this->error = "Something Went Wrong!!! Please Try Again...";
			}
		}
	}



} 