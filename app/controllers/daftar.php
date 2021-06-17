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
          echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
<strong> Sukses..!</strong> Data Berhasil Tersimpan.
</div>';
            header('Location: ' . BASEURL .'/daftar');
            exit;
        } else {
            // Flash::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL );
            exit;
        }
    }

}
?>
