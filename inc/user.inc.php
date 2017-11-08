<?php
class User{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}

	public function alluser() {
		$sql = "select * from user order by email;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

    public function overalluser() {
			$sql = "select overall from user order by email;";
		    $stmt = $this->db->prepare($sql);
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function countuser() {
		$sql = "select count(*) as 'cnt' from user;";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public function finduser($field, $name) {
			$sql = "select * from user where $field like :name order by name;";
		    $stmt = $this->db->prepare($sql);
		    $name="%".$name."%";
		  	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function finduser2($field, $email) {
			$sql = "select * from user where $field like :email order by email;";
		    $stmt = $this->db->prepare($sql);
		    $email="%".$email."%";
		  	$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function oneuser($email) {
	    $sql = 'select * from user where email = :email';
	    $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
	    $stmt->execute();
        $user=$stmt->fetch(PDO::FETCH_OBJ);
        return $user;
	}
	
	public function adduser($email, $name, $age) {
	        $stmt= $this->db->prepare("INSERT INTO user (email, name, age) values (:email, :name, :age)");
	        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
	        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
	        $stmt->bindParam(':age', $age, PDO::PARAM_STR);
	        $stmt->execute();
	}
	
	public function updaterecord($name, $email, $age) {
	       $sql = 'UPDATE user SET name = :name,
	               age = :age
	               WHERE email = :email';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':name', $name,PDO::PARAM_STR);
	       $stmt->bindParam(':email', $email,PDO::PARAM_STR);
	       $stmt->bindParam(':age', $age ,PDO::PARAM_STR);
		   $stmt->execute();
	}

	public function deleterecord($email) {
	       $sql = 'DELETE from user WHERE email = :email';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':email', $email,PDO::PARAM_STR);
		   $stmt->execute();
	}
}
?>
