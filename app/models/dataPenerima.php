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
        $query = "SELECT * from ". $this->table ." where status='diterima'";

        $this->db->query($query);
        $this->db->execute();

        return $this->db->resultSet();

    }

}