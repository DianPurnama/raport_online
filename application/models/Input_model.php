<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_model extends CI_Model
{ 
    public function getSiswa()
    {
        $query = "SELECT * FROM `siswa` 
                  ";
        return $this->db->query($query)->result_array();
    }

    public function getGuru()
    {
         $query = "SELECT * FROM `guru` 
                  ";
        return $this->db->query($query)->result_array();   
    }

    public function deleteGuru($g)
    {
        $this->db->where('guru', $g);
        $this->db->delete('guru');
    }

    public function updateNilai($nis){
        $data =array(
            'nilai1' => $this->input->post('nilai1'),
            'nilai2' => $this->input->post('nilai2'),
            'nilai3' => $this->input->post('nilai3')
        );
        $this->db->where('nis', $this->input->post('nis'));
        $this->db->update('siswa', $data);
    }

    public function editGuru($id){
        $data =array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'mapel' => $this->input->post('mapel')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('guru', $data);
    }

    public function simpan_data($data, $table) {
        $this->db->insert($table, $data);
    }

    
}
