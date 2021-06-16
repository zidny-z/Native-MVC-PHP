<?php

class databaseLogin
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function selectUser()
    {
        $query = "SELECT * from ". $this->table;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }
}