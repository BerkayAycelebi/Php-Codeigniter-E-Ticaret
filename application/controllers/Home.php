<?php class home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				//$this->load->library("session");
				$this->load->database();
				$this->load->helper(array('form', 'url'));
				$this->load->model('Home_Model');
				$this->load->model('Admin_Model');
				$this->load->model('Products_Model');

				
        } 
		
		public function index()
	   {
		   
		$query=$this->db->get("malzemeler"); 
        $data["veri"]=$query->result(); 
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('_content');
		$this->load->view('_footer');
		
}

  
	  public function detail($Id)
	   {
		$query = $this->db->get_where("malzemeler",array("id"=>$Id)); 
        $data['ayarlar'] = $query->result(); 
		$query = $this->db->get_where("malzemeler",array("id"=>$Id)); 
        $data['veri'] = $query->result(); 
		$sorgu=$this->db->query("SELECT * FROM malzeme_resimleri WHERE malzeme_id=$Id");
		$data["verilerim"]=$sorgu->result();
		
		$query = $this->db->get_where("malzeme_resimleri",array("malzeme_id"=>$Id)); 
        $data['veriler'] = $query->result(); 
		
		//$veriler=$query->result();
		
		
		
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider');
		$this->load->view('products_detail',$data);
		$this->load->view('_footer');
		   
		   
		   
	   }
	  
	  
	  public function about_us()
	{
		$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		
		$query=$this->db->get("malzemeler"); 
        $data["veri"]=$query->result(); 
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('about_us',$data);
		$this->load->view('_footer');
		
	}
	
	
	
	
	 public function massage()
	{   $query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		
		$this->load->view('_header',$data);
		$this->load->view('contacts');
		$this->load->view('_footer');
		
		
	}
	
	  public function massage_action()
	{
		// Form verilerini alacaz
		$data=array(
		'name' => $this->input->post('isim'),
		'email' => $this->input->post('email'),
		'phone' => $this->input->post('tel'),
		'massage' => $this->input->post('mesaj')
		);
		
		$this->Home_Model->insert_data("massage",$data); 
		
		//Email ayarlarını confige göndereceğiz
		$query=$this->db->get("ayarlar"); 
        $data['veri']=$query->result();
		$config=array(
		'protocol' => 'smtp',
		'smtp_host' => $data['veri'][0]->smtpserver,
		'smtp_port' => $data['veri'][0]->smtppoint,
		'smtp_user' => $data['veri'][0]->smtpmail,
		'smtp_pass' => $data['veri'][0]->password,
		'mailtype'  => 'html', 
		'charset'   => 'utf-8'
		);

//Email gönderiliyor.
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from($data['veri'][0]->smtpmail);
		$this->email->to($this->input->post('email'));
		$this->email->subject('Mesajınız için teşekkür ederiz');
		$mesaj="Gönderdiğiniz mesajı aldık";
		$this->email->message($mesaj);
		if($this->email->send())
		{$this->session->set_flashdata("mesaj_sent","Mesaj basarili bir sekilde iletildi."); 
	}else 
		show_error($this->email->print_debugger());
	//	var_dump($data);
	//	exit();
		
		
		
		redirect(base_url()."Home/massage");
	}
	
	public function register_action()
	   {
		
		$data=array(
		'name' => $this->input->post('name'),
		'surname' => $this->input->post('surname'),
		'email' => $this->input->post('email'),
		'phone' => $this->input->post('phone'),
		'password' => $this->input->post('password')
	
		);
		//var_dump($data);
		//exit();
		$this->load->model('Products_Model');
		$this->Products_Model->insert_data("users",$data); 
		$this->session->set_flashdata("result","Kayıt Başarıyla Gerçekleşti"); 
		redirect(base_url()."Home/login");
	}
	
	
	
	public function login()
	
	  
	{   $query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		
	
	    $this->load->view('_header',$data);
	  //  $this->load->view('_footer');
		$this->load->view('login');
		
	}
	
	public function login_action()
	{
		$email=$this->input->post('email');
		$sifre=$this->input->post('password');
		//var_dump($email,$sifre);
		//exit();
		$this->load->model('Admin_Model');
		$result = $this->Admin_Model->login($email,$sifre);
		
		if($result) {
				
				$sess_array = array();
				foreach($result as $row) {
                 $sess_array = array(
				 'id' => $row->Id,
				 'yetki' => $row->status,
				 'email' => $row->email,
				 'adsoy' => $row->name
				 );
                 //var_dump('adsoy'); exit();
                 $this->session->set_userdata('logged_in', $sess_array);
				 
				 redirect(base_url()."Home");
			
				 
                 }
          		return TRUE;
          } 
		  else 
		  {
            $this->session->set_flashdata("result","Geçersiz Email Yada Şifre");   
          		
			$this->load->view('login');
			
            return FALSE;
          }
		
	}
public function logout()
	{
		 $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url()."Home");
	}
	
	
	
	public function lake()
	{
			$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Göl Kamışı'");
						$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('lake');
		$this->load->view('_footer');
		
		
		
	}
	
	
	public function surf()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Surf Kamış'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('surf');
		$this->load->view('_footer');
		
		
		
	}
	
		public function spin()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Spin Kamış'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('spin');
		$this->load->view('_footer');
		
		
		
	}
	public function carp()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Sazan Kamışı'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('carp');
		$this->load->view('_footer');
		
		
		
	}
	public function jigging()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Jigging Makina'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('jigging');
		$this->load->view('_footer');
		
		
		
	}
	
	public function spin_machine()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Spin Makina'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('spin_machine');
		$this->load->view('_footer');
		
		
		
	}
	
	
	public function capstan_machine()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Çıkrık Makina'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('capstan_machine');
		$this->load->view('_footer');
		
		
		
	}
	public function carp_machine()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Sazan Makinası'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('carp_machine');
		$this->load->view('_footer');
		
		
		
	}
	public function blue_fish()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Lüfer Ve Turna Kaşıkları'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('blue_fish');
		$this->load->view('_footer');
		
		
		
	}
	public function rotary_spoon()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Döner Kaşıklar'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('rotary_spoon');
		$this->load->view('_footer');
		
		
		
	}
	public function rapala()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Rapala'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('rapala');
		$this->load->view('_footer');
		
		
		
	}
	public function lead()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Kurşunlar'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('lead');
		$this->load->view('_footer');
		
		
		
	}
	public function fishline()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='Misinalar'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('fishline');
		$this->load->view('_footer');
		
		
		
	}
	public function hook()
	{
		$sorgu=$this->db->query("SELECT * FROM malzemeler WHERE malzeme_turu='İğneler'");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar"); 
        $data["ayarlar"]=$query->result(); 
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('_sidebar');
		$this->load->view('hook');
		$this->load->view('_footer');
		
		
		
	}
	
  public function communication()
	{
		$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		
		$query=$this->db->get("malzemeler"); 
        $data["veri"]=$query->result(); 		
		$this->load->view('_header',$data);
		//$this->load->view('_slider',$data);
		$this->load->view('communication',$data);
		$this->load->view('_footer');
		
	}
	
	 public function add_basket($id)
	{
	
			$data=array(
		'products_id' => $id,
		'piece' => $this->input->post("piece"),
		'picture' => $this->input->post("picture"),
		//'products_name' =>$this->input->post("name"),
		//'cost' =>$this->input->post("cost"),
		'customer_id' =>$this->session->logged_in['id']
	
		);
		
		//var_dump($data);
		//exit();
		$this->load->model('Products_Model');
		$this->Products_Model->insert_data("basket",$data); 
		$this->session->set_flashdata("result","Kayıt Başarıyla Gerçekleşti"); 
		redirect(base_url()."Home");
		
	}
	
	 public function basket_show()
	{
		$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		
		$sorgu=$this->db->query("SELECT * FROM users WHERE Id=".$this->session->logged_in['id']);
		$data["veriler"]=$sorgu->result();
		
		$result=$this->Products_Model->get_basket($this->session->logged_in['id']);
		$data["veri"]=$result;
		//var_dump($data);
		//exit();
		$this->load->view('_header',$data);
		$this->load->view('basket_show');
		$this->load->view('_footer');
		
	}
	
	
	public function delete_basket($Id)
	{
		$this->db->query('DELETE FROM basket WHERE Id='.$Id);
		$this->session->set_flashdata("result","Malzeme  Başarıyla Silindi");   
		redirect(base_url()."Home/basket_show");
	}
	
	
	
	 public function account_show()
	{
		$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		
		$sorgu=$this->db->query("SELECT * FROM users WHERE Id=".$this->session->logged_in['id']);
		$data["veri"]=$sorgu->result();
	
	  $this->load->view('_header',$data);
		$this->load->view('account');
		$this->load->view('_footer');
		
	
	
	}
	
	
	 public function account_update()
	{
		$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		
		$sorgu=$this->db->query("SELECT * FROM users WHERE Id=".$this->session->logged_in['id']);
		$data["veri"]=$sorgu->result();
	
	   	$data=array(
		
		'name' => $this->input->post("name"),
		'surname' => $this->input->post("surname"),
		'email' => $this->input->post("email"),
		'password' => $this->input->post("password"),
		'phone' => $this->input->post("phone"),
	);
	$this->Admin_Model->update_data("users",$data,$this->session->logged_in['id']); // ekleme fonk. datalarᠧ֮der
	$this->session->set_flashdata("result","İletişim Bilgileri Eklendi");
	 redirect(base_url()."Home/account_show");
	}
	public function order_complete()
	{
	   $bank_verify=1;
	   
	  //Bankadan onay alınır.
	  //Siparişe sipariş bilgileri eklenir.
	  //Sepet boşaltma
	  
	  if($bank_verify==1)
		  
		  {
			  $data=array(
			  	'total' => $this->input->post("total"),
				'name' => $this->input->post("name"),
				'surname' => $this->input->post("surname"),
				'email' => $this->input->post("email"),
				'city' => $this->input->post("city"),
				'district' => $this->input->post("district"),
				'address' => $this->input->post("address"),
				'phone' => $this->input->post("phone"),
				'customer_id'=>$this->session->logged_in['id']
				);
				//var_dump($data);
				//exit();
				
			  $order_id=$this->Admin_Model->insert_data("order",$data);
			  $products=$this->Products_Model->get_basket($this->session->logged_in['id']);
			  
			  
			  
			  
			  
		foreach($products as $rs)
			  {
				  
				   $data=array(
			  	'customer_id' => $this->session->logged_in['id'],
				'order_id' => $order_id,
				'products_id' => $rs->products_id,
				'total' => $this->input->post("total"),
				'piece' => $rs->piece,
				'name' => $this->input->post("name")
				
				);
				  
				  
				  
				/* $this->db->query("INSERT INTO order_products ('customer_id','order_id','products_id','total,piece')
				 VALUES (".$this->session->logged_in['id'].",".$this->Admin_Model->insert_data("order",$data).",".$rs->products_id.",".$rs->total.",".$rs->piece.")"); 
				 */
				 }
				 
				 $this->Admin_Model->insert_data("order_products",$data);
				 
			  $this->db->query("DELETE FROM basket  WHERE customer_id=".$this->session->logged_in['id']);
			  	$this->session->set_flashdata("result","Siparişiniz Tamamlanmıştır.Teşekkür Ederiz");
				$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
			   $this->load->view('_header',$data);
				$this->load->view('order_complete');
				$this->load->view('_footer');
		        
		  }
	     else {
			 	$this->session->set_flashdata("result","Siparişiniz alınamadı.Ödeme bilgilerinizi kontol ediniz.");
			    	 redirect(base_url()."Home/basket_show");
		 }
	
	
	}

	
		 public function order_show()
	{
		$query=$this->db->get("ayarlar"); 
        $data['ayarlar']=$query->result(); 
		$sorgu = $this->db->get_where("order",array("customer_id"=>$this->session->logged_in['id'])); 
		
		$data["veri"]=$sorgu->result();
			$data["title"]='Siparişler';
		
		//var_dump($data);
		//exit();
		$this->load->view('_header',$data);
		$this->load->view('order_show',$data);
		$this->load->view('_footer');
		
	}
	
	
	
	
	
	
	
	
	
	
	
}
?>