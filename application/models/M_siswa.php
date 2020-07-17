<?php

class M_siswa extends CI_Model {

    public function tampil_data() {
        return $this->db->get('siswa');
    }

    public function detail_data($id = NULL) {
        $query = $this->db->get_where('siswa', array('nis' => $id));
        return $query->result_array();
    }

    public function simpan_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

public function buat_kode()   {

	$this->db->select('RIGHT(siswa.nis,4) as kode', FALSE);
	$this->db->order_by('nis','DESC');    
	$this->db->limit(1);    
	$query = $this->db->get('siswa');      //cek apakah sudah ada kode di tabel.    
	if($query->num_rows() <> 0){      
	 //jika kode sudah ada.      
	 $data = $query->row();      
	 $kode = intval($data->kode) + 1;    
	}
	else {      
	 //jika kode belum ada      
	 $kode = 1;    
	}
	$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
	$kodejadi = "121".$kodemax; 
	return $kodejadi;  
}

function get_data_barang_bynama($nama){
    $hsl=$this->db->query("SELECT * FROM siswa WHERE nama='$nama'");
    if($hsl->num_rows()>0){
        foreach ($hsl->result() as $data) {
            $hasil=array(
                'nis' => $data->nis,
                'nama' => $data->nama,
                'kelas' => $data->kelas,
                );
        }
    }
    return $hasil;
}


}
