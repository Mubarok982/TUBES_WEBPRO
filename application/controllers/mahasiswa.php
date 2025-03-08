<?php

class Mahasiswa extends CI_Controller {
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('mahasiswa/index');
        $this->load->view('template/footer');
    }
}