<?php
class Rating{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}

	public function allrating() {
		$sql = "select * from rating order by email;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

    public function overallrating() {
			$sql = "select overall from rating order by email;";
		    $stmt = $this->db->prepare($sql);
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function countrating() {
		$sql = "select count(*) as 'cnt' from rating;";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public function findrating($field, $email) {
			$sql = "select * from rating where $field like :email order by email;";
		    $stmt = $this->db->prepare($sql);
		    $email="%".$email."%";
		  	$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function onerating($email) {
	    $sql = 'select * from rating where email = :email';
	    $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
	    $stmt->execute();
        $publisher=$stmt->fetch(PDO::FETCH_OBJ);
        return $publisher;
	}

	public function addrating($q1, $q2, $q3, $q4, $q5, $overall, $comment, $email) {
	        $stmt= $this->db->prepare("INSERT INTO rating (q1, q2, q3, q4, q5, overall, email, comment) values (:q1, :q2, :q3, :q4, :q5, :overall, :email, :comment)");
	        $stmt->bindParam(':q1', $q1, PDO::PARAM_STR);
			$stmt->bindParam(':q2', $q2, PDO::PARAM_STR);
			$stmt->bindParam(':q3', $q3, PDO::PARAM_STR);
			$stmt->bindParam(':q4', $q4, PDO::PARAM_STR);
			$stmt->bindParam(':q5', $q5, PDO::PARAM_STR);
	        $stmt->bindParam(':overall', $overall, PDO::PARAM_STR);
	        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
	        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
	        $stmt->execute();
	}

	public function updaterecord($pubid,  $email, $web) {
	       $sql = 'UPDATE publisher SET emailcontact = :email,
	               website = :web
	               WHERE publisherid = :pubid';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':pubid', $pubid,PDO::PARAM_STR);
	       $stmt->bindParam(':email', $email,PDO::PARAM_STR);
	       $stmt->bindParam(':web', $web ,PDO::PARAM_STR);
		   $stmt->execute();
	}

	public function deleterecord($pubid) {
	       $sql = 'DELETE from publisher WHERE publisherid = :pubid';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':pubid', $pubid,PDO::PARAM_STR);
		   $stmt->execute();
	}
}
?>
