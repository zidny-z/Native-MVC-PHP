<?php

<<<<<<< HEAD:app/controllers/penerima.php
class Penerima extends Controller {
=======
class Manage extends Controller {
>>>>>>> f1539e8b9383f4c7d3a5abc0462880c0a318169e:app/controllers/manage.php
    public function index()
    {
        $data['title'] = 'Data Management';
        $data['pendaftar'] = $this->model('lihatData')->selectData();
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
<<<<<<< HEAD:app/controllers/penerima.php
        $this->view('manage/index', $data);
=======
        $this->view('manage/index');
>>>>>>> f1539e8b9383f4c7d3a5abc0462880c0a318169e:app/controllers/manage.php
        $this->view('templates/footer');
    }

}