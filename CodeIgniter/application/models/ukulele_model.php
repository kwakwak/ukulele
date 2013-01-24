<?php
class Ukulele_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function showAll(){
        $query = $this->db->query("SELECT UNIX_TIMESTAMP(eventDATETIME) as eventDATETIME,eventName FROM events ORDER BY eventDATETIME");
        return $query->result();
    }       
}
?>
