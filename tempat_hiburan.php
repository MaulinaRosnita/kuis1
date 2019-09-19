<?php
include_once (__DIR__ . "/db.php");
class tempat_hiburan {
    private $table_name='tempat_hiburan';
    private $db = null;

    function __construct(){
        if ($this->db ==  null){
            $conn = new DB();
            $this->db = $conn->db;
        }
    }

    function getAll(){
        //return "test";
        $kueri = "SELECT * FROM tempat_hiburan ORDER BY id";
        $hasil = $this->db->query($kueri) or die ("Error ".$this->db->connect_error);
		$data = array();
		while ($row = $hasil->fetch_assoc()){
            $data[]=$row;
        }
        return $data;
    }
}