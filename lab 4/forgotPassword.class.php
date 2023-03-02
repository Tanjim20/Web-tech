<?php 
class forgetPasswordU{
	private $email;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users;
	private $new_user; 


	private function checkFieldValues(){
		if(empty($this->email)){
			$this->error = "Please Enter Email First!!!";
			return false;
		}else{
			return true;
		}
	}


	private function emailExists(){
		foreach($this->stored_users as $user){
			if($this->email == $user['Email']){
				$this->success = "This Email Already Existed...";
				return true;
			}
		}
        $this->error = "This Email is not Existed!!!";
		return false;
	}



} 