<?php

class Penerima extends Controller {
    public function index()
    {
        $data['title'] = 'Data Management';
        $data['pendaftar'] = $this->model('databasePendaftar')->selectData();
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('penerima/index', $data);
        $this->view('templates/footer');
    }

}