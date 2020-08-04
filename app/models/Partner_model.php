<?php  

class Partner_model
{
	//database handler
	private $table = 'partner';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPartner()
	{	
		$this->db->query("SELECT * FROM ".$this->table." WHERE hapus='0'");
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function getPartnerById($id)
	{	
		$this->db->query('SELECT * FROM '. $this->table .' WHERE id_partner	=:id');
		$this->db->bind('id', $id);
		$this->db->execute();
		return $this->db->single();
	}
	public function tambah($data, $gambar)
	{	
		$this->db->query('INSERT INTO '. $this->table ." VALUES ('', :nama, :desc, :avatar, :link, :hapus)");
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('desc', $data['desc']);
		$this->db->bind('link', $data['link']);
		$this->db->bind('avatar', $gambar);
		$this->db->bind('hapus', '0');
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahProfile($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							nama = :nama,
							deskripsi = :desc,
							link = :link
						WHERE id_partner = :id_partner');
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('desc', $data['desc']);
		$this->db->bind('link', $data['link']);
		$this->db->bind('id_partner', $data['id_partner']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahFotoTeam($data, $foto)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							foto = :foto
						WHERE id_team = :id_team');
		
		$this->db->bind('foto', $foto);
		$this->db->bind('id_team', $data['id_team']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function hapus($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							hapus = :hapus
						WHERE id_partner = :id');
		
		$this->db->bind('hapus', '1');
		$this->db->bind('id', $data['id']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
}
?>
