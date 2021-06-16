<?php

class lihatData
{
    private $table = 'pendaftar';   
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function selectData()
    {
        $query = "SELECT * from ". $this->table . " WHERE status=''";

        $this->db->query($query);
        $this->db->execute();

        return $this->db->resultSet();

    }
    public function updateData($daftarID)
    {
        $query = "UPDATE pendaftar SET status = 'diterima' WHERE daftarID = :daftarID ";
        
        $this->db->query($query);
        $this->db->bind('daftarID', $daftarID);
        $this->db->execute();

        return $this->db->rowCount();

    }




}