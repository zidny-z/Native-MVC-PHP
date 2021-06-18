<?php

class Manage extends Controller {
    public function index()
    {
        session_start();
        if ( $_SESSION['admin'] == 'True' ){
            $data['title'] = 'Data Management';
            $data['pendaftar'] = $this->model('databasePendaftar')->selectPendaftar();
            $this->view('templates/header', $data);
            $this->view('templates/navbar_non_home');
            $this->view('manage/index', $data);
            $this->view('templates/footer');
        }
        else{
            header('Location: ' . BASEURL);
        }
    }

    public function drop($daftarID)
    {

        if ( $this->model('databasePendaftar')->dropData($daftarID) > 0 ) {
            header('Location: ' . BASEURL .'/manage');
            exit;
        } else {
            header('Location: ' . BASEURL .'/manage');
            exit;
        }
    }
    public function acc($daftarID)
    {

        if ( $this->model('databasePendaftar')->updateData($daftarID) > 0 ) {
            header('Location: ' . BASEURL .'/manage');
            exit;
        } else {
            header('Location: ' . BASEURL .'/manage');
            exit;
        }
    }
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL);
    }


}
