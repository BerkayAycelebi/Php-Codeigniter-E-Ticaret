<?php
class Products extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
              $this->load->database(); // Sayfada veritaban�na eri�memizi saglar
				$this->load->helper(array('form', 'url'));
				//$this->load->library("session");
				
        } 
		
		
		
		
		public function index()
	   {
		  $query=$this->db->get("massage");
		$data["mesaj"]=$query->result(); 
		$data["title"]="Anasayfa";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
		
	  }
	  
	  
	
	    public function ekle()
	   {$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		$data["title"]="Ekleme Sayfası";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/add_page',$data);
		$this->load->view('admin/footer');
		
	  }
	  
	   public function ekle_action()
	   {
		
		$data=array(
		'malzeme_adi' => $this->input->post('ad'),
		'malzeme_fiyati' => $this->input->post('fiyat'),
		'malzeme_miktari' => $this->input->post('miktar'),
		'malzeme_turu' => $this->input->post('tur'),
		'malzeme_aciklamasi' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'description' => $this->input->post('description'),
		'malzeme_kisaaciklama' => $this->input->post('malzeme_kisaaciklama'),
		'status' => $this->input->post('status'),
		
		);
		$this->load->model('Products_Model');
		$this->Products_Model->insert_data("malzemeler",$data); 
		$this->session->set_flashdata("result","Malzeme Başarıyla Eklendi");   
		redirect(base_url()."admin/products/show");
	}
	
	
	 public function show()
	   {$query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		 $query=$this->db->get("malzemeler"); 
        $data["veri"]=$query->result(); 
		
		$data["title"]="Listeleme Sayfası";
	;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/products_show',$data);
		$this->load->view('admin/footer');
		
	  }
	public function sil($Id)
	{
		$this->db->query('DELETE FROM malzemeler WHERE id='.$Id);
		$this->session->set_flashdata("result","Malzeme  Başarıyla Silindi");   
		redirect(base_url()."admin/products/show");
	}
	  public function duzenle($Id)
	{  $query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		$query = $this->db->get_where("malzemeler",array("id"=>$Id)); 
        $data['veri'] = $query->result(); 
		$data["title"]="Düzenleme Sayfası";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/arrangement',$data);
		$this->load->view('admin/footer');
	}
	
	
	 public function duzenle_action($Id)
	{
		$data=array(
		'malzeme_adi' => $this->input->post('ad'),
		'malzeme_fiyati' => $this->input->post('fiyat'),
		'malzeme_miktari' => $this->input->post('miktar'),
		'malzeme_turu' => $this->input->post('tur'),
		'malzeme_aciklamasi' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'description' => $this->input->post('description'),
		'malzeme_kisaaciklama' => $this->input->post('malzeme_kisaaciklama'),
		'status' => $this->input->post('status')
		);
		$this->load->model('Products_Model');
		$this->Products_Model->update_data("malzemeler",$data,$Id); 
		$this->session->set_flashdata("result","Malzeme Başarıyla Güncellendi");   
		redirect(base_url()."admin/products/show");
		
	}
	
	public function resimekle($Id)
	{  	$query=$this->db->get("massage");
	$data["mesaj"]=$query->result();
		$data["title"]="Resim ekleme Sayfası";
		$data["Id"]=$Id;
		$query = $this->db->get_where("malzemeler",array("id"=>$Id)); 
        $data['veri'] = $query->result(); 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/picture_add',$data);
		$this->load->view('admin/footer');
	}
	
	  public function resimekle_action($Id)
	{
		
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 20000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
		
		$this->load->library('upload', $config); 
		
		if ( !$this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/picture_add', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
											
						
						$upload_data = $this->upload->data(); 
						$this->session->set_flashdata("result","Resim Başarıyla Eklendi"); 
						echo $file_name =   $upload_data['file_name']; 
						//echo "<br> Boyutu :" .$upload_data['file_size'];				
						$data=array(
							'malzeme_resmi' => $file_name 
						);
						$this->load->model('Products_Model');
					    $this->Products_Model->update_data("Malzemeler",$data,$Id); 
						
						
						//print_r($upload_data);
						redirect(base_url()."admin/products/show");
						
						
                }						
		
	}
	   public function add_picture_gallery($Id)
	{ 
	$query=$this->db->get("massage");
	$data["mesaj"]=$query->result();
	$srg=$this->db->query("SELECT * FROM malzemeler WHERE Id=$Id");
	  $data["veri"]=$srg->result();
	  $this->db->reset_query();
	  $query=$this->db->get("massage");
		$data["mesaj"]=$query->result();
		
		//$srg=$this->db->query("SELECT * FROM malzeme_resimleri WHERE malzeme_id=$Id");
	 // $data["veriler"]=$srg->result();
	
	 $query = $this->db->query("SELECT * FROM malzeme_resimleri WHERE malzeme_id=$Id");
	$data['veriler'] =$query->result();
	   //var_dump($data);
	  // exit();
	   $data["title"]="Galeri";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/picture_gallery_add',$data);
		$this->load->view('admin/footer');
	}
	     public function add_picture_gallery_action($Id)
	{
	$Id = $this->uri->segment(4);
		
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 20000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
		
		$this->load->library('upload', $config); 
		
		if ( !$this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/picture_gallery_add', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
											
						
						$upload_data = $this->upload->data(); 
						$this->session->set_flashdata("result","Resim Başarıyla Eklendi"); 
						echo $file_name =   $upload_data['file_name']; 
						//echo "<br> Boyutu :" .$upload_data['file_size'];				
						$data=array(
						' malzeme_id'=> $Id,
						'picture' => $file_name 
						);
						$this->load->model('Products_Model');
					    $this->Products_Model->insert_data("Malzeme_resimleri",$data); 
						
						
						//print_r($upload_data);
						redirect(base_url()."admin/products/add_picture_gallery/$Id");
						
						
                }						
		
	}
	
	public function delete_gallery_picture($Id,$malzeme_id)
	{
		$this->db->query('DELETE FROM malzeme_resimleri WHERE Id='.$malzeme_id);
		$this->session->set_flashdata("result","Galerideki Resim Başarıyla Silindi");   
		redirect(base_url()."admin/products/add_picture_gallery/$Id");
	}
	
	
	
}//main