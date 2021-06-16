<?php

class Login extends Controller {
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function cekLogin()
    {
        $user = $this->model('databaseLogin')->selectUser();
        if ( $user['username'] === $_POST['username'] and $user['password'] === $_POST['password']  ) {
            header('Location: ' . BASEURL .'/manage');
            exit;
        } else {
            header('Location: ' . BASEURL .'/login');
            exit;
        }
    }

}