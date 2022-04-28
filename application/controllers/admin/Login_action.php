<?php
class Login_action extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada veritabanına erişmemizi saglar
	
			//	$this->load->library("session");
				$this->load->helper(array('form', 'url'));
				$this->load->model('Admin_Model');
        }

	public function index()
	{  
		$data["title"]="Giriş Sayfası";
		$this->load->view('admin/login_form',$data);
		
	}

	public function login_ol()
	{   
		$query=$this->db->get("users");
		$data["veri"]=$query->result();
		
		
		$email=$this->input->post('email');
		$sifre=$this->input->post('password');
		
		
		$result = $this->Admin_Model->login($email,$sifre);
		
		if($result) {
				
				$sess_array = array();
				foreach($result as $row) {
                 $sess_array = array(
				 'id' => $row->Id,
				 'yetki' => $row->authority,
				 'email' => $row->email,
				 'adsoy' => $row->name
				 );
                 //var_dump('adsoy'); exit();
                 $this->session->set_userdata('logged_in', $sess_array);
				 
				 redirect(base_url()."admin/home");
			
				 
                 }
          		return TRUE;
          } 
		  
		  
		  else 
		  {
            $this->session->set_flashdata("login_hata","Geçersiz Email yada Şifre");   
          		
			$this->load->view('admin/login_form');
			
            return FALSE;
          }
		
	}
	public function logout()
	{
		 $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url()."admin/login_action");
	}

	
	} // Ana class
?>