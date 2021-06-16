<?php

class Manage extends Controller {
    public function index()
    {
        $data['title'] = 'Data Management';
        $data['pendaftar'] = $this->model('lihatData')->selectData();
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('manage/index', $data);
        $this->view('templates/footer');
    }

    public function drop($daftarID)
    {
        
        if ( $this->model('lihatData')->dropData($daftarID) > 0 ) {
            header('Location: ' . BASEURL .'/manage');
            exit;
        } else {
            header('Location: ' . BASEURL .'/manage');
            exit;
        }
    }
    public function acc($daftarID)
    {
        
        if ( $this->model('lihatData')->updateData($daftarID) > 0 ) {
            header('Location: ' . BASEURL .'/manage');
            exit;
        } else {
            header('Location: ' . BASEURL .'/manage');
            exit;
        }
    }

}