<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nem_model extends CI_Model {

    function insert_row($data) {
        $this->db->insert('pandd', $data);
        $this->db->affected_rows();
    }
    
    function insert_batch($data) {
        $this->db->insert_batch('pandd', $data);
    }

    function check_repeat($settlementdate, $region) {
        return $this->db->where('settlementdate', $settlementdate)
                        ->where('region', $region)
                        ->count_all_results('pandd') > 0;
    }

    function get_table($table_name) {
        $query = $this->db->get($table_name);
        return $query->result();
    }

    function get_nem($table_name, $limit, $offset, $state) {
        $this->db->select('settlementdate, totaldemand, rrp');
        $this->db->from($table_name);
        $this->db->where('region', $state);
        $this->db->order_by('settlementdate', 'asc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

}
