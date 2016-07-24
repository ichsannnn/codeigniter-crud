<?php
  class Siswa extends CI_Model {
    public function __construct()
    {
      $this->load->database();
    }

    public function getSiswa()
    {
      $query = $this->db->get('siswa');
      return $query->result_array();
    }

    public function postSiswa()
    {
      $this->load->helper('url');

      $data = array(
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kelas' => $this->input->post('kelas'),
      );

      return $this->db->insert('siswa', $data);
    }

    public function deleteSiswa($id)
    {
      return $this->db->delete('siswa', array('id' => $id));
    }
  }
?>
