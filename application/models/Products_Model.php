<?php
Class Products_Model extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }
  public function insert_data($tablo,$data)
  {
	  if($this->db->insert($tablo,$data))
	  {
		  return true;
	  }
	  
  
  
  
  }
  public function update_data($tablo,$data,$Id)
  {
	  $this->db->where('id',$Id);
	  $this->db->update($tablo,$data);
	  return true;
  
  
  }
  
  public function get_basket($id)
  {
	  $sql="SELECT malzemeler.malzeme_adi as malzeme_adi, malzemeler.malzeme_fiyati as malzeme_fiyati, basket.* FROM basket
	  LEFT JOIN malzemeler ON basket.products_id=malzemeler.Id WHERE basket.customer_id=".$id;
	  $query=$this->db->query($sql);
	  if($query->num_rows()>= 0){
		  return $query->result();
		  
	  }else {
		  
		  return false;
	  }
	  
	  
  }
  
  
  
  
}

  ?>