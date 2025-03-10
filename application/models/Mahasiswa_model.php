<?php

class Mahasiswa_model extends CI_model {
    public function getALLMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}
