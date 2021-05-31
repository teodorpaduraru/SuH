<?php

class Database{

	private $pdo;

	public function __construct(){
		// datele de conectare la serverul de baze de date
		$host = '127.0.0.1';
		$db   = 'SuperHeroes';
		$user = 'root';
		$pass = '';
		$charset = 'UTF8';

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

		// optiuni vizand maniera de conectare
		$opt = [
			// erorile sunt raportate ca exceptii de tip PDOException
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    // rezultatele vor fi disponibile in tablouri asociative
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    // conexiunea e persistenta
		    PDO::ATTR_PERSISTENT 		 => TRUE
		];


		try {
			// instantiem un obiect PDO
		  	$this->pdo = new PDO ($dsn, $user, $pass, $opt);

		  } catch (PDOException $e) {
		  	echo "Eroare: " . $e->getMessage(); // mesajul exceptiei survenite
		};

	}

	public function login($type, $user, $pass){

		$pass = sha1($pass);

	  	// pregatim comanda SQL cu parametru
	  	if($type === "admin")
	  		$sql = $this->pdo->prepare ('SELECT username, password FROM admin WHERE username=? and password=?');
	  	else 
	  		$sql = $this->pdo->prepare ('SELECT username, password FROM users WHERE username=? and password=?');

	  	// daca s-a putut executa...
		if ($sql->execute ([$user, $pass])) 
			if($row = $sql->fetch())
				if($row['username'] === $user && $row['password'] === $pass)
					return true;
		return false;

  	}

  	public function signup($type, $user, $email, $pass){

		$pass = sha1($pass);

	  	// pregatim comanda SQL cu parametru
	  	if($type === "admin")
	  		$sql = $this->pdo->prepare ('SELECT count(*) as total FROM admin WHERE username=? or email=?');
	  	else 
	  		$sql = $this->pdo->prepare ('SELECT count(*) as total FROM users WHERE username=? or email=?');

	  	// daca s-a putut executa...
		if ($sql->execute ([$user, $email])) 
			if($row = $sql->fetch())
				if($row['total'] === "0"){
					// pregatim comanda SQL cu parametru
				  	if($type === "admin"){
				  		$sql = $this->pdo->prepare ('SELECT max(id) as max FROM admin');
				  		if ($sql->execute()) 
							if($id = $sql->fetch()){
								$id = (string)(((int)$id['max']) + 1);
								$sql = $this->pdo->prepare ('INSERT into users values(?,?,?,?)');
								if ($sql->execute ([$id, $user, $pass, $email])) return true;
							}
				  	}
				  	else {
				  		$sql = $this->pdo->prepare ('SELECT max(id) as max FROM users');
				  		if ($sql->execute()) 
							if($id = $sql->fetch()){
								$id = (string)(((int)$id['max']) + 1);
								$sql = $this->pdo->prepare ('INSERT into users values(?,?,?,?,null)');
								if ($sql->execute ([$id, $user, $pass, $email])) return true;
							}
				  	}
				}
					
		return false;
				

  	}

// $db=new Database();
// $data = $db->setAvailable();
// echo var_dump($data);

?>