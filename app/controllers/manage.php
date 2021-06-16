<?php

class Manage extends Controller {
    public function index()
    {
        $data['title'] = 'Data Management';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('manage/index');
        $this->view('templates/footer');
    }

}