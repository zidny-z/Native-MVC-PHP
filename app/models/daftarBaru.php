<?php

class daftarBaru
{
    private $table = 'pendaftar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO pendaftar
                    VALUES
                    (id, :email, :nama, :nim, :prodi, :pt, :noHP, :cv, :zip, '')";

        $this->db->query($query);
        $this->db->bind('id', null);
        $this->db->bind('email', htmlspecialchars($data['email']));
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('nim', htmlspecialchars($data['nim']));
        $this->db->bind('prodi', htmlspecialchars($data['prodi']));
        $this->db->bind('pt', htmlspecialchars($data['pt']));
        $this->db->bind('noHP', htmlspecialchars($data['noHP']));
        $this->db->bind('cv', htmlspecialchars($data['cv']));
        $this->db->bind('zip', htmlspecialchars($data['zip']));
        $this->db->execute();

        return $this->db->rowCount();



    }





}
