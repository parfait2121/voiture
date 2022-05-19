<?php

defined('BASEPATH') or exit('no direct script allowed');

class adminModel extends CI_Model {

public function __construct() {
parent::__construct();
$this->load->database();
}
function testLoginAdmin($data){

return $this->db->get_where('admin',$data)->row();

}

function getLoginAdmin ($data) {
	$query = $this->db->get_where('admin',$data);
    return $query->row_array();
}

function insererVoiture ($data = array() )  {
	return $this->db->insert('voiture',$data);
}

function getAllChauffeur () {
	$query = $this->db->get('utilisateur');
    return $query->result_array();
}


}
?>