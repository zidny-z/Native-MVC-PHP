<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Gapai Impian Kamu';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_home');
        $this->view('home/index');
        $this->view('templates/footer');
    }

}