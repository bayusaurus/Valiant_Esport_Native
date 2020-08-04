<?php  

class News_model
{
	//database handler
	private $table = 'news';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllNews()
	{	
		$this->db->query("SELECT * FROM ".$this->table." WHERE hapus='0'");
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function getLatestNews()
	{	
		$this->db->query("SELECT * FROM ".$this->table." WHERE hapus='0' ORDER BY tanggal DESC LIMIT 5");
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function getNewsById($id)
	{	
		$this->db->query('SELECT * FROM '. $this->table .' WHERE id_news=:id');
		$this->db->bind('id', $id);
		$this->db->execute();
		return $this->db->single();
	}
	public function tambah($data, $gambar)
	{	
		$tanggal = date("Y-m-d H:i:s");

		$this->db->query('INSERT INTO '. $this->table ." VALUES ('', :username, :judul, :gambar, :tanggal, :isi, :hapus)");
		
		$this->db->bind('username', $_SESSION['username']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('gambar', $gambar);
		$this->db->bind('tanggal', $tanggal);
		$this->db->bind('isi', $data['isi']);
		$this->db->bind('hapus', '0');
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahIsi($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							judul = :judul,
							isi = :isi
						WHERE id_news = :id_news');
		
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('isi', $data['isi']);
		$this->db->bind('id_news', $data['id_news']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahThumbnail($data, $foto)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							thumbnail = :foto
						WHERE id_news = :id_news');
		
		$this->db->bind('foto', $foto);
		$this->db->bind('id_news', $data['id_news']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function hapus($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							hapus = :hapus
						WHERE id_news = :id');
		
		$this->db->bind('hapus', '1');
		$this->db->bind('id', $data['id']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
}
?>
