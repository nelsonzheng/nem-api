<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api_model extends CI_Model {

    function get_demand($state,$limit,$offset) {
        $this->db->select('settlementdate, totaldemand');
        $this->db->from('pandd');
        $this->db->where('region', $state);
        $this->db->order_by('settlementdate', 'asc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    function get_rrp($state,$limit,$offset) {
        $this->db->select('settlementdate, rrp');
        $this->db->from('pandd');
        $this->db->where('region', $state);
        $this->db->order_by('settlementdate', 'asc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result(); 
    }
}
