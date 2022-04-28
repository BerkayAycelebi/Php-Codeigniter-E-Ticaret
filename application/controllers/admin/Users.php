<?php
class Users extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
              $this->load->database(); // Sayfada veritaban�na eri�memizi saglar
			  $this->load->library("session");
				$this->load->helper(array('form', 'url'));
				//$this->load->library("session");
				
        } 
		
		
		
		public function index()
		{$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		$query=$this->db->get("users");
		$data["veri"]=$query->result();
		  $data["title"]="Anasayfa";
		$this->load->view('admin/header',$baslik,$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
		
	  }
	  
	  
	
	   public function users_show()
	   {
		
		$query=$this->db->get("users");
		$data["veri"]=$query->result();
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		$data["title"]="Kullanıcı listeleme sayfası";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/users_show',$data);
		$this->load->view('admin/footer');
		
	  }
	  
	   public function add_user()
	   {$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		$data["title"]="Kullanıcı ekleme sayfası";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/user_add');
		$this->load->view('admin/footer');
		
	  }
	  
	   public function add_user_action()
	   {
		
		$data=array(
		'name' => $this->input->post('name'),
		'surname' => $this->input->post('surname'),
		'email' => $this->input->post('mail'),
		'password' => $this->input->post('password'),
		'status' => $this->input->post('status'),
		'authority' => $this->input->post('authority')
		);
		$this->load->model('Products_Model');
		 $this->load->library('session');
		$this->session->set_flashdata("result","Kullanıcı Başarıyla Eklendi");   
		$this->Products_Model->insert_data("users",$data); 
		
		redirect(base_url()."admin/users/users_show");
	}
	  
	  public function delete_action($id)
	{
		$this->db->query('DELETE FROM users WHERE id='.$id);
		redirect(base_url()."admin/users/users_show");
	}
	   public function edit($Id)
	{
		$query = $this->db->get_where("users",array("id"=>$Id)); 
        $data['veri'] = $query->result(); 
		$data["title"]="Kullanıcı Düzenleme Sayfası";
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/user_edit',$data);
		$this->load->view('admin/footer');
	}
	public function edit_action($Id)
	{
		$data=array(
		'name' => $this->input->post('name'),
		'surname' => $this->input->post('surname'),
		'email' => $this->input->post('mail'),
		'password' => $this->input->post('password'),
		'status' => $this->input->post('status'),
		'authority' => $this->input->post('authority')
		);
		//var_dump($data);
		//exit();
		$this->load->model('Home_Model');
		$this->Home_Model->update_data("users",$data,$Id); 
		$this->session->set_flashdata("result","Kullanıcı Başarıyla Güncellendi"); 
		redirect(base_url()."admin/users/users_show");
		
	}
	
	  public function preview_action($Id)
	{
		$query = $this->db->get_where("users",array("id"=>$Id)); 
        $data['veri'] = $query->result(); 
		$data["title"]="Kullanıcı Bilgileri Sayfası";
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/preview',$data);
		$this->load->view('admin/footer');
	}
	
}//main