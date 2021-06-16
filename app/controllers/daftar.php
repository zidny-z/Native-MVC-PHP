<?php

class Daftar extends Controller {
    public function index()
    {
        $data['title'] = 'Daftar';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('daftar/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ( $this->model('daftarBaru')->tambahData($_POST) > 0 ) {
            header('Location: ' . BASEURL );
            exit;
        } else {
            header('Location: ' . BASEURL );
            exit;
        }
    }

}
?>