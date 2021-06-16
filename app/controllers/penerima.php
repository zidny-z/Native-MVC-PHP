<?php

class Penerima extends Controller {
    public function index()
    {
        $data['title'] = 'Data Management';
        $data['pendaftar'] = $this->model('lihatData')->selectData();
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('manage/index', $data);
        $this->view('templates/footer');
    }

}