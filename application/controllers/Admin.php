<?php

class Admin extends CI_Controller {
   
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
        redirect('admin/loginAdmin'); 
    }

    public function loginAdmin () {
        $this->load->view('admin/loginAdmin');
        
    }

    public function testLoginAdmin () {
        $notif = " ";
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $this->form_validation->set_rules('login','Email','required');
        $this->form_validation->set_rules('mdp','Password','required');
        if($this->form_validation->run()==TRUE){
        $data['login']=$this->input->post('login');
        $data['mdp']=$this->input->post('mdp');
        $this->load->model('adminModel');
        $check=$this->adminModel->testLoginAdmin($data);

        if($check!=FALSE)
        {

        $this->session->set_userdata('infoUser',$this->adminModel->getLoginAdmin($data));
        echo "marina eh";
        redirect('admin/acceuilBackOffice');
        }

        else
        {
        $notif = "mot de passe ou login incorrecte";
        $this->load->view('admin/loginAdmin' , array('notif' => $notif ));
        }

        }
    }   

    }

    public function acceuilBackOffice () {
        //var_dump($this->session->infoUser);
       
        $infoUser = $this->session->infoUser;
        $this->load->view('admin/header' , array('infoUser' => $infoUser));
        $this->load->view('admin/profile' );
        $this->load->view('admin/footer');
    }

    public function insererVoitureCrtl () {
        $infoUser = $this->session->infoUser;
         


        $this->load->view('admin/header', array('infoUser' => $infoUser));
        $this->load->view('admin/insererVoiture', array('chauffeurs'));
        $this->load->view('admin/footer');
    }


    public function insererVoitureBDD () {
            
        $infoUser = $this->session->infoUser;
        $data['numero']=$this->input->post('numero');
        $data['marque']=$this->input->post('marque');
        $data['modele']=$this->input->post('modele');
        $data['type']=intval($this->input->post('type'));

        $this->load->library('upload');
        $image = array();
        $ImageCount = count($_FILES['image_name']['name']);
        echo $ImageCount;
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['image_name']['name'][$i];
            $_FILES['file']['type']       = $_FILES['image_name']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['image_name']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['image_name']['error'][$i];
            $_FILES['file']['size']       = $_FILES['image_name']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/images/profiles/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $file[$i]['image_name'] = $imageData['file_name'];


            }
        }
         if(!empty($file)){
            $image = "";
            for($j = 0 ; $j <count($file) ; $j++) {
                $image = $image  . $file[$j]['image_name'] . "|";
            }
            $data['image_name'] = $image;
            $this->load->model('adminModel');
            $check=$this->adminModel->insererVoiture($data);                   
        }


        $this->load->view('admin/header', array('infoUser' => $infoUser));
        $this->load->view('admin/insererVoiture' , array('notif' => "inserer avec succes"  ));
        $this->load->view('admin/footer');

        
    }


}
?>