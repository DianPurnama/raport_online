<?php 
class rapot_m extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}

	function get_siswa()
	{
    	 $query = $this->db->get('siswa');
        return $query;
	}
}
?>