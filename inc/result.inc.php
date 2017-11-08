<?php
class Result{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}

	public function overallavg() {
		$sql = "select avg(overall) from rating;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function q1avg() {
		$sql = "select avg(q1) from rating;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function q2avg() {
		$sql = "select avg(q2) from rating;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function q3avg() {
		$sql = "select avg(q3) from rating;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function q4avg() {
		$sql = "select avg(q4) from rating;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function q5avg() {
		$sql = "select avg(q5) from rating;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function countoverall() {
		$sql = "select count(overall) from rating;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function onestar() {
		$sql = "select count(overall) from rating where overall between 0 and 1;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function twostar() {
		$sql = "select count(overall) from rating where overall between 1 and 2;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function threestar() {
		$sql = "select count(overall) from rating where overall between 2 and 3;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function fourstar() {
		$sql = "select count(overall) from rating where overall between 3 and 4;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function fivestar() {
		$sql = "select count(overall) from rating where overall between 4 and 5;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_NUM);
	}
	
	public function review() {
		$sql = "select * from user join rating on rating.email = user.email join media on media.mediaid = rating.media order by date desc;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}
?>
