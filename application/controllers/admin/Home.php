<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
              $this->load->database();//databese e eri�meyi sa�lar
				$this->load->helper(array('form', 'url'));
				//$this->load->model('Urunler_Model');//model tan�mlama
        } 
		
		
		
		public function index()
		
	   {
		
		
		$data["title"]="Anasayfa";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/content',$data);
		$this->load->view('admin/footer',$data);
		//var_dump($data);
		//exit();
	  }
	  
		 public function about_us()
	{   
		$query=$this->db->get("ayarlar"); 
        $data["veri"]=$query->result(); 
        $data["title"]= "Hakkımızda";
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		//var_dump($data["veri"]); exit();
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/about_us',$data);
		$this->load->view('admin/footer');
	}
	  
	public function about_us_action($Id)
	{
	
		$data=array(
			'aboutus' => $this->input->post('aciklama')
		);
		$this->load->model('Admin_Model');
		$this->Admin_Model->update_data("ayarlar",$data,$Id); // ekleme fonk. datalar� g�nder
		$this->session->set_flashdata("result","Hakkımızda Bilgileri Eklendi");
		redirect(base_url()."admin/home/about_us");
		
		
		
		
	}
	
	
	public function massage()
	{
		$query=$this->db->get("massage"); 
        $data["veri"]=$query->result(); 
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		
		$data["title"]="Mesajlar";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/massage_show');
		$this->load->view('admin/footer');
	}
	
	    public function massage_delete($Id)
	{
		$this->db->query('DELETE FROM massage WHERE id='.$Id);
		redirect(base_url()."admin/home/massage");
	}
	  
	   public function communication()
	{   
		$query=$this->db->get("ayarlar"); 
        $data["veri"]=$query->result(); 
        $data["title"]= "İletişim";
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		//var_dump($data["veri"]); exit();
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/communication',$data);
		$this->load->view('admin/footer');
	}
	  
	  public function communication_action($Id)
	{
	
		$data=array(
			'communication' => $this->input->post('communication')
		);
		$this->load->model('Admin_Model');
		$this->Admin_Model->update_data("ayarlar",$data,$Id); // ekleme fonk. datalar񠧶nder
		$this->session->set_flashdata("result","İletişim Bilgileri Eklendi");
		redirect(base_url()."admin/home/communication");
		
		
		
		
	}
	   
	   public function settings()
	{   
		$query=$this->db->get("ayarlar"); 
        $data["veri"]=$query->result(); 
        $data["title"]="Ayarlar";
		
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/settings',$data);
		$this->load->view('admin/footer');
	}
	   public function settings_action($Id)
	{
		$data=array(
		'malzeme_adi' => $this->input->post('malzeme_adi'),
		'keywords' => $this->input->post('keywords'),
		'description' => $this->input->post('description'),
		'smtpserver' => $this->input->post('smtpserver'),
		'smtppoint' => $this->input->post('smtppoint'),
		'smtpmail' => $this->input->post('smtpmail'),
		'password' => $this->input->post('password'),
		'city' => $this->input->post('city'),
		'address' => $this->input->post('address'),
		'tel' => $this->input->post('tel'),
		'fax' => $this->input->post('fax'),
		'facebook' => $this->input->post('facebook')
		);
		$this->load->model('Products_Model');
		$this->Products_Model->update_data("ayarlar",$data,$Id); 
		$this->session->set_flashdata("result","Başarıyla Güncellendi");   
		redirect(base_url()."admin/home/settings");
		
	}
	  
	   public function read($Id)
	{   
		$query=$this->db->get("ayarlar"); 
        $data["veri"]=$query->result(); 
		$data["title"]="Mesajlar";
		
		$query = $this->db->get_where("massage",array("Id"=>$Id)); 
        $data['veri'] = $query->result(); 
        $this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/read',$data);
		$this->load->view('admin/footer');
		$x='okundu';
		$data=array(
			'status' => $x
		);
		$this->load->model('Admin_Model');
		$this->Admin_Model->update_data("massage",$data,$Id); // ekleme fonk. datalar񠧶nder
		$this->session->set_flashdata("result","İletişim Bilgileri Eklendi");
		
		
	}
	  	 public function show_order()
	{
		$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		$sorgu = $this->db->get("order");
		$data['veri']=$sorgu->result();
	    $data["title"]="Siparişler";
		
		$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		
		
		
		  $this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/order_show',$data);
		$this->load->view('admin/footer');
		
	}
	
	   public function order($Id)
	{   
		$query=$this->db->get("ayarlar"); 
        $data["veri"]=$query->result(); 
		$data["title"]="Mesajlar";
		
		$query = $this->db->get_where("order",array("Id"=>$Id)); 
        $data['veri'] = $query->result(); 
        $x='Onaylandı';
		$data=array(
			'order_status' => $x
		);
		$this->load->model('Admin_Model');
		$this->Admin_Model->update_data("order",$data,$Id); // ekleme fonk. datalar񠧶nder
		$this->session->set_flashdata("result","Onaylandı");
		redirect(base_url()."admin/home/show_order");
		
		
	}
	   public function order_cargo($Id)
	{   
		$query=$this->db->get("ayarlar"); 
        $data["veri"]=$query->result(); 
		$data["title"]="Mesajlar";
		
		$query = $this->db->get_where("order",array("Id"=>$Id)); 
        $data['veri'] = $query->result(); 
        $x='Kargoya  Verildi';
		$data=array(
			'order_status' => $x
		);
		$this->load->model('Admin_Model');
		$this->Admin_Model->update_data("order",$data,$Id); // ekleme fonk. datalar񠧶nder
		$this->session->set_flashdata("result","Kargoya Verildi");
		redirect(base_url()."admin/home/show_order");
		
		
	}
	
}