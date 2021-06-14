<?php

class Daftar extends Controller {
    public function index()
    {
        $data['title'] = 'Daftar';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('home/index');
        $this->view('templates/footer');
    }

}