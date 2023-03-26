<?php

	class m_mahasiswa extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
	
		public function getMahasiswa($npm = null) // mengambil data mhs dr db
		{
			if ($npm)
		    {
		      return $this->db->get_where('mahsiswa', array('npm'=>$npm))->result();
		    }
		    else return $this->db->get('mahsiswa')->result();
		}

		public function insert_mhs($data) // mengambil data mhs dr db
		{
	
			$sql = "INSERT INTO mahsiswa (npm,nama,prodi,angkatan) VALUES (?,?,?,?)";
			$this->db->query($sql, array($data['npm'], $data['nama'], $data['prodi'], $data['angkatan']));
			/*$this->db->insert('mahsiswa',$data);*/
			return $this->db->affected_rows();
		}

		public function update_mhs($data) // mengambil data mhs dr db
		{
			$sql = "UPDATE mahsiswa SET 
					nama = ?,
					prodi = ?,
					angkatan = ?
				WHERE npm = ?";

			 $this->db->query($sql, array($data['nama'], $data['prodi'], $data['angkatan'], $data['npm']));
    		return $this->db->affected_rows();
		}

		public function delete_mhs($npm)
  		{
		    $this->db->where('npm', $npm);
		    $this->db->delete('mahsiswa');
		    return $this->db->affected_rows();
  		}

  		public function ambillogin($username, $password)
  		{
  			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('login');
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					$sess = array ('username' => $row->username,
									'password' => $row->password
					);
				}
			$this->session->get_userdata($sess);
			redirect(base_url().'index.php/student/index');
			}
			else
			{
				$this->session->set_flashdata('info','Maaf salah input!');
				redirect(base_url().'index.php/login/index');
			}
  		}
	}
