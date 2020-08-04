<?php  

class Team_model
{
	//database handler
	private $table = 'team';
	private $player = 'player';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllTeam()
	{	
		$this->db->query("SELECT * FROM ".$this->table." WHERE hapus='0'");
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function getTeamById($id)
	{	
		$this->db->query('SELECT * FROM '. $this->table .' WHERE id_team=:id');
		$this->db->bind('id', $id);
		$this->db->execute();
		return $this->db->single();
	}
	public function tambahTeam($data, $gambar)
	{	
		$this->db->query('INSERT INTO '. $this->table ." VALUES ('', :nama, :game, :foto, :hapus)");
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('game', $data['game']);
		$this->db->bind('foto', $gambar);
		$this->db->bind('hapus', '0');
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahProfileTeam($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							nama = :nama,
							game = :game
						WHERE id_team = :id_team');
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('game', $data['game']);
		$this->db->bind('id_team', $data['id_team']);
		
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
	public function hapusTeam($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							hapus = :hapus
						WHERE id_team = :id');
		
		$this->db->bind('hapus', '1');
		$this->db->bind('id', $data['id']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function getPlayerByTeam($id_team)
	{	
		$this->db->query('SELECT '
					.$this->player.'.id_player, '.$this->player.'.nama, '.$this->player.'.foto,'.$this->player.'.nick FROM '.$this->table.' INNER JOIN '.$this->player.' on '.$this->table.'.id_team='.$this->player.'.id_team 
					WHERE '.$this->table.'.id_team=:id AND '.$this->player.'.hapus=:hapus');
		$this->db->bind('id', $id_team);
		$this->db->bind('hapus', '0');
		$this->db->execute();
		return $this->db->resultSet();
	}	
	public function tambahPlayer($data, $gambar)
	{	
		$this->db->query('INSERT INTO '. $this->player ." VALUES ('', :id ,:nama, :nick, :foto, :hapus)");
		
		$this->db->bind('id', $data['id']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nick', $data['nick']);
		$this->db->bind('foto', $gambar);
		$this->db->bind('hapus', '0');
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahProfilePlayer($data)
	{	
		$this->db->query('UPDATE '. $this->player .' SET 
							nama = :nama,
							nick = :nick
						WHERE id_player = :id_player');
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nick', $data['nick']);
		$this->db->bind('id_player', $data['id_player']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function ubahFotoPlayer($data, $foto)
	{	
		$this->db->query('UPDATE '. $this->player .' SET 
							foto = :foto
						WHERE id_player = :id_player');
		
		$this->db->bind('foto', $foto);
		$this->db->bind('id_player', $data['id_player']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function hapusPlayer($data)
	{	
		$this->db->query('UPDATE '. $this->player .' SET 
							hapus = :hapus
						WHERE id_player = :id');
		
		$this->db->bind('hapus', '1');
		$this->db->bind('id', $data['id']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
}
?>
