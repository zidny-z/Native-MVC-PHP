<?php

class Kegiatan extends Controller {
    public function kegiatan1()
    {
        $data['title'] = 'Peduli Bangsa';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('kegiatan/peduli_bangsa');
        $this->view('templates/footer');
    }

    public function kegiatan2()
    {
        $data['title'] = 'Diklat Kepemimpinan';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('kegiatan/diklat_kepemimpinan');
        $this->view('templates/footer');
    }

    public function kegiatan3()
    {
        $data['title'] = 'Donated Mengajar';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('kegiatan/donated_mengajar');
        $this->view('templates/footer');
    }

    public function kegiatan4()
    {
        $data['title'] = 'Kajian Intelektual';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('kegiatan/kajian_intelektual');
        $this->view('templates/footer');
    }

    public function kegiatan5()
    {
        $data['title'] = 'Diklat Wirausaha';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('kegiatan/diklat_wirausaha');
        $this->view('templates/footer');
    }

    public function kegiatan6()
    {
        $data['title'] = 'Diklat Kebangsaan';
        $this->view('templates/header', $data);
        $this->view('templates/navbar_non_home');
        $this->view('kegiatan/diklat_kebangsaan');
        $this->view('templates/footer');
    }

}