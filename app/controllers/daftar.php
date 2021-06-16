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
        if ( $this->model('databasePendaftar')->tambahData($_POST) > 0 ) {
            Flash::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL .'/daftar');
            exit;
        } else {
            Flash::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL );
            exit;
        }
    }

}
?>