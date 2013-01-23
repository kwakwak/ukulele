<?php
class Ukulele_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function showAll(){
        $query = $this->db->get('events', 10);
        return $query->result();
    }
                
}
?>
