<?php

class Utilisateur extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
    }
    
        
    


    public function deconnexion () {
        $this->session->sess_destroy();
        redirect('Utilisateur/loginUtilisateur'); 
    }

    public function loginUtilisateur () {
        $this->load->view('utilisateur/loginUtilisateur');
        
    }

    public function testLoginUtilisateur () {
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $this->form_validation->set_rules('login','Email','required');
        $this->form_validation->set_rules('mdp','Password','required');
        if($this->form_validation->run()==TRUE){
        $data['login']=$this->input->post('login');
        $data['mdp']=$this->input->post('mdp');
        $this->load->model('utilisateurModel');
        $check=$this->utilisateurModel->testLoginUtilisateur($data);

        if($check!=FALSE)
        {

        $this->session->set_userdata('infoUser',$this->utilisateurModel->getLoginUtilisateur($data));
        echo "marina eh";
        redirect('Utilisateur/acceuilUtilisateur');
        }

        else
        {
        $notif = "mot de passe ou login incorrecte";
        $this->load->view('utilisateur/loginUtilisateur' , array('notif' => $notif ));
        }

        }
    }

    

}

     public function acceuilUtilisateur () {
       $infoUser = $this->session->infoUser;
       $this->load->model('utilisateurModel');
       $voitureDispo=$this->utilisateurModel->voitureDispo();
       $this->load->view('utilisateur/header');
       $this->load->view('utilisateur/acceuilUtilisateur' , array('userInfo' => $infoUser , 'voitureDispo' => $voitureDispo));
       $this->load->view('utilisateur/footer');

       //var_dump($voitureDispo);
    }  

     public function  insertTrajet () {
        $infoUser = $this->session->infoUser;
        $data['id_utilisateur'] = intval($infoUser['id_utilisateur']);
        $data['idVoiture']=intval($this->input->post('idVoiture'));
        $data['lieuDepart']=$this->input->post('lieuDepart');

                var_dump($data);     

        $data['dateDepart']=$this->input->post('dateDepart');
        $data['kmDepart']=intval($this->input->post('kmDepart'));
        $data['lieuArriver']=$this->input->post('lieuArriver');
        $data['dateArriver']=$this->input->post('dateArriver');
        $data['kmArriver']=intval($this->input->post('dateArriver'));
        $data['montantCarburant']=intval($this->input->post('montantCarburant'));
        $data['quantiter']=floatval($this->input->post('quantiter'));
        $data['Motif']=$this->input->post('Motif');
        $data['terminer']=0;

        $this->load->model('utilisateurModel');
        $insert = $this->utilisateurModel->insertTrajet($data);
    }
}
?>