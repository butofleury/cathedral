<?php 

class Role_model extends CI_Model {

    private $table_name = 'role';


    public function __construct() {
        parent::__construct();
    }

    public function get_all($filters=array()) {
    
        if(!empty($filters)) {
            $this->db->where($filters);
        }

        return $this->db->get($this->table_name)->result();
            
   }

}
