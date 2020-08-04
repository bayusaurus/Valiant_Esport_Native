<?php  

class Admin_model
{
	//database handler
	private $table = 'admin';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllAdmin()
	{	
		$this->db->query("SELECT * FROM ".$this->table);
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function getAdminByUsername($username)
	{	
		$this->db->query('SELECT * FROM '. $this->table .' WHERE username=:username');
		$this->db->bind('username', $username);
		$this->db->execute();
		return $this->db->single();
	}
	public function tambah($data, $gambar)
	{	
		$this->db->query('INSERT INTO '. $this->table ." VALUES (:username, :password, :nama, :email, :avatar, :status)");
		
		$this->db->bind('username', $data['username']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('password', password_hash($data['username'], PASSWORD_DEFAULT));
		$this->db->bind('email', $data['email']);
		$this->db->bind('avatar', $gambar);
		$this->db->bind('status', '1');
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahAvatar($data, $nama)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							avatar = :avatar
						WHERE username = :username');
		
		$this->db->bind('avatar', $nama);
		$this->db->bind('username', $data['username']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahProfile($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							nama = :nama,
							email = :email
						WHERE username = :username');
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('username', $data['username']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahPassword($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							password = :password
						WHERE username = :username');
		
		$this->db->bind('password', password_hash($data['passwordBaru'], PASSWORD_DEFAULT));
		$this->db->bind('username', $data['username']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function nonaktifkan($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							status = :status
						WHERE username = :username');
		
		$this->db->bind('status', '0');
		$this->db->bind('username', $data['username']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	// public function tambahDataMahasiswa($data)
	// {	
	// 	$this->db->query('INSERT INTO '. $this->table ." VALUES ('', :nama, :nim, :email, :jurusan)");
		
	// 	$this->db->bind('nama', $data['nama']);
	// 	$this->db->bind('email', $data['email']);
	// 	$this->db->bind('nim', $data['nim']);
	// 	$this->db->bind('jurusan', $data['jurusan']);
		
	// 	$this->db->execute();

	// 	return $this->db->rowCount();
	// }

	// public function hapusDataMahasiswa($data)
	// {	
	// 	$this->db->query('DELETE FROM '. $this->table ." WHERE id = :id");
		
	// 	$this->db->bind('id', $data['id']);
		
	// 	$this->db->execute();

	// 	return $this->db->rowCount();
	// }

	

	// public function cariMahasiswa()
	// {
	// 	$keyword = $_POST['keyword'];
	// 	$this->db->query('SELECT * FROM '. $this->table .'
	// 					WHERE nama LIKE :keyword');
		
	// 	$this->db->bind('keyword', "%$keyword%");
		
	// 	$this->db->execute();

	// 	return $this->db->resultSet();	
	// }
}
?>
