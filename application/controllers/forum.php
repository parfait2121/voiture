<?php

class forum extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
    }
    
        
    
   
    public function acceuil () {
        $this->session->set_userdata('pseudo' , 'parfait');
        echo $this->session->pseudo;
        $nom = "parfait";
        $this->load->view('acceuil' , array('nom' => $nom ));
    }

    public function deconnexion () {
        $this->session->sess_destroy();
        redirect('forum/acceuil'); 
    }

    public function login () {
        if($this->form_validation->run()) {
            echo ("non");
        }else {
            echo ("oui");
        }


        $this->load->view('login');

    }

    
}

?>