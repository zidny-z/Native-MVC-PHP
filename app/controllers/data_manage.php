<?php

class DataManagement extends Controller {
    public function index()
    {
        $data['title'] = 'Data Management';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('home/index');
        $this->view('templates/footer');
    }

}