<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipality_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_all_municipalities() {
        // Assuming you have a 'municipalities' table with columns 'id' and 'name'
        $query = $this->db->get('municipalities');
        return $query->result_array();
    }

    public function get_all_barangay() {
        // Assuming you have a 'municipalities' table with columns 'id' and 'name'
        $query = $this->db->get('barangays');
        return $query->result_array();
    }
}