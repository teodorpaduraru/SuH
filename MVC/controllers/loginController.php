<?php

require_once("../models/database.php");

class loginController{

	private $db;

	public function __construct(){
		$this->db = new Database();
	}

	public function select($op){
		switch ($op) {
			case 'Log in':
				$this->login();
				break;
			
			case 'First':
				$this->view();
				break;

			default:
				$this->view(true);
				break;
		}
	}

	public function login(){
		if(isset($_POST['userType']) && isset($_POST['username']) && isset($_POST['password'])){
			$userType = $_POST['userType'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($this->db->login($userType, $username, $password)){
				session_start();
				$_SESSION["username"] = $username;
			}
			else $this->view(true);
		}
		else $this->view(true);
	}

	public function view($redirect = false, $location = "login"){
		if($redirect){
			header("Location:" . $location . "Controller.php");
		}
		else require_once("../views/login/logIn.php");
	}

}


$loginController = new loginController();

if(isset($_REQUEST['op'])){
	$op = $_REQUEST['op'];
	$loginController->select($op);
}
else 
	$loginController->select('First');

?>