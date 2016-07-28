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

    public function editSiswa($id)
    {
      $query = $this->db->get_where('siswa', array('id' => $id));
      // echo $query['id'];
      return $query->row_array();
      // return $data->result_array();
    }

    public function updateSiswa($id)
    {
      $this->load->helper('url');

      $data = array(
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kelas' => $this->input->post('kelas'),
      );

      $this->db->where('id', $id);
      return $this->db->update('siswa', $data);
    }

    public function deleteSiswa($id)
    {
      return $this->db->delete('siswa', array('id' => $id));
    }
  }
?>
