<?php

require_once("../models/database.php");

class forgotController{

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

	public function forgot(){
		if(isset($_POST['email'])){
			$email = $_POST['email'];
			//de setat trimiterea mailului la user
			if($this->db->l($email)){
				session_start();
				$_SESSION["username"] = $username;
				$_SESSION["password"] = $password;
			}
			else $this->view(true);
		}
		else $this->view(true);
	}

	public function view($redirect = false, $location = "forgot"){
		if($redirect){
			header("Location:" . $location . "Controller.php");
		}
		else require_once("../view/forgot/forgot.php");
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