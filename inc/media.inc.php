<?php
class Media{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}

	public function media() {
		$sql = "select * from media;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}
?>
