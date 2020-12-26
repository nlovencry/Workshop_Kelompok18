<?php
	/**
	 * 
	 */
	 class Database
	 {
	 	
	 	public function __construct()
	 	{
	 		$host = "localhost";
	 		$dbname = "mahasiswa";
	 		$user = "root";
	 		$pass = "";
	 		$this->db = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
	 	}

	 	public function add_data($tabel,$kolom)
	 	{
	 		$sql = "INSERT INTO ". $tabel." VALUES (".$kolom.")";
	 		$query = $this->db->prepare($sql);
	 		$insert = $query->execute();
	 		return $insert?$this->db->lastInsertId():false;
	 	}

	 	public function getID($kolom,$tabel,$where=null)
	 	{
	 		$sql = "SELECT ".$kolom." FROM ".$tabel;
	 		if($where != null) $sql .= " WHERE $where";
	 		$query = $this->db->prepare($sql);
	 		$query->execute();
            $data = $query->fetchAll();
	 		return $data;
	 	}

	 	public function update($tabel,$data,$where)
	 	{
	 		$sql = "UPDATE ".$tabel." SET ".$data." WHERE ".$where;
	 		$query = $this->db->prepare($sql);
	 		$update = $query->execute();
	 		return $update;
	 	}

	 	public function remove($tabel,$id)
	 	{
	 		$sql = "DELETE FROM ".$tabel." WHERE ".$id;
	 		$query = $this->db->prepare($sql);
	 		$delete = $query->execute();
	 		return $delete;
	 	}
	 } 
?>