<?php

class Penerima extends Controller {
    public function index()
    {
        $data['title'] = 'Data Penerima';
        $data['pendaftar'] = $this->model('databasePendaftar')->selectPenerima();
        $this->view('templates/header', $data);
        $this->view('templates/navbar_pengumuman');
        $this->view('penerima/index', $data);
        $this->view('templates/footer');
    }

}
