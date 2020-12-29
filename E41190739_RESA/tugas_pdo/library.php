<?php

	class Library{
	    public function __construct()
	    {
	        $host = "localhost";
	        $dbname = "database";
	        $username = "root";
	        $password = "";
	        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
	    }
	    public function add_data($nim, $nama_mhs, $prodi, $alamat)
	    {
	        $data = $this->db->prepare('INSERT INTO tb_mahasiswa (nim,nama_mhs,prodi,alamat) VALUES (?, ?, ?, ?)');
	        
	        $data->bindParam(1, $nim);
	        $data->bindParam(2, $nama_mhs);
	        $data->bindParam(3, $prodi);
	        $data->bindParam(4, $alamat);

	        $data->execute();
	        return $data->rowCount();
	    }
	    public function show()
	    {
	        $query = $this->db->prepare("SELECT * FROM tb_mahasiswa");
	        $query->execute();
	        $data = $query->fetchAll();
	        return $data;
	    }

	    public function get_by_id($nim){
	        $query = $this->db->prepare("SELECT * FROM tb_mahasiswa where nim=?");
	        $query->bindParam(1, $nim);
	        $query->execute();
	        return $query->fetch();
	    }

	    public function update($nim,$nama_mhs,$prodi,$alamat){
	        $query = $this->db->prepare('UPDATE tb_mahasiswa set nama_mhs=?,prodi=?,alamat=? where nim=?');
	        
	        $query->bindParam(1, $nama_mhs);
	        $query->bindParam(2, $prodi);
	        $query->bindParam(3, $alamat);
	        $query->bindParam(4, $nim);

	        $query->execute();
	        return $query->rowCount();
	    }

	    public function delete($nim)
	    {
	        $query = $this->db->prepare("DELETE FROM tb_mahasiswa where nim=?");

	        $query->bindParam(1, $nim);

	        $query->execute();
	        return $query->rowCount();
	    }

	}

?>