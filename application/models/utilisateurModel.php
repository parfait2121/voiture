<?php

defined('BASEPATH') or exit('no direct script allowed');

class utilisateurModel extends CI_Model {

public function __construct() {
parent::__construct();
$this->load->database();
}
function testLoginUtilisateur($data){

return $this->db->get_where('utilisateur',$data)->row();
}

function getLoginUtilisateur ($data) {
	$query = $this->db->get_where('utilisateur',$data);
	return $query->row_array();
}

function voitureDispo () {
	$data['disponibilite'] = 0;
	$query = $this->db->get_where('voiture' , $data );
    return $query->result_array();
}

function insertTrajet ($data = array()) {
	
	return$this->db->insert('trajet', $data);
;

}
}
?>