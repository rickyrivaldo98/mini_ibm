<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Customer_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getData()
    {
        return $this->db->get('customers');
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}